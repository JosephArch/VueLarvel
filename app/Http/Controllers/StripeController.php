<?php

namespace AguaymantoHotel\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    //
    public function __construct(){
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function charge(Request $request){
        # Select a client library to see examples of handling different kinds of errors.
        try {
            // Use Stripe's library to make requests...
            \Stripe\Token::create([
              'card' => [
                'number' => $request->cc_number,
                'exp_month' => $request->expiry_month,
                'exp_year' => $request->expiry_year,
                'cvc' => $request->cvv,
              ],
            ]);
            \Stripe\Charge::create([
              'amount' => $request->amount * 100,
              'currency' => 'pen',
              'source' => $token,
              'description' => $request->description,
              'receipt_email' => $request->email,
            ]);
            return response()->json([
              'success' => true
              ]);
          } catch(\Stripe\Exception\CardException $e) {
            // Since it's a decline, \Stripe\Exception\CardException will be caught
            return response()->json($e->getJsonBody());
          } catch (\Stripe\Exception\RateLimitException $e) {
            // Too many requests made to the API too quickly
            return response()->json($e->getJsonBody());
          } catch (\Stripe\Exception\InvalidRequestException $e) {
            // Invalid parameters were supplied to Stripe's API
            return response()->json($e->getJsonBody());
          } catch (\Stripe\Exception\AuthenticationException $e) {
            // Authentication with Stripe's API failed
            // (maybe you changed API keys recently)
            return response()->json($e->getJsonBody());
          } catch (\Stripe\Exception\ApiConnectionException $e) {
            // Network communication with Stripe failed
            return response()->json($e->getJsonBody());
          } catch (\Stripe\Exception\ApiErrorException $e) {
            // Display a very generic error to the user, and maybe send
            // yourself an email
            return response()->json($e->getJsonBody());
          } catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            return response()->json($e->getJsonBody());
          }
    }
}

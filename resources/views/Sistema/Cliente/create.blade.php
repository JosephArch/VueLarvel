@extends('layouts.admin')
@section ('contenido')
  
            <h3> Nuevo Cliente</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $caputra_error)
                    <li>{{$caputra_error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            {!!Form::open(array('url'=>'/cliente','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}



            {!!Form::close()!!}



@endsection

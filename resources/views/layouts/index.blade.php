@extends('layouts.admin')
@section ('contenido')




<section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">

        @foreach ($Habitaciones as $hab)
        <?php
            $classe="icon bg-blue";
            $estado =$hab->estado;
            switch ($estado) {            
                case "Activo":
                    $classe="icon bg-blue";
                    break;
                case "Ocupado":
                    $classe="icon bg-green";
                    break;
                case "Mantenimiento":
                    $classe="icon bg-yellow";
                    break;
                case "Inhabilitado":
                    $classe="icon bg-red";
                    break;
            }
        ?>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
              <a href="{{URL::action('HabitController@edit',$hab->id_habitacion)}}">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">{{$hab->tipohabitacion}}</h5>
                          <h2 class="mb-3 font-18">{{$hab->nombre_n_habitacion}}</h2>
                          <p class="mb-0"><span class="{{$classe}}">{{$hab->estado}}</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/bed.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </a>
              </div>
            </div>
        @endforeach
    </div>
  </div>
</section>
@endsection

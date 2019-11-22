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
        <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                  <div class="{{$classe}}"><i class="fa fa-bed"></i></div>
                    <div class="title"><span>{{$hab->tipohabitacion}}</span>
                    <div class=""><strong><span>{{$hab->nombre_n_habitacion}}</span></strong></div>
                        <div role="progressbar" class="">{{$hab->estado}}</div>
                      
                    </div>

                  </div>
                </div>
        @endforeach
    </div>
  </div>
</section>
@endsection

@extends('layouts.admin')
@section ('contenido')
</section>
<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Habitaciones</h4></span>&nbsp;&nbsp;&nbsp;&nbsp;                
        <h4><a href="tipohabitacion/create"><button class="btn btn-outline-success">Nuevo</button></a></h4>
                  <div class="card-header-form">
                  
                    <form>
                    
                      <div class="input-group">
                      @include('sistema.Tipohabitacion.search')
                        
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                      <th>Id</th>
                    <th>Nombre del tipo</th>
                    <th>Descripcion caracteristicas</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($Tipos as $tip)
                    <tr>
                        <td>{{ $tip->id_tipodehabitacion}}</td>
                        <td>{{ $tip->nombredeltipo}}</td>
                        <td>{{ $tip->descripcion_caracteristicas}}</td>
                        <td>{{ $tip->precio_habitacion}}</td>
                        <td>
                        <a href="{{URL::action('TipohabController@edit',$tip->id_tipodehabitacion)}}"><button class="btn btn-outline-info">Editar</button></a>&nbsp;&nbsp;
                        <a href="" data-target="#modal-delete-{{$tip->id_tipodehabitacion}}" data-toggle="modal"><button class="btn btn-outline-danger">Eliminar</button></a>
                        </td>
                    </tr>
                    @include('Sistema.Tipohabitacion.modal')
                @endforeach
                    </table>
                  </div>
                </div>
              </div>
              {{$Tipos->render()}}
            </div>
          </div>
    @endsection
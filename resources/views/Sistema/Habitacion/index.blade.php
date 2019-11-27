@extends('layouts.admin')
@section ('contenido')
<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Habitaciones</h4></span>&nbsp;&nbsp;&nbsp;&nbsp;
                  
        <h4><a href="habitacion/create"><button class="btn btn-outline-success">Nuevo</button></a></h4>
                  <div class="card-header-form">
                  
                    <form>
                    
                      <div class="input-group">
                      @include('sistema.Habitacion.search')
                        
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                    <th>Id</th>
                    <th>Nombre de Habitacion</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($Habitaciones as $hab)
                    <tr>
                        <td>{{ $hab->id_habitacion}}</td>
                        <td>{{ $hab->nombre_n_habitacion}}</td>
                        <td>{{ $hab->tipohabitacion}}</td>
                        <td>{{ $hab->estado}}</td>
                        <td>
                        <a href="{{URL::action('HabitController@edit',$hab->id_habitacion)}}"><button class="btn btn-outline-primary">Editar</button></a>
                        {{-- <a href="" data-target="#modal-delete-{{$hab->id_habitacion}}" data-toggle="modal"><button class="btn btn-danger">Estado</button></a> --}}
                        </td>
                    </tr>
                    {{-- @include('Sistema.Habitacion.modal') --}}
                @endforeach
                    </table>
                  </div>
                </div>
              </div>
              {{$Habitaciones->render()}}
            </div>
          </div>
@endsection
@extends('layouts.admin')
@section ('contenido')

<div class="project">
                <div class="row bg-white has-shadow">
        <h3>Listado de Clientes </h3> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        @include('sistema.cliente.search')&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="cliente/create"><button class="btn btn-success">Nuevo</button></a> 
    </div>

                <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                        <thead>
                    <th>Cod</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Tipo de Documento</th>
                    <th>N° de Documento</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Email</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($humano as $hum)
                    <tr>
                        <td>{{ $hum->id_humano}}</td>
                        <td>{{ $hum->nombres}}</td>
                        <td>{{ $hum->apellidos}}</td>
                        <td>{{ $hum->tipode_documento}}</td>
                        <td>{{ $hum->n_documento}}</td>
                        <td>{{ $hum->telefono}}</td>
                        <td>{{ $hum->direccion}}</td>
                        <td>{{ $hum->email}}</td>
                        <td>
                        <a href="{{URL::action('ClienteController@edit',$hum->id_humano)}}"><button class="btn btn-info">Editar&nbsp;&nbsp;&nbsp;&nbsp;</button></a><p><br>
                        <a href="" data-target="#modal-delete-{{$hum->id_humano}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>
                    @include('Sistema.Cliente.modal')
                @endforeach
           </table> 
        </div>
        {{$humano->render()}}
                    </div>

@endsection
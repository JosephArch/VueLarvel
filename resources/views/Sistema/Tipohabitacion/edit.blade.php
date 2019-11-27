@extends('layouts.admin')
@section ('contenido')
    </section>
                <div class="card">
                  <div class="card-header">
                    
                    <h4>TIpos de Habitaciones</h4>
                    @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $caputra_error)
                    <li>{{$caputra_error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                  </div>
                  {!!Form::model($tipohabitacion,['method'=>'PATCH','route'=>['tipohabitacion.update',$tipohabitacion->id_tipodehabitacion]])!!}
            {{Form::token()}}
                  <div class="card-body">
                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label class="inputAddress">Nombre del Tipo</label>
                          <input type="text" name="nombredeltipo" class="form-control" value="{{$tipohabitacion->nombredeltipo}}"><small class="form-text"></small>
                        </div>
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Descripcion del tipo</label>
                        <input type="text" name="descripcion_caracteristicas" class="form-control" value="{{$tipohabitacion->descripcion_caracteristicas}}"><small class="form-text"></small>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Address</label>
                      <input type="number" step="any" min="0" name="precio_habitacion" class="form-control" value="{{$tipohabitacion->precio_habitacion}}"><small class="form-text"></small>
                    </div>
                  </div>
                  <div class="card-footer">
                          <button class="btn btn-primary" type="submit">Guardar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <button class="btn btn-danger" type="reset">Cancelar</button>
                  </div>
                </div>
</form>
                {!!Form::close()!!}
@endsection 
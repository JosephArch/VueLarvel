@extends('layouts.admin')
@section ('contenido')
  </section>
                <div class="card">
                  <div class="card-header">
                    
                    <h4>Nuevo Producto</h4>
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
                  {!!Form::open(array('url'=>'/producto','method'=>'POST','autocomplete'=>'off','enctype'=>'multipart/form-data'))!!}
            {{Form::token()}}
                  <div class="card-body">
                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label class="inputAddress">Nombre del Producto</label>
                          <input type="text" name="nombre_producto" class="form-control" placeholder="Nombre del Producto ..."><small class="form-text"></small>
                        </div>
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Descripcion del Producto</label>
                        <input type="text" name="descripcion" class="form-control" placeholder="Descripcion del Producto ..."></small>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                          <label class="inputAddress">Stock del Producto</label>
                          <input type="number" step="any" min="0" name="stock" class="form-control" placeholder="Stock del Producto ..."></small>
                        </div>
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Precio de Venta</label>
                        <input type="number" step="any" min="0" name="precio_venta" class="form-control" placeholder="Precio de Venta ..."></small>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Imagen</label>
                      <input type="file" name="imagen" accept="image/*" class="form-control"></small>
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

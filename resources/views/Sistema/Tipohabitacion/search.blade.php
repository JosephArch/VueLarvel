{!! Form::open(array('url'=>'/tipohabitacion','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}

        <input type="text" class="form-control" name="searchText" placeholder="Buscar ..." value="{{$searchText}}">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
            
        </span>

{{Form::close()}}

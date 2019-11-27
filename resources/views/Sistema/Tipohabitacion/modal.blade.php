<div class="modal fade modal-slide-in-right" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$tip->id_tipodehabitacion}}">
{{Form::Open(array('action'=>array('TipohabController@destroy',$tip->id_tipodehabitacion),'method'=>'delete'))}}
<div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        <div class="modal-body">
            <p>Confirme si desea Eliminar el Producto de nombre : {{$tip->id_tipodehabitacion}}</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-outline-danger">Confirmar</button>
        </div>
    </div>
</div>
{{Form::Close()}}
</div>

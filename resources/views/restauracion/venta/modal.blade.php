 <div class="modal fade modal-slide-in-right" aria-hidden="true" 
role="dialog" tabindex="0" id="modal-delete-{{$ven->idVenta}}"> 
  {{Form::Open(array('action'=>array('RestauracionVentaController@destroy',$ven->idVenta),'method'=>'delete'))}}

  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <div class="modal-header"> 
          <button type="button" class="close" data-dismiss="modal"  
          aria-label="Close"> 
                       <span aria-hidden="true">×</span> 
                  </button> 
                  <h4 class="modal-title">Activar Venta</h4> 
        </div> 
        <div class="modal-body"> 
          <p>Confirme si desea Activar Nuevamente esta Venta </p> 
        </div> 
        <div class="modal-footer"> 
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
          <button type="submit" class="btn btn-primary">Confirmar</button> 
        </div> 
      </div> 
    </div> 
    {{Form::Close()}} 
  
 
  </div> 
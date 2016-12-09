<div class="modal fade" id="searchProveedorModal" tabindex="-1" role="dialog" aria-labelledby="busquedaModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >Buscar Proveedor</h4>
      </div>

      <div class="modal-body">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" id="id">

        <div class='row'>
            <div class='col-md-4'>            
                {!!Form::label('id','Codigo')!!}        
                {!!Form::text('id_m',null,['id'=>'id_m','class'=>'form-control'])!!}
            </div>
            <div class='col-md-4'>            
                {!!Form::label('nit','Nit')!!}        
                {!!Form::text('nit_m',null,['id'=>'nit_m','class'=>'form-control'])!!}
            </div>
            <div class='col-md-4'>            
                {!!Form::label('razonsocial','Razón social')!!}        
                {!!Form::text('razonsocial_m',null,['id'=>'razonsocial_m','class'=>'form-control'])!!}
            </div>
        </div>

      </div>
      <div class="modal-footer">
      {!!link_to('#', $title='Buscar', $attributes = ['id'=>'buscar', 'class'=>'btn btn-primary'], $secure = null)!!}
      </div>
      <div id="resultado" class="pre-scrollable modal-body" style='display:none' >
        <table class="table">
          <thead>
            <th>Codigo</th>
            <th>Nit</th>
            <th>Razon Social</th>
            <th>Elegir</th>
          </thead>
          <tbody id="registros"></tbody>
        </table>
      </div>


    </div>
  </div>
</div>
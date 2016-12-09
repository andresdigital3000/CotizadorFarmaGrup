<div class="form-group">
	<label for="id" class="col-md-4 control-label">Codigo</label>
	<div class="col-md-6">
	    <input id="id" type="text" class="form-control" name="id" value="{!!$prov->id!!}">
	</div>
</div>

<div class="form-group">
	<label for="nit" class="col-md-4 control-label">Nit</label>
	<div class="col-md-6">
		<input id="nit" type="text" class="form-control" name="nit" value="{!!$prov->nit!!}">
	</div>
</div>

<div class="form-group">
	<label for="razonsocial" class="col-md-4 control-label">Razon Social</label>
	<div class="col-md-6">
		<input id="razonsocial" type="text" class="form-control" name="razonsocial" value="{!!$prov->razonsocial!!}">
	</div>
</div>

<div class="form-group">
	<label for="ubccion" class="col-md-4 control-label">Ubicacion</label>
	<div class="col-md-6">
		<input id="ubccion" type="text" class="form-control" name="ubccion" value="{!!$prov->ubccion!!}">
	</div>
</div>

<div class="form-group">
	<label for="ciudad" class="col-md-4 control-label">Ciudad</label>
	<div class="col-md-6">
		<input id="ciudad" type="ciudad" class="form-control" name="ciudad" value="{!!$prov->ciudad!!}">
	</div>
</div>    

<div class="form-group">
	<label for="pais" class="col-md-4 control-label">Pais</label>
	<div class="col-md-6">
		<input id="pais" type="text" class="form-control" name="pais" value="{!!$prov->pais!!}">
	</div>
</div>   

<div class="form-group">
	<label for="telfno" class="col-md-4 control-label">Telefono</label>
	<div class="col-md-6">
		<input id="telfno" type="text" class="form-control" name="telfno" value="{!!$prov->telfno!!}">
	</div>
</div>   

<div class="form-group">
	<label for="fax" class="col-md-4 control-label">Fax</label>
	<div class="col-md-6">
		<input id="fax" type="text" class="form-control" name="fax" value="{!!$prov->fax!!}">
	</div>
</div>   

<div class="form-group">
	<label for="email" class="col-md-4 control-label">Correo</label>
	<div class="col-md-6">
		<input id="email" type="text" class="form-control" name="email" value="{!!$prov->email!!}">
	</div>
</div>   

<div class="form-group">
	<label for="contcto" class="col-md-4 control-label">Contacto</label>
	<div class="col-md-6">
		<input id="contcto" type="text" class="form-control" name="contcto" value="{!!$prov->contcto!!}">
	</div>
</div>

<div class="form-group">
	<label for="nal_int" class="col-md-4 control-label">Nacional - Internacional</label>
	<div class="col-md-6">
		{!!Form::select('nal_int', array('Nacional' => 'Nacional', 'Internacional' => 'Internacional'));!!}
	</div>
</div> 

<div class="form-group">
	<label for="bancarios_cc" class="col-md-4 control-label">C/C</label>
	<div class="col-md-6">
		<input id="bancarios_cc" type="text" class="form-control" name="bancarios_cc" value="{!!$prov->bancarios_cc!!}">
	</div>
</div> 

<div class="form-group">
	<label for="bancarios_swiftcode" class="col-md-4 control-label">Swift Code</label>
	<div class="col-md-6">
		<input id="bancarios_swiftcode" type="text" class="form-control" name="bancarios_swiftcode" value="{!!$prov->bancarios_swiftcode!!}">
	</div>
</div> 

<div class="form-group">
	<label for="bancarios_refrnce" class="col-md-4 control-label">Referencia Bancaria</label>
	<div class="col-md-6">
		<input id="bancarios_refrnce" type="text" class="form-control" name="bancarios_refrnce" value="{!!$prov->bancarios_refrnce!!}">
	</div>
</div> 

<div class="form-group">
	<label for="bancarios_tt" class="col-md-4 control-label">T/T</label>
	<div class="col-md-6">
		<input id="bancarios_tt" type="text" class="form-control" name="bancarios_tt" value="{!!$prov->bancarios_tt!!}">
	</div>
</div> 

<div class="form-group">
	<label for="bancarios_estdo" class="col-md-4 control-label">Estado</label>
	<div class="col-md-6">
		<input id="bancarios_estdo" type="text" class="form-control" name="bancarios_estdo" value="{!!$prov->bancarios_estdo!!}">
	</div>
</div> 

<div class="form-group">
	<label class="col-md-4 control-label">Moneda</label>
	<div class="col-md-6">
		<input id="moneda" type="text" class="form-control" name="moneda" value="{!!$prov->moneda!!}">
	</div>
</div>
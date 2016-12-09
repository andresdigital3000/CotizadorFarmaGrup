<div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
	<label for="id" class="col-md-4 control-label">Codigo</label>
	<div class="col-md-6">
	    <input id="id" type="text" class="form-control" name="id" value="{!!$prov->id!!}">
		@if ($errors->has('id'))
	    	<span class="help-block"><strong>{{ $errors->first('id') }}</strong></span>
	    @endif
	</div>
</div>

<div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
	<label for="nit" class="col-md-4 control-label">Nit</label>
	<div class="col-md-6">
		<input id="nit" type="text" class="form-control" name="nit" value="{!!$prov->nit!!}">
		@if ($errors->has('nit'))
			<span class="help-block"><strong>{{ $errors->first('nit') }}</strong></span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('razonsocial') ? ' has-error' : '' }}">
	<label for="razonsocial" class="col-md-4 control-label">Razon Social</label>
	<div class="col-md-6">
		<input id="razonsocial" type="text" class="form-control" name="razonsocial" value="{!!$prov->razonsocial!!}">
		@if ($errors->has('razonsocial'))
			<span class="help-block"><strong>{{ $errors->first('razonsocial') }}</strong></span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('ubccion') ? ' has-error' : '' }}">
	<label for="ubccion" class="col-md-4 control-label">Ubicacion</label>
	<div class="col-md-6">
		<input id="ubccion" type="text" class="form-control" name="ubccion" value="{!!$prov->ubccion!!}">
		@if ($errors->has('ubccion'))
			<span class="help-block"><strong>{{ $errors->first('ubccion') }}</strong></span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
	<label for="ciudad" class="col-md-4 control-label">Ciudad</label>
	<div class="col-md-6">
		<input id="ciudad" type="ciudad" class="form-control" name="ciudad" value="{!!$prov->ciudad!!}">
		@if ($errors->has('ciudad'))
			<span class="help-block"><strong>{{ $errors->first('ciudad') }}</strong></span>
		@endif
	</div>
</div>    

<div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
	<label for="pais" class="col-md-4 control-label">Pais</label>
	<div class="col-md-6">
		<input id="pais" type="text" class="form-control" name="pais" value="{!!$prov->pais!!}">
		@if ($errors->has('pais'))
			<span class="help-block"><strong>{{ $errors->first('pais') }}</strong></span>
		@endif
	</div>
</div>   

<div class="form-group{{ $errors->has('telfno') ? ' has-error' : '' }}">
	<label for="telfno" class="col-md-4 control-label">Telefono</label>
	<div class="col-md-6">
		<input id="telfno" type="text" class="form-control" name="telfno" value="{!!$prov->telfno!!}">
		@if ($errors->has('telfno'))
			<span class="help-block"><strong>{{ $errors->first('telfno') }}</strong></span>
		@endif
	</div>
</div>   

<div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
	<label for="fax" class="col-md-4 control-label">Fax</label>
	<div class="col-md-6">
		<input id="fax" type="text" class="form-control" name="fax" value="{!!$prov->fax!!}">
		@if ($errors->has('fax'))
			<span class="help-block"><strong>{{ $errors->first('fax') }}</strong></span>
		@endif
	</div>
</div>   

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	<label for="email" class="col-md-4 control-label">Correo</label>
	<div class="col-md-6">
		<input id="email" type="text" class="form-control" name="email" value="{!!$prov->email!!}">
		@if ($errors->has('email'))
			<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
		@endif
	</div>
</div>   

<div class="form-group{{ $errors->has('contcto') ? ' has-error' : '' }}">
	<label for="contcto" class="col-md-4 control-label">Contacto</label>
	<div class="col-md-6">
		<input id="contcto" type="text" class="form-control" name="contcto" value="{!!$prov->contcto!!}">
		@if ($errors->has('contcto'))
			<span class="help-block"><strong>{{ $errors->first('contcto') }}</strong></span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('nal_int') ? ' has-error' : '' }}">
	<label for="nal_int" class="col-md-4 control-label">Nacional - Internacional</label>
	<div class="col-md-6">
		{!!Form::select('nal_int', array('Nacional' => 'Nacional', 'Internacional' => 'Internacional'));!!}
	</div>
</div> 

<div class="form-group{{ $errors->has('bancarios_cc') ? ' has-error' : '' }}">
	<label for="bancarios_cc" class="col-md-4 control-label">C/C</label>
	<div class="col-md-6">
		<input id="bancarios_cc" type="text" class="form-control" name="bancarios_cc" value="{!!$prov->bancarios_cc!!}">
		@if ($errors->has('bancarios_cc'))
			<span class="help-block"><strong>{{ $errors->first('bancarios_cc') }}</strong></span>
		@endif
	</div>
</div> 

<div class="form-group{{ $errors->has('bancarios_swiftcode') ? ' has-error' : '' }}">
	<label for="bancarios_swiftcode" class="col-md-4 control-label">Swift Code</label>
	<div class="col-md-6">
		<input id="bancarios_swiftcode" type="text" class="form-control" name="bancarios_swiftcode" value="{!!$prov->bancarios_swiftcode!!}">
		@if ($errors->has('bancarios_swiftcode'))
			<span class="help-block"><strong>{{ $errors->first('bancarios_swiftcode') }}</strong></span>
		@endif
	</div>
</div> 

<div class="form-group{{ $errors->has('bancarios_refrnce') ? ' has-error' : '' }}">
	<label for="bancarios_refrnce" class="col-md-4 control-label">Referencia Bancaria</label>
	<div class="col-md-6">
		<input id="bancarios_refrnce" type="text" class="form-control" name="bancarios_refrnce" value="{!!$prov->bancarios_refrnce!!}">
		@if ($errors->has('bancarios_refrnce'))
			<span class="help-block"><strong>{{ $errors->first('bancarios_refrnce') }}</strong></span>
		@endif
	</div>
</div> 

<div class="form-group{{ $errors->has('bancarios_tt') ? ' has-error' : '' }}">
	<label for="bancarios_tt" class="col-md-4 control-label">T/T</label>
	<div class="col-md-6">
		<input id="bancarios_tt" type="text" class="form-control" name="bancarios_tt" value="{!!$prov->bancarios_tt!!}">
		@if ($errors->has('bancarios_tt'))
			<span class="help-block"><strong>{{ $errors->first('bancarios_tt') }}</strong></span>
		@endif
	</div>
</div> 

<div class="form-group{{ $errors->has('bancarios_estdo') ? ' has-error' : '' }}">
	<label for="bancarios_estdo" class="col-md-4 control-label">Estado</label>
	<div class="col-md-6">
		<input id="bancarios_estdo" type="text" class="form-control" name="bancarios_estdo" value="{!!$prov->bancarios_estdo!!}">
		@if ($errors->has('bancarios_estdo'))
			<span class="help-block"><strong>{{ $errors->first('bancarios_estdo') }}</strong></span>
		@endif
	</div>
</div> 

<div class="form-group">
	<label class="col-md-4 control-label">Moneda</label>
	<div class="col-md-6">
        {!!Form::select('moneda',$monedas);!!}
	</div>
</div>
<div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
	<label for="codigo" class="col-md-4 control-label">Codigo</label>
	<div class="col-md-6">
		<output id="codigo" type="text" class="form-control" name="codigo">{{ $prov->codigo or '' }}</output>
	</div>
</div>

<div class="form-group{{ $errors->has('razonsocial') ? ' has-error' : '' }}">
	<label for="razonsocial" class="col-md-4 control-label">Razón Social</label>
	<div class="col-md-6">
		<output id="razonsocial" type="text" class="form-control" name="razonsocial">{{ $prov->razonsocial or '' }}</output>
	</div>
</div>

<div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
	<label for="nit" class="col-md-4 control-label">Nit</label>
	<div class="col-md-6">
		<output id="nit" type="text" class="form-control" name="nit" >{{ $prov->nit or '' }}
	</div>
</div>

<div class="form-group{{ $errors->has('ubccion') ? ' has-error' : '' }}">
	<label for="ubccion" class="col-md-4 control-label">Ubicacion</label>
	<div class="col-md-6">
		<output id="ubccion" type="text" class="form-control" name="ubccion" >{{ $prov->ubccion or '' }}
	</div>
</div>

<div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
	<label for="pais" class="col-md-4 control-label">Pais</label>
	<div class="col-md-6">
		<output id="pais" type="text" class="form-control" name="pais">{{ $prov->pais or '' }}
	</div>
</div>   

<div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
	<label for="ciudad" class="col-md-4 control-label">Ciudad</label>
	<div class="col-md-6">
		<output id="ciudad" type="ciudad" class="form-control" name="ciudad">{{ $prov->ciudad or '' }}
	</div>
</div>    


<div class="form-group{{ $errors->has('telfno') ? ' has-error' : '' }}">
	<label for="telfno" class="col-md-4 control-label">Telefono</label>
	<div class="col-md-6">
		<output id="telfno" type="text" class="form-control" name="telfno">{{ $prov->telfno or '' }}
	</div>
</div>   

<div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
	<label for="fax" class="col-md-4 control-label">Fax</label>
	<div class="col-md-6">
		<output id="fax" type="text" class="form-control" name="fax">{{ $prov->fax or '' }}
	</div>
</div>   

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	<label for="email" class="col-md-4 control-label">Correo</label>
	<div class="col-md-6">
		<output id="email" type="text" class="form-control" name="email">{{ $prov->email or '' }}
	</div>
</div>   

<div class="form-group{{ $errors->has('contcto') ? ' has-error' : '' }}">
	<label for="contcto" class="col-md-4 control-label">Contacto</label>
	<div class="col-md-6">
		<output id="contcto" type="text" class="form-control" name="contcto">{{ $prov->contcto or '' }}
	</div>
</div>

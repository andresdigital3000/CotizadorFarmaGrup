<div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
	<label for="nit" class="col-md-4 control-label">NIT</label>
	<div class="col-md-6">
	    <input id="nit" type="text" class="form-control" name="nit" value="{{ old('nit') }}">
		@if ($errors->has('nit'))
	    	<span class="help-block"><strong>{{ $errors->first('nit') }}</strong></span>
	    @endif
	</div>
</div>

<div class="form-group{{ $errors->has('razonsocial') ? ' has-error' : '' }}">
	<label for="razonsocial" class="col-md-4 control-label">RAZON SOCIAL</label>
	<div class="col-md-6">
		<input id="razonsocial" type="text" class="form-control" name="razonsocial" value="{{ old('razonsocial') }}">
		@if ($errors->has('razonsocial'))
			<span class="help-block"><strong>{{ $errors->first('razonsocial') }}</strong></span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('ubccion') ? ' has-error' : '' }}">
	<label for="ubccion" class="col-md-4 control-label">UBICACION</label>
	<div class="col-md-6">
		<input id="ubccion" type="text" class="form-control" name="ubccion" value="{{ old('ubccion') }}">
		@if ($errors->has('ubccion'))
			<span class="help-block"><strong>{{ $errors->first('ubccion') }}</strong></span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
	<label for="ciudad" class="col-md-4 control-label">CIUDAD</label>
	<div class="col-md-6">
		<input id="ciudad" type="text" class="form-control" name="ciudad" value="{{ old('ciudad') }}">
		@if ($errors->has('ciudad'))
			<span class="help-block"><strong>{{ $errors->first('ciudad') }}</strong></span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
	<label for="pais" class="col-md-4 control-label">PAIS</label>
	<div class="col-md-6">
		<input id="pais" type="pais" class="form-control" name="pais" value="{{ old('pais') }}">
		@if ($errors->has('pais'))
			<span class="help-block"><strong>{{ $errors->first('pais') }}</strong></span>
		@endif
	</div>
</div>    

<div class="form-group{{ $errors->has('telfno') ? ' has-error' : '' }}">
	<label for="telfno" class="col-md-4 control-label">TELEFONO</label>
	<div class="col-md-6">
		<input id="telfno" type="text" class="form-control" name="telfno" value="{{ old('telfno') }}">
		@if ($errors->has('telfno'))
			<span class="help-block"><strong>{{ $errors->first('telfno') }}</strong></span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
	<label for="fax" class="col-md-4 control-label">FAX</label>
	<div class="col-md-6">
		<input id="fax" type="text" class="form-control" name="fax" value="{{ old('fax') }}">
		@if ($errors->has('fax'))
			<span class="help-block"><strong>{{ $errors->first('fax') }}</strong></span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('fechaIngrso') ? ' has-error' : '' }}">
	<label for="fechaIngrso" class="col-md-4 control-label" style="display:none">FECHA DE INGRESO</label>
	<div class="col-md-6">
		<input id="fechaIngrso" type="text" class="form-control" name="fechaIngrso" value="<?php echo date("d/m/Y"); ?>" style="display:none">
		@if ($errors->has('fechaIngrso'))
			<span class="help-block"><strong>{{ $errors->first('fechaIngrso') }}</strong></span>
		@endif
	</div>
</div>

<div> 
	<table>
		<td>
			<th>
				<label for="caldad_contcto" class="col-md-4 control-label">CALIDAD</label>
			</th>
			<th>
				<input id="caldad_contcto" type="text" class="form-control" name="caldad_contcto" value="{{ old('caldad_contcto') }}" size="15">
				@if ($errors->has('caldad_contcto'))
					<span class="help-block"><strong>{{ $errors->first('caldad_contcto') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="caldad_tels" class="col-md-4 control-label">TELEFONO</label>
			</th>
			<th>
				<input id="caldad_tels" type="text" class="form-control" name="caldad_tels" value="{{ old('caldad_tels') }}" size="10">
				@if ($errors->has('caldad_tels'))
					<span class="help-block"><strong>{{ $errors->first('caldad_tels') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="caldad_email" class="col-md-1 control-label">CORREO</label>
			</th>
			<th>
				<input id="caldad_email" type="text" class="form-control" name="caldad_email" value="{{ old('caldad_email') }}">
				@if ($errors->has('caldad_email'))
					<span class="help-block"><strong>{{ $errors->first('caldad_email') }}</strong></span>
				@endif
			</th>
		</td>
	</table>
</div>
<BR>
<div> 
	<table>
		<td>
			<th>
				<label for="desrrllo_contcto" class="col-md-4 control-label">DESARROLLO</label>
			</th>
			<th>
				<input id="desrrllo_contcto" type="text" class="form-control" name="desrrllo_contcto" value="{{ old('desrrllo_contcto') }}" size="15">
				@if ($errors->has('desrrllo_contcto'))
					<span class="help-block"><strong>{{ $errors->first('desrrllo_contcto') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="desrrllo_tels" class="col-md-4 control-label">TELEFONO</label>
			</th>
			<th>
				<input id="desrrllo_tels" type="text" class="form-control" name="desrrllo_tels" value="{{ old('desrrllo_tels') }}" size="10">
				@if ($errors->has('desrrllo_tels'))
					<span class="help-block"><strong>{{ $errors->first('desrrllo_tels') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="desrrllo_email" class="col-md-4 control-label">CORREO</label>
			</th>
			<th>
				<input id="desrrllo_email" type="text" class="form-control" name="desrrllo_email" value="{{ old('desrrllo_email') }}">
				@if ($errors->has('desrrllo_email'))
					<span class="help-block"><strong>{{ $errors->first('desrrllo_email') }}</strong></span>
				@endif
			</th>
		</td>
	</table>
</div>
<BR>
<div> 
	<table>
		<td>
			<th>
				<label for="prodccion_contcto" class="col-md-4 control-label">PRODUCCION</label>
			</th>
			<th>
				<input id="prodccion_contcto" type="text" class="form-control" name="prodccion_contcto" value="{{ old('prodccion_contcto') }}" size="15">
				@if ($errors->has('prodccion_contcto'))
					<span class="help-block"><strong>{{ $errors->first('prodccion_contcto') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="prodccion_tels" class="col-md-4 control-label">TELEFONO</label>
			</th>
			<th>
				<input id="prodccion_tels" type="text" class="form-control" name="prodccion_tels" value="{{ old('prodccion_tels') }}" size="10">
				@if ($errors->has('prodccion_tels'))
					<span class="help-block"><strong>{{ $errors->first('prodccion_tels') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="prodccion_email" class="col-md-4 control-label">CORREO</label>
			</th>
			<th>
				<input id="prodccion_email" type="text" class="form-control" name="prodccion_email" value="{{ old('prodccion_email') }}">
				@if ($errors->has('prodccion_email'))
					<span class="help-block"><strong>{{ $errors->first('prodccion_email') }}</strong></span>
				@endif
			</th>
		</td>
	</table>
</div>
<BR>
<div> 
	<table>
		<td>
			<th>
				<label for="planta_contcto" class="col-md-4 control-label">PLANTA</label>
			</th>
			<th>
				<input id="planta_contcto" type="text" class="form-control" name="planta_contcto" value="{{ old('planta_contcto') }}" size="15">
				@if ($errors->has('planta_contcto'))
					<span class="help-block"><strong>{{ $errors->first('planta_contcto') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="planta_tels" class="col-md-4 control-label">TELEFONO</label>
			</th>
			<th>
				<input id="planta_tels" type="text" class="form-control" name="planta_tels" value="{{ old('planta_tels') }}" size="10">
				@if ($errors->has('planta_tels'))
					<span class="help-block"><strong>{{ $errors->first('planta_tels') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="planta_email" class="col-md-4 control-label">CORREO</label>
			</th>
			<th>
				<input id="planta_email" type="text" class="form-control" name="planta_email" value="{{ old('planta_email') }}">
				@if ($errors->has('planta_email'))
					<span class="help-block"><strong>{{ $errors->first('planta_email') }}</strong></span>
				@endif
			</th>
		</td>
	</table>
</div>
<BR>
<div> 
	<table>
		<td>
			<th>
				<label for="compras_contcto" class="col-md-4 control-label">COMPRAS</label>
			</th>
			<th>
				<input id="compras_contcto" type="text" class="form-control" name="compras_contcto" value="{{ old('compras_contcto') }}" size="15">
				@if ($errors->has('compras_contcto'))
					<span class="help-block"><strong>{{ $errors->first('compras_contcto') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="compras_tels" class="col-md-4 control-label">TELEFONO</label>
			</th>
			<th>
				<input id="compras_tels" type="text" class="form-control" name="compras_tels" value="{{ old('compras_tels') }}" size="10">
				@if ($errors->has('compras_tels'))
					<span class="help-block"><strong>{{ $errors->first('compras_tels') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="compras_email" class="col-md-4 control-label">CORREO</label>
			</th>
			<th>
				<input id="compras_email" type="text" class="form-control" name="compras_email" value="{{ old('compras_email') }}">
				@if ($errors->has('compras_email'))
					<span class="help-block"><strong>{{ $errors->first('compras_email') }}</strong></span>
				@endif
			</th>
		</td>
	</table>
</div>
<BR>
<div> 
	<table>
		<td>
			<th>
				<label for="estbldad_contcto" class="col-md-4 control-label">ESTABILIDAD</label>
			</th>
			<th>
				<input id="estbldad_contcto" type="text" class="form-control" name="estbldad_contcto" value="{{ old('estbldad_contcto') }}" size="15">
				@if ($errors->has('estbldad_contcto'))
					<span class="help-block"><strong>{{ $errors->first('estbldad_contcto') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="estbldad_tels" class="col-md-4 control-label">TELEFONO</label>
			</th>
			<th>
				<input id="estbldad_tels" type="text" class="form-control" name="estbldad_tels" value="{{ old('estbldad_tels') }}" size="10">
				@if ($errors->has('estbldad_tels'))
					<span class="help-block"><strong>{{ $errors->first('estbldad_tels') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="estbldad_email" class="col-md-4 control-label">CORREO</label>
			</th>
			<th>
				<input id="estbldad_email" type="text" class="form-control" name="estbldad_email" value="{{ old('estbldad_email') }}">
				@if ($errors->has('estbldad_email'))
					<span class="help-block"><strong>{{ $errors->first('estbldad_email') }}</strong></span>
				@endif
			</th>
		</td>
	</table>
</div>
<BR>
<div> 
	<table>
		<td>
			<th>
				<label for="mantnmiento_contcto" class="col-md-4 control-label">MANTENIMIENTO</label>
			</th>
			<th>
				<input id="mantnmiento_contcto" type="text" class="form-control" name="mantnmiento_contcto" value="{{ old('mantnmiento_contcto') }}" size="15">
				@if ($errors->has('mantnmiento_contcto'))
					<span class="help-block"><strong>{{ $errors->first('mantnmiento_contcto') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="mantnmiento_tels" class="col-md-4 control-label">TELEFONO</label>
			</th>
			<th>
				<input id="mantnmiento_tels" type="text" class="form-control" name="mantnmiento_tels" value="{{ old('mantnmiento_tels') }}" size="10">
				@if ($errors->has('mantnmiento_tels'))
					<span class="help-block"><strong>{{ $errors->first('mantnmiento_tels') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="estbldad_email" class="col-md-4 control-label">CORREO</label>
			</th>
			<th>
				<input id="mantnmiento_email" type="text" class="form-control" name="mantnmiento_email" value="{{ old('mantnmiento_email') }}">
				@if ($errors->has('mantnmiento_email'))
					<span class="help-block"><strong>{{ $errors->first('mantnmiento_email') }}</strong></span>
				@endif
			</th>
		</td>
	</table>
</div>
<BR>
<div> 
	<table>
		<td>
			<th>
				<label for="tesrria_contcto" class="col-md-4 control-label">TESORERIA</label>
			</th>
			<th>
				<input id="tesrria_contcto" type="text" class="form-control" name="tesrria_contcto" value="{{ old('tesrria_contcto') }}" size="15">
				@if ($errors->has('tesrria_contcto'))
					<span class="help-block"><strong>{{ $errors->first('tesrria_contcto') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="tesrria_tels" class="col-md-4 control-label">TELEFONO</label>
			</th>
			<th>
				<input id="tesrria_tels" type="text" class="form-control" name="tesrria_tels" value="{{ old('tesrria_tels') }}" size="10">
				@if ($errors->has('tesrria_tels'))
					<span class="help-block"><strong>{{ $errors->first('tesrria_tels') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="tesrria_email" class="col-md-4 control-label">CORREO</label>
			</th>
			<th>
				<input id="tesrria_email" type="text" class="form-control" name="tesrria_email" value="{{ old('etesrria_email') }}">
				@if ($errors->has('tesrria_email'))
					<span class="help-block"><strong>{{ $errors->first('tesrria_email') }}</strong></span>
				@endif
			</th>
		</td>
	</table>
</div>
<BR>
<div> 
	<table>
		<td>
			<th>
				<label for="otro_contcto" class="col-md-4 control-label">OTRO</label>
			</th>
			<th>
				<input id="otro_contcto" type="text" class="form-control" name="otro_contcto" value="{{ old('otro_contcto') }}" size="15">
				@if ($errors->has('otro_contcto'))
					<span class="help-block"><strong>{{ $errors->first('otro_contcto') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="otro_tels" class="col-md-4 control-label">TELEFONO</label>
			</th>
			<th>
				<input id="otro_tels" type="text" class="form-control" name="otro_tels" value="{{ old('otro_tels') }}" size="10">
				@if ($errors->has('otro_tels'))
					<span class="help-block"><strong>{{ $errors->first('otro_tels') }}</strong></span>
				@endif
			</th>
			<th>
				<label for="otro_email" class="col-md-4 control-label">CORREO</label>
			</th>
			<th>
				<input id="otro_email" type="text" class="form-control" name="otro_email" value="{{ old('otro_email') }}">
				@if ($errors->has('otro_email'))
					<span class="help-block"><strong>{{ $errors->first('otro_email') }}</strong></span>
				@endif
			</th>
		</td>
	</table>
</div>
<BR>
<div class="form-group{{ $errors->has('reprsntntelegal') ? ' has-error' : '' }}">
	<label for="reprsntntelegal" class="col-md-4 control-label">Representante Legal</label>
	<div class="col-md-6">
		<input id="reprsntntelegal" type="text" class="form-control" name="reprsntntelegal" value="{{ old('reprsntntelegal') }}">
		@if ($errors->has('reprsntntelegal'))
			<span class="help-block"><strong>{{ $errors->first('reprsntntelegal') }}</strong></span>
		@endif
	</div>
</div>
<BR>
<div class="form-group{{ $errors->has('respnsbleamfar') ? ' has-error' : '' }}">
	<label for="respnsbleamfar" class="col-md-4 control-label">Responsable AMFAR</label>
	<div class="col-md-6">
		{!!Form::select('respnsbleamfar', $datosEmp);!!}
	</div>
</div>
<BR><BR>
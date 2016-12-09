<div class="form-group">
	<label for="nit" class="col-md-4 control-label">NIT</label>
	<div class="col-md-6">
	    <input id="nit" type="text" class="form-control" name="nit" value="{!!$cliente->nit!!}">
	</div>
</div>

<div class="form-group">
	<label for="razonsocial" class="col-md-4 control-label">RAZON SOCIAL</label>
	<div class="col-md-6">
		<input id="razonsocial" type="text" class="form-control" name="razonsocial" value="{!!$cliente->razonsocial!!}">
	</div>
</div>

<div class="form-group">
	<label for="ubccion" class="col-md-4 control-label">UBICACION</label>
	<div class="col-md-6">
		<input id="ubccion" type="text" class="form-control" name="ubccion" value="{!!$cliente->ubccion!!}">
	</div>
</div>

<div class="form-group">
	<label for="ciudad" class="col-md-4 control-label">CIUDAD</label>
	<div class="col-md-6">
		<input id="ciudad" type="text" class="form-control" name="ciudad" value="{!!$cliente->ciudad!!}">
	</div>
</div>

<div class="form-group">
	<label for="pais" class="col-md-4 control-label">PAIS</label>
	<div class="col-md-6">
		<input id="pais" type="pais" class="form-control" name="pais" value="{!!$cliente->pais!!}">
	</div>
</div>    

<div class="form-group">
	<label for="telfno" class="col-md-4 control-label">TELEFONO</label>
	<div class="col-md-6">
		<input id="telfno" type="text" class="form-control" name="telfno" value="{!!$cliente->telfno!!}">
	</div>
</div>

<div class="form-group">
	<label for="fax" class="col-md-4 control-label">FAX</label>
	<div class="col-md-6">
		<input id="fax" type="text" class="form-control" name="fax" value="{!!$cliente->fax!!}">
	</div>
</div>

<div class="form-group">
	<label for="fechaIngrso" class="col-md-4 control-label" style="display:none">FECHA DE INGRESO</label>
	<div class="col-md-6">
		<input id="fechaIngrso" type="text" class="form-control" name="fechaIngrso" value="<?php echo date("d/m/Y"); ?>" style="display:none">
	</div>
</div>

<div class="form-group">
	<label for="caldad_contcto" class="col-md-1 control-label"  style="text-align:left">CALIDAD</label>
	<div class="col-md-3">
		<input id="caldad_contcto" type="text" class="form-control" name="caldad_contcto" value="{!!$cliente->caldad_contcto!!}">
	</div>
	<label for="caldad_tels" class="col-md-1 control-label">TELEFONO</label>
	<div class="col-md-3">
		<input id="caldad_tels" type="text" class="form-control" name="caldad_tels" value="{!!$cliente->caldad_tels!!}">
	</div>	
	<label for="caldad_email" class="col-md-1 control-label">CORREO</label>
	<div class="col-md-3">
		<input id="caldad_email" type="text" class="form-control" name="caldad_email" value="{!!$cliente->caldad_email!!}">
	</div>	
</div>
<br>
<div class="form-group">
	<label for="desrrllo_contcto" class="col-md-1 control-label" style="text-align:left">DESARROLLO</label>
	<div class="col-md-3">
		<input id="desrrllo_contcto" type="text" class="form-control" name="desrrllo_contcto" value="{!!$cliente->desrrllo_contcto!!}">
	</div>
	<label for="desrrllo_tels" class="col-md-1 control-label">TELEFONO</label>
	<div class="col-md-3">
		<input id="desrrllo_tels" type="text" class="form-control" name="desrrllo_tels" value="{!!$cliente->desrrllo_tels!!}">
	</div>	
	<label for="desrrllo_email" class="col-md-1 control-label">CORREO</label>
	<div class="col-md-3">
		<input id="desrrllo_email" type="text" class="form-control" name="desrrllo_email" value="{!!$cliente->desrrllo_email!!}">
	</div>	
</div>
<BR>
<div class="form-group">
	<label for="prodccion_contcto" class="col-md-1 control-label" style="text-align:left">PRODUCCION</label>
	<div class="col-md-3">
		<input id="prodccion_contcto" type="text" class="form-control" name="prodccion_contcto" value="{!!$cliente->prodccion_contcto!!}">
	</div>
	<label for="prodccion_tels" class="col-md-1 control-label">TELEFONO</label>
	<div class="col-md-3">
		<input id="prodccion_tels" type="text" class="form-control" name="prodccion_tels" value="{!!$cliente->prodccion_tels!!}">
	</div>	
	<label for="prodccion_email" class="col-md-1 control-label">CORREO</label>
	<div class="col-md-3">
		<input id="prodccion_email" type="text" class="form-control" name="prodccion_email" value="{!!$cliente->prodccion_email!!}">
	</div>	
</div>
<br>
<div class="form-group">
	<label for="planta_contcto" class="col-md-1 control-label" style="text-align:left">PLANTA</label>
	<div class="col-md-3">
		<input id="planta_contcto" type="text" class="form-control" name="planta_contcto" value="{!!$cliente->planta_contcto!!}">
	</div>
	<label for="planta_tels" class="col-md-1 control-label">TELEFONO</label>
	<div class="col-md-3">
		<input id="planta_tels" type="text" class="form-control" name="planta_tels" value="{!!$cliente->planta_tels!!}">
	</div>	
	<label for="planta_email" class="col-md-1 control-label">CORREO</label>
	<div class="col-md-3">
		<input id="planta_email" type="text" class="form-control" name="planta_email" value="{!!$cliente->planta_email!!}">
	</div>	
</div>
<br>
<div class="form-group">
	<label for="compras_contcto" class="col-md-1 control-label" style="text-align:left">COMPRAS</label>
	<div class="col-md-3">
		<input id="compras_contcto" type="text" class="form-control" name="compras_contcto" value="{!!$cliente->compras_contcto!!}">
	</div>
	<label for="compras_tels" class="col-md-1 control-label">TELEFONO</label>
	<div class="col-md-3">
		<input id="compras_tels" type="text" class="form-control" name="compras_tels" value="{!!$cliente->compras_tels!!}">
	</div>	
	<label for="compras_email" class="col-md-1 control-label">CORREO</label>
	<div class="col-md-3">
		<input id="compras_email" type="text" class="form-control" name="compras_email" value="{!!$cliente->compras_email!!}">
	</div>	
</div>
<BR>
<div class="form-group">
	<label for="estbldad_contcto" class="col-md-1 control-label" style="text-align:left">ESTABILIDAD</label>
	<div class="col-md-3">
		<input id="estbldad_contcto" type="text" class="form-control" name="estbldad_contcto" value="{!!$cliente->estbldad_contcto!!}">
	</div>
	<label for="estbldad_tels" class="col-md-1 control-label">TELEFONO</label>
	<div class="col-md-3">
		<input id="estbldad_tels" type="text" class="form-control" name="estbldad_tels" value="{!!$cliente->estbldad_tels!!}">
	</div>	
	<label for="estbldad_email" class="col-md-1 control-label">CORREO</label>
	<div class="col-md-3">
		<input id="estbldad_email" type="text" class="form-control" name="estbldad_email" value="{!!$cliente->estbldad_email!!}">
	</div>	
</div>
<BR>
<div class="form-group">
	<label for="mantnmiento_contcto" class="col-md-1 control-label" style="text-align:left">MANTENIMTO</label>
	<div class="col-md-3">
		<input id="mantnmiento_contcto" type="text" class="form-control" name="mantnmiento_contcto" value="{!!$cliente->mantnmiento_contcto!!}">
	</div>
	<label for="mantnmiento_tels" class="col-md-1 control-label">TELEFONO</label>
	<div class="col-md-3">
		<input id="mantnmiento_tels" type="text" class="form-control" name="mantnmiento_tels" value="{!!$cliente->mantnmiento_tels!!}">
	</div>	
	<label for="mantnmiento_email" class="col-md-1 control-label">CORREO</label>
	<div class="col-md-3">
		<input id="mantnmiento_email" type="text" class="form-control" name="mantnmiento_email" value="{!!$cliente->mantnmiento_email!!}">
	</div>	
</div>
<BR>
<div class="form-group">
	<label for="tesrria_contcto" class="col-md-1 control-label" style="text-align:left">TESORERIA</label>
	<div class="col-md-3">
		<input id="tesrria_contcto" type="text" class="form-control" name="tesrria_contcto" value="{!!$cliente->tesrria_contcto!!}">
	</div>
	<label for="tesrria_tels" class="col-md-1 control-label">TELEFONO</label>
	<div class="col-md-3">
		<input id="tesrria_tels" type="text" class="form-control" name="tesrria_tels" value="{!!$cliente->tesrria_tels!!}">
	</div>	
	<label for="tesrria_email" class="col-md-1 control-label">CORREO</label>
	<div class="col-md-3">
		<input id="tesrria_email" type="text" class="form-control" name="tesrria_email" value="{!!$cliente->tesrria_email!!}">
	</div>	
</div>
<BR>
<div class="form-group">
	<label for="otro_contcto" class="col-md-1 control-label" style="text-align:left">OTRO</label>
	<div class="col-md-3">
		<input id="otro_contcto" type="text" class="form-control" name="otro_contcto" value="{!!$cliente->otro_contcto!!}">
	</div>
	<label for="otro_tels" class="col-md-1 control-label">TELEFONO</label>
	<div class="col-md-3">
		<input id="otro_tels" type="text" class="form-control" name="otro_tels" value="{!!$cliente->tesrria_tels!!}">
	</div>	
	<label for="otro_email" class="col-md-1 control-label">CORREO</label>
	<div class="col-md-3">
		<input id="otro_email" type="text" class="form-control" name="otro_email" value="{!!$cliente->otro_email!!}">
	</div>	
</div>
<BR>
<div class="form-group">
	<label for="reprsntntelegal" class="col-md-4 control-label">REPRESENTANTE LEGAL</label>
	<div class="col-md-6">
		<input id="reprsntntelegal" type="text" class="form-control" name="reprsntntelegal" value="{!!$cliente->reprsntntelegal!!}">
	</div>
</div>
<BR>
<div class="form-group">
	<label for="respnsbleamfar" class="col-md-4 control-label">RESPONSABLE AMFAR</label>
	<div class="col-md-6">
		<input id="respnsbleamfar" type="text" class="form-control" name="respnsbleamfar" value="{!!$datosEmp->nombre!!}">
	</div>
</div>
<br><br>
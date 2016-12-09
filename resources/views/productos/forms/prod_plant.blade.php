<div class="form-group">
	<div class="col-md-6">
	    <input type="hidden" id="id" type="text" class="form-control" name="id" value="{{$prod->id}}">
	</div>
</div>

<div class="form-group">
	<label for="referencia" class="col-md-3 control-label">Referencia</label>
	<div class="col-md-6">
		<output id="referencia" type="text" class="form-control" name="referencia">{{$prod->referencia}}</output>
	</div>
</div>

<div class="form-group">
	<label for="descrpcion" class="col-md-3 control-label">Producto</label>
	<div class="col-md-6">
		<output id="descrpcion" type="text" class="form-control" name="descrpcion">{{$prod->descrpcion}}</output>
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label">Venta Plaza</label>
	<div class="col-md-4">
		{!!Form::file('pltlla_vtaplaza')!!}
	</div>
	<output id="vtaplaza" type="text" class="col-md-5" name="vtaplaza">{{$prod->plantlla_vtaplaza}}</output>
</div>

<div class="form-group">
	<label class="col-md-3 control-label">Venta Imp Prove</label>
	<div class="col-md-4">
		{!!Form::file('pltlla_vtaimpprove')!!}
	</div>
	<output id="vtaimpprove" type="text" class="col-md-5" name="vtaimpprove">{{$prod->plantlla_vtaimpprove}}</output>
</div>

<div class="form-group">
	<label class="col-md-3 control-label">Calibración</label>
	<div class="col-md-4">
		{!!Form::file('pltlla_calbrcion')!!}
	</div>
	<output id="calbrcion" type="text" class="col-md-5" name="calbrcion">{{$prod->plantlla_calbrcion}}</output>
</div>

<div class="form-group">
	<label class="col-md-3 control-label">Validación</label>
	<div class="col-md-4">
		{!!Form::file('pltlla_valdcion')!!}
	</div>
	<output id="valdcion" type="text" class="col-md-5" name="valdcion">{{$prod->plantlla_valdcion}}</output>
</div>

<div class="form-group">
	<label class="col-md-3 control-label">Correctivo</label>
	<div class="col-md-4">
		{!!Form::file('pltlla_corrctvo')!!}
	</div>
	<output id="corrctvo" type="text" class="col-md-5" name="corrctvo">{{$prod->plantlla_corrctvo}}</output>	
</div>

<div class="form-group">
	<label class="col-md-3 control-label">Mantenimiento</label>
	<div class="col-md-4">
		{!!Form::file('pltlla_mantnmiento')!!}
	</div>
	<output id="mantnmiento" type="text" class="col-md-5" name="mantnmiento">{{$prod->plantlla_mantnmiento}}</output>	
</div>
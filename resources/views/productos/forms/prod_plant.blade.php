<div class="form-group">
	<div class="col-md-6">
	    <input type="hidden" id="id" type="text" class="form-control" name="id" value="{{$prod->id}}">
	</div>
</div>

<div class="form-group">
	<label for="referencia" class="col-md-4 control-label">Referencia</label>
	<div class="col-md-6">
		<output id="referencia" type="text" class="form-control" name="referencia">{{$prod->referencia}}</output>
	</div>
</div>

<div class="form-group">
	<label for="descrpcion" class="col-md-4 control-label">Producto</label>
	<div class="col-md-6">
		<output id="descrpcion" type="text" class="form-control" name="descrpcion" >{{$prod->descrpcion}}
	</div>
</div>

<div class="form-group">
	<label class="col-md-4 control-label">Venta Plaza</label>
	<div class="col-md-6">
		{!!Form::file('plantlla_vtaplaza')!!}
	</div>
</div>

<div class="form-group{{ $errors->has('plantlla_vtaimpprove') ? ' has-error' : '' }}">
	<label for="plantlla_vtaimpprove" class="col-md-4 control-label">Venta Imp Prove</label>
	<div class="col-md-6">
	    <input id="plantlla_vtaimpprove" type="text" class="form-control" name="plantlla_vtaimpprove" value="{{$prod->plantlla_vtaimpprove or ''}}">
	</div>
</div>

<div class="form-group{{ $errors->has('plantlla_calbrcion') ? ' has-error' : '' }}">
	<label for="plantlla_calbrcion" class="col-md-4 control-label">Calibración</label>
	<div class="col-md-6">
	    <input id="plantlla_calbrcion" type="text" class="form-control" name="plantlla_calbrcion" value="{{$prod->plantlla_calbrcion or ''}}">
	</div>
</div>

<div class="form-group{{ $errors->has('plantlla_valdcion') ? ' has-error' : '' }}">
	<label for="plantlla_valdcion" class="col-md-4 control-label">Validación</label>
	<div class="col-md-6">
		<input id="plantlla_valdcion" type="text" class="form-control" name="plantlla_valdcion" value="{{$prod->plantlla_valdcion or ''}}">
	</div>
</div>

<div class="form-group{{ $errors->has('plantlla_corrctvo') ? ' has-error' : '' }}">
	<label for="plantlla_corrctvo" class="col-md-4 control-label">Correctivo</label>
	<div class="col-md-6">
		<input id="plantlla_corrctvo" type="text" class="form-control" name="plantlla_corrctvo" value="{{$prod->plantlla_corrctvo or ''}}">
	</div>
</div>

<div class="form-group{{ $errors->has('plantlla_mantnmiento') ? ' has-error' : '' }}">
	<label for="plantlla_mantnmiento" class="col-md-4 control-label">Mantenimiento</label>
	<div class="col-md-6">
		<input id="plantlla_mantnmiento" type="text" class="form-control" name="plantlla_mantnmiento" value="{{$prod->plantlla_mantnmiento or ''}}">
	</div>
</div>   
<div class="form-group{{ $errors->has('codgo_prov') ? ' has-error' : '' }}">
	<div class="col-md-6">
	    <input type="hidden" id="codgo_prov" type="text" class="form-control" name="codgo_prov" value="{{ $producto->codgo_prov }}">
	</div>
</div>

<div class="form-group{{ $errors->has('descrpcion') ? ' has-error' : '' }}">
	<label for="descrpcion" class="col-md-4 control-label">Producto</label>
	<div class="col-md-6">
	    <input id="descrpcion" type="text" class="form-control" name="descrpcion" value="{{$producto->descrpcion}}">
		@if ($errors->has('descrpcion'))
	    	<span class="help-block"><strong>{{ $errors->first('descrpcion') }}</strong></span>
	    @endif
	</div>
</div>

<div class="form-group{{ $errors->has('referencia') ? ' has-error' : '' }}">
	<label for="referencia" class="col-md-4 control-label">Código</label>
	<div class="col-md-6">
	    <input id="referencia" type="text" class="form-control" name="referencia" value="{{$producto->referencia}}">
		@if ($errors->has('referencia'))
	    	<span class="help-block"><strong>{{ $errors->first('referencia') }}</strong></span>
	    @endif
	</div>
</div>

<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
	<label for="clasfccion" class="col-md-4 control-label">Tipo</label>
	<div class="col-md-6">	
	    {!!Form::select('clasfccion',$tipo_producto,null,['class'=>'form-control']);!!}
	</div>
</div>

<div class="form-group{{ $errors->has('precio_dolar') ? ' has-error' : '' }}">
	<label for="precio_dolar" class="col-md-4 control-label">Precio dolar</label>
	<div class="col-md-6">
		<input id="precio_dolar" type="text" class="form-control" name="precio_dolar" value="{{$producto->precio_dolar}}">
		@if ($errors->has('precio_dolar'))
			<span class="help-block"><strong>{{ $errors->first('precio_dolar') }}</strong></span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
	<label for="precio_euro" class="col-md-4 control-label">Precio euro</label>
	<div class="col-md-6">
		<input id="precio_euro" type="text" class="form-control" name="precio_euro" value="{{$producto->precio_euro}}">
		@if ($errors->has('precio_euro'))
			<span class="help-block"><strong>{{ $errors->first('precio_euro') }}</strong></span>
		@endif
	</div>
</div>

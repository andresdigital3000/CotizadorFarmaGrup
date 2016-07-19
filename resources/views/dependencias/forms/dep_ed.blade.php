<div class="form-group{{ $errors->has('dependencia') ? ' has-error' : '' }}">
	<label for="dependencia" class="col-md-4 control-label">Dependencia</label>
	<div class="col-md-6">
		<input dependencia="dependencia" type="text" class="form-control" name="dependencia" value={!!$dependencia->dependencia!!}>
		@if ($errors->has('dependencia'))
			<span class="help-block"><strong>{{ $errors->first('dependencia') }}</strong></span>
		@endif
	</div>
</div>
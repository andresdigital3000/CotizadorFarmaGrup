<div class="form-group{{ $errors->has('cod_menu') ? ' has-error' : '' }}">
	<label for="cod_menu" class="col-md-4 control-label">Menu</label>
	<div class="col-md-6">
		{!!Form::select('cod_menu', $cod_menu);!!}
	</div>
</div>

<div class="form-group{{ $errors->has('nom_pagina') ? ' has-error' : '' }}">
	<label for="nom_pagina" class="col-md-4 control-label">Nombre Pagina</label>
	<div class="col-md-6">
	    <input id="nom_pagina" type="text" class="form-control" name="nom_pagina" value="{{ old('nom_pagina') }}">
		@if ($errors->has('nom_pagina'))
	    	<span class="help-block"><strong>{{ $errors->first('nom_pagina') }}</strong></span>
	    @endif
	</div>
</div>

<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
	<label for="url" class="col-md-4 control-label">Url Pagina</label>
	<div class="col-md-6">
	    <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}">
		@if ($errors->has('url'))
	    	<span class="help-block"><strong>{{ $errors->first('url') }}</strong></span>
	    @endif
	</div>
</div>
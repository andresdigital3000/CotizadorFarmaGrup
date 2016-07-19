<div class="form-group{{ $errors->has('nom_pagina') ? ' has-error' : '' }}">
	<label for="nom_pagina" class="col-md-4 control-label">Nombre Pagina</label>
	<div class="col-md-6">
	    <input id="nom_pagina" type="text" class="form-control" name="nom_pagina" value="{{ old('nom_pagina') }}">
		@if ($errors->has('nom_pagina'))
	    	<span class="help-block"><strong>{{ $errors->first('nom_pagina') }}</strong></span>
	    @endif
	</div>
</div>
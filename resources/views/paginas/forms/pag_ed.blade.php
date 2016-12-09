							<div class="form-group{{ $errors->has('nom_pagina') ? ' has-error' : '' }}">
								<label for="nom_pagina" class="col-md-4 control-label">Nombre Pagina</label>
								<div class="col-md-6">
								    <input id="nom_pagina" type="text" class="form-control" name="nom_pagina" value="{!!$pagina->nom_pagina!!}">
								    @if ($errors->has('nom_pagina'))
										<span class="help-block"><strong>{{ $errors->first('nom_pagina') }}</strong></span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
								<label for="url" class="col-md-4 control-label">Url Pagina</label>
								<div class="col-md-6">
								    <input id="url" type="text" class="form-control" name="url" value="{!!$pagina->url!!}">
								    @if ($errors->has('url'))
										<span class="help-block"><strong>{{ $errors->first('url') }}</strong></span>
									@endif
								</div>
							</div>
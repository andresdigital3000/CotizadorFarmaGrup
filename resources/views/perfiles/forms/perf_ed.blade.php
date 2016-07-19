							<div class="form-group{{ $errors->has('nomperfil') ? ' has-error' : '' }}">
								<label for="nomperfil" class="col-md-4 control-label">Nombre Perfil</label>
								<div class="col-md-6">
								    <input id="nomperfil" type="text" class="form-control" name="nomperfil" value={!!$perfil->nomperfil!!}>
								    @if ($errors->has('nomperfil'))
										<span class="help-block"><strong>{{ $errors->first('nomperfil') }}</strong></span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('nivel') ? ' has-error' : '' }}">
								<label for="nivel" class="col-md-4 control-label">Nivel Perfil</label>
								<div class="col-md-6">
									<input id="nivel" type="text" class="form-control" name="nivel" value={!!$perfil->nivel!!}>
									@if ($errors->has('nivel'))
										<span class="help-block"><strong>{{ $errors->first('nivel') }}</strong></span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
								<label for="tipo" class="col-md-4 control-label">Tipo Perfil</label>
								<div class="col-md-6">
									<input id="tipo" type="text" class="form-control" name="tipo" value={!!$perfil->tipo!!}>
									@if ($errors->has('tipo'))
										<span class="help-block"><strong>{{ $errors->first('tipo') }}</strong></span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('nomtipo') ? ' has-error' : '' }}">
								<label for="nomtipo" class="col-md-4 control-label">Nombre Tipo Perfil</label>
								<div class="col-md-6">
									<input id="nomtipo" type="text" class="form-control" name="nomtipo" value={!!$perfil->nomtipo!!}>
									@if ($errors->has('nomtipo'))
										<span class="help-block"><strong>{{ $errors->first('nomtipo') }}</strong></span>
									@endif
								</div>
							</div>
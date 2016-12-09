							<div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
								<label for="id" class="col-md-4 control-label">Cedula</label>
								<div class="col-md-6">
								    <input id="id" type="text" disabled="disabled" class="form-control" name="id" value="{!!$user->id!!}" maxlength="10">
								    @if ($errors->has('id'))
										<span class="help-block"><strong>{{ $errors->first('id') }}</strong></span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('cod_perfil') ? ' has-error' : '' }}">
								<label for="cod_perfil" class="col-md-4 control-label">Perfil</label>
								<div class="col-md-6">
									{!!Form::select('cod_perfil', $datosPerf, $user->cod_perfil);!!}
								</div>
							</div>

							<div class="form-group{{ $errors->has('cod_dependencia') ? ' has-error' : '' }}">
								<label for="cod_dependencia" class="col-md-4 control-label">Dependencia</label>
								<div class="col-md-6">
									{!!Form::select('cod_dependencia', $datosDep, $user->cod_dependencia);!!}
								</div>
							</div>

							<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
								<label for="nombre" class="col-md-4 control-label">Nombre Completo</label>
								<div class="col-md-6">
									<input id="nombre" type="text" class="form-control" name="nombre" value="{!!$user->nombre!!}" maxlength="50">
									@if ($errors->has('nombre'))
										<span class="help-block"><strong>{{ $errors->first('nombre') }}</strong></span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('extension') ? ' has-error' : '' }}">
								<label for="extension" class="col-md-4 control-label">Extension</label>
								<div class="col-md-6">
									<input id="extension" type="text" class="form-control" name="extension" value="{!!$user->extension!!}" maxlength="5">
									@if ($errors->has('extension'))
										<span class="help-block"><strong>{{ $errors->first('extension') }}</strong></span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
								<label for="cargo" class="col-md-4 control-label">Cargo</label>
								<div class="col-md-6">
									<input id="cargo" type="text" class="form-control" name="cargo" value="{!!$user->cargo!!}" maxlength="25">
									@if ($errors->has('cargo'))
										<span class="help-block"><strong>{{ $errors->first('cargo') }}</strong></span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label for="email" class="col-md-4 control-label">Correo Electronico</label>
								<div class="col-md-6">
									<input id="email" type="email" class="form-control" name="email" value="{!!$user->email!!}" maxlength="25">
									@if ($errors->has('email'))
										<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
									@endif
								</div>
							</div>    

							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<label for="name" class="col-md-4 control-label">Usuario</label>
								<div class="col-md-6">
									<input id="name" type="text" class="form-control" name="name" value="{!!$user->name!!}" maxlength="15">
									@if ($errors->has('name'))
										<span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label for="password" class="col-md-4 control-label">Contraseña</label>
								<div class="col-md-6">
									<input id="password" type="text" class="form-control" name="password" value="" maxlength="15">
									@if ($errors->has('password'))
										<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
								<label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>
								<div class="col-md-6">
									<input id="password-confirm" type="text" class="form-control" name="password-confirm" value="" maxlength="15">
									@if ($errors->has('password-confirm'))
										<span class="help-block"><strong>{{ $errors->first('password-confirm') }}</strong></span>
									@endif
									<label style="color:#990000;">{!! $conferr !!}</label>
								</div>
							</div>
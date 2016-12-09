							<div class="form-group{{ $errors->has('nom_menu') ? ' has-error' : '' }}">
								<label for="nom_menu" class="col-md-4 control-label">Nombre Menu</label>
								<div class="col-md-6">
								    <input id="nom_menu" type="text" disabled="disabled" class="form-control" name="nom_menu" value="{!!$menu->nom_menu!!}">
								    @if ($errors->has('nom_menu'))
										<span class="help-block"><strong>{{ $errors->first('nom_menu') }}</strong></span>
									@endif
								</div>
							</div>
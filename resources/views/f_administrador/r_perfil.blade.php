@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro Nuevo Perfil</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'admin.perfil','method'=>'POST','class'=>'form-horizontal','role'=>'form'])!!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nomperfil') ? ' has-error' : '' }}">
                            <label for="nomperfil" class="col-md-4 control-label">Nombre Perfil</label>

                            <div class="col-md-6">
                                <input id="nomperfil" type="text" class="form-control" name="nomperfil" value="{{ old('nomperfil') }}">

                                @if ($errors->has('nomperfil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomperfil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nivel') ? ' has-error' : '' }}">
                            <label for="nivel" class="col-md-4 control-label">Nivel Perfil</label>

                            <div class="col-md-6">
                                <input id="nivel" type="text" class="form-control" name="nivel" value="{{ old('nivel') }}">

                                @if ($errors->has('nivel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nivel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                            <label for="tipo" class="col-md-4 control-label">Tipo Perfil</label>

                            <div class="col-md-6">
                                <input id="tipo" type="text" class="form-control" name="tipo" value="{{ old('tipo') }}">

                                @if ($errors->has('tipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nomtipo') ? ' has-error' : '' }}">
                            <label for="nomtipo" class="col-md-4 control-label">Nombre Tipo Perfil</label>

                            <div class="col-md-6">
                                <input id="nomtipo" type="text" class="form-control" name="nomtipo" value="{{ old('nomtipo') }}">

                                @if ($errors->has('nomtipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomtipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar Perfil
                                </button>
                            </div>
                        </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
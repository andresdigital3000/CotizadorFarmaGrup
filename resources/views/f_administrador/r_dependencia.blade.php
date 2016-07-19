@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro Nueva Dependencia</div>
                <div class="panel-body">

                    {!!Form::open(['route'=>'admin.dependencia','method'=>'POST','class'=>'form-horizontal','role'=>'form'])!!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('dependencia') ? ' has-error' : '' }}">
                            <label for="dependencia" class="col-md-4 control-label">Dependencia</label>

                            <div class="col-md-6">
                                <input id="dependencia" type="text" class="form-control" name="dependencia" value="{{ old('dependencia') }}">
                                @if ($errors->has('dependencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dependencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar Dependencia
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
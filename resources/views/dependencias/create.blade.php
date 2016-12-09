@extends('layouts.master')
@section('content')
@include('alerts.request')
	<br> <br>
	<div>
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading" align="center"><font size="4">Registro Dependencia</font></div>
	                <div class="panel-body">
	                	{!!Form::open(['route'=>'dependencias.store','method'=>'POST','class'=>'form-horizontal','role'=>'form'])!!}	 
	                        {{ csrf_field() }}

	                        @include('dependencias.forms.dep')

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
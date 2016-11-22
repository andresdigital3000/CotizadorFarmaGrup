@extends('layouts.master')
@section('content')
	<div>
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading" align="center"><font size="4">Administrar Plantillas</font></div>
	                <div class="panel-body">
	                	{!!Form::model($prod,['route'=>['productos.update',$prod],'method'=>'PUT','class'=>'form-horizontal','files' => true])!!}	 
	                        {{ csrf_field() }}

	                        @include('productos.forms.prod_plant')

	                        <div class="form-group">
	                            <div class="col-md-6 col-md-offset-4">
	                                <button type="submit" class="btn btn-primary">
	                                    <i class="fa fa-btn fa-user"></i> Registrar
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
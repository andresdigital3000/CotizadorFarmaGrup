@extends('layouts.master')
@section('content')
@include('alerts.request')
	<div>
	    <div class="row">
	        <div >
	            <div class="panel panel-default">
	                <div class="panel-heading" align="center"><font size="4">Actualizacion Datos</font></div>
	                <div class="panel-body">
						{!!Form::model($cliente,['route'=>['clientes.update',$cliente->id],'method'=>'PUT','class'=>'form-horizontal','role'=>'form'])!!}
							{{ csrf_field() }}

							@include('clientes.forms.cli_ed')

							<div class="form-group">
						        <div class="col-md-6 col-md-offset-5">
							        <button type="submit" class="btn btn-primary">
							        	<i class="fa fa-btn fa-user"></i> Actualizar
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
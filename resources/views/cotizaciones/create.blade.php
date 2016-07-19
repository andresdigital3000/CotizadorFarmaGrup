@extends('layouts.master')
@section('content')
@include('alerts.request')
	<br> <br>
	<table>
		<td>
			<th>
				{!!Form::open(['route'=>'admin.perfil','method'=>'GET'])!!}
				{{ csrf_field() }}
				    <div class="form-group">
				        <div>
				            <button type="submit" class="btn btn-primary"></i> Nuevo Perfil</button>
				        </div>                            
				    </div>
				{!!Form::close()!!}
			</th>
			<th align="center" width="50%">
				{!!Form::open(['route'=>'admin.dependencia','method'=>'GET'])!!}
				{{ csrf_field() }}
				    <div class="form-group">
				        <div>
					        <button type="submit" class="btn btn-primary"></i> Nueva Dependencia</button>
				        </div>                            
				    </div>
				{!!Form::close()!!}
			</th>
		</td>
	</table>

	<div>
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading" align="center"><font size="4">Registro Empleado</font></div>
	                <div class="panel-body">
	                	{!!Form::open(['route'=>'usuario.store','method'=>'POST','class'=>'form-horizontal','role'=>'form'])!!}	 
	                        {{ csrf_field() }}

	                        @include('usuario.forms.usr')

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
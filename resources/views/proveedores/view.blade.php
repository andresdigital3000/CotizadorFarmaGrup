@extends('layouts.master')
@section('content')
	<div>
	    <div class="row">
	        <div >
	            <div class="panel panel-default">
	                <div class="panel-heading" align="center"><font size="4">Proveedor</font></div>
	                <div class="panel-body">
						{!!Form::model($prov,['route'=>['proveedores.index',$prov->id],'method'=>'GET','class'=>'form-horizontal','role'=>'form'])!!}
							{{ csrf_field() }}

							@include('proveedores.forms.prov_vw')

							<div class="form-group">
						        <div class="col-md-6 col-md-offset-5">
							        <button type="submit" class="btn btn-primary">
							        	<i class="fa fa-btn fa-user"></i> Aceptar
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
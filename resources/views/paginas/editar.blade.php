@extends('layouts.master',['menus' => $menus])
@section('content')
@include('alerts.request')
	<div>
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading" align="center"><font size="4">Actualizacion Datos</font></div>
	                <div class="panel-body">
						{!!Form::model($pagina,['route'=>['paginas.update',$pagina->id],'method'=>'PUT','class'=>'form-horizontal','role'=>'form'])!!}
							{{ csrf_field() }}

							@include('paginas.forms.pag_ed')

							<div class="form-group">
						        <div class="col-md-6 col-md-offset-4">
							        <button type="submit" class="btn btn-primary">
							        	<i class="fa fa-btn fa-pagina"></i> Actualizar
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
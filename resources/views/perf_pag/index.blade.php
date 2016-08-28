<script language="JavaScript" type="text/javascript">
function comprobar(obj){
	    if (obj.checked){
	    	document.getElementById("act"+obj.value).disabled=false;	    	
	    	document.getElementById("eli"+obj.value).disabled=false;
	    }else{
	    	document.getElementById("act"+obj.value).disabled=true;
	    	document.getElementById("eli"+obj.value).disabled=true;
	    	document.getElementById("act"+obj.value).checked=false;
	    	document.getElementById("eli"+obj.value).checked=false;
	    } 
	}
</script>

@extends('layouts.master',['menus' => $menus])
@include('alerts.success')
@section('content')
	{!!Form::open(['route'=>'perfpag.store','method'=>'POST','class'=>'form-horizontal','role'=>'form'])!!}
		{{ csrf_field() }}
		<h1 align="center">Permisos para Perfil {{$perf->nomperfil}}</h1>	 
		<table class="table">
			<thead>
				<th>Codigo Pagina</th>
				<th>Nombre Pagina</th>
				<th>Ver</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</thead>
			@foreach($paginas as $pagina)
				<tbody>					
					<td>{{$pagina->id}}</td>
					<td>{{$pagina->nom_pagina}}</td>
					<td>{{ Form::checkbox('ver[]',$pagina->id,null,['onChange'=>'comprobar(this);']) }}</td>
					<td>{{ Form::checkbox('act[]',$pagina->id,null,['disabled', 'id'=>'act'.$pagina->id]) }}</td>
					<td>{{ Form::checkbox('eli[]',$pagina->id,null,['disabled', 'id'=>'eli'.$pagina->id]) }}</td>
				</tbody>
			@endforeach			
		</table>

		{!!$paginas->render()!!}

		{{ Form::text('id_perf', $perf->id,['style'=>'display:none']) }}
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" id="boton" class="btn btn-primary">Registrar Permisos</button>
			</div>
		</div>
	{!!Form::close()!!}
@endsection
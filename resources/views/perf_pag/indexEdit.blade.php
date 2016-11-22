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

function habilitar(){

	var table = document.getElementById("tblPermisos");
	var rowLength = table.rows.length;

	for(var i=1; i<rowLength; i+=1){
	  
		var row = table.rows[i];
		if(document.getElementById("ver"+row.cells[0].textContent).checked){
	    	document.getElementById("act"+row.cells[0].textContent).disabled=false;	    	
	    	document.getElementById("eli"+row.cells[0].textContent).disabled=false;			   	
		}

	}

}
</script>

@extends('layouts.master')
@include('alerts.success')
@section('content')
	{!!Form::model($perf,['route'=>['perfpag.update',$perf->id],'method'=>'PUT','class'=>'form-horizontal','role'=>'form'])!!}

		<h1 align="center">Permisos para Perfil {{$perf->nomperfil}}</h1>	 
		<table id="tblPermisos" class="table">
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
					<td>{{Form::checkbox('ver[]',$pagina->id,$pagina->sCheckVer,['onChange'=>'comprobar(this);','id'=>'ver'.$pagina->id]) }}</td>
					<td>{{Form::checkbox('act[]',$pagina->id,$pagina->sCheckAct,['disabled', 'id'=>'act'.$pagina->id]) }}</td>
					<td>{{Form::checkbox('eli[]',$pagina->id,$pagina->sCheckEli,['disabled', 'id'=>'eli'.$pagina->id]) }}</td>
				</tbody>
			@endforeach			
		</table>

		{{ Form::text('id_perf', $perf->id,['style'=>'display:none']) }}
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" id="boton" class="btn btn-primary" onclick="habilitar();">Editar Permisos</button>
			</div>
		</div>
	{!!Form::close()!!}
@endsection
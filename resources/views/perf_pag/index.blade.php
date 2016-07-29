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
				<th>Actualizar</th>
				<th>Eliminar</th>
			</thead>
			@foreach($paginas as $pagina)
				<tbody>
					<td>{{$pagina->id}}</td>
					<td>{{$pagina->nom_pagina}}</td>			
					<td>{{ Form::checkbox('ver[]',$pagina->id) }}</td>
					<td>{{ Form::checkbox('actualiza[]',$pagina->id) }}</td>
					<td>{{ Form::checkbox('elimina[]',$pagina->id) }}</td>
				</tbody>
			@endforeach			
		</table>
		{{ Form::text('id', $perf->id,['style'=>'display:none']) }}
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">Registrar Permisos</button>
			</div>
		</div>
	{!!Form::close()!!}
@endsection
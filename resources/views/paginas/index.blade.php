@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Codigo</th>
			<th>Nombre</th>
		</thead>
		@foreach($paginas as $pagina)
			<tbody>
				<td>{{$pagina->id}}</td>
				<td>{{$pagina->nom_pagina}}</td>
				<td>
					{!!link_to_route('paginas.edit', $title = 'Editar', $parameters = $pagina->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
		@endforeach
	</table>

	@endsection
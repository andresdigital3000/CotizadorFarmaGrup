@extends('layouts.master',['menus' => $menus])
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Url</th>
		</thead>
		@foreach($paginas as $pagina)
			<tbody>
				<td>{{$pagina->id}}</td>
				<td>{{$pagina->nom_pagina}}</td>				
				<td>{{$pagina->url}}</td>
				<td>
					{!!link_to_route('paginas.edit', $title = 'Editar', $parameters = $pagina->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route'=>['paginas.destroy', $pagina->id], 'method'=>'DELETE', 'align'=>'right'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	@endsection
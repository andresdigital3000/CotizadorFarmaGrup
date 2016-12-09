@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Url</th>			
			<th style="text-align:center">Editar</th>
			<th style="text-align:center">Eliminar</th>
		</thead>
		@foreach($paginas as $pagina)
			<tbody>
				<td>{{$pagina->nom_pagina}}</td>				
				<td>{{$pagina->url}}</td>
				<td style="text-align:center">
					{!!link_to_route('paginas.edit', $title = 'Editar', $parameters = $pagina->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td style="text-align:center">
					{!!Form::open(['route'=>['paginas.destroy', $pagina->id], 'method'=>'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$paginas->render()!!}

	@endsection
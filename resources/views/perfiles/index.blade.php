@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Nivel</th>
			<th>tipo</th>
		</thead>
		@foreach($perfiles as $perfil)
			<tbody>
				<td>{{$perfil->nomperfil}}</td>
				<td>{{$perfil->nivel}}</td>
				<td>{{$perfil->tipo}}</td>
				<td>
					{!!link_to_route('perfiles.edit', $title = 'Editar', $parameters = $perfil->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
		@endforeach
	</table>

	@endsection
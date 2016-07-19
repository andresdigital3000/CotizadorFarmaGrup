@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Cargo</th>
			<th>Extension</th>
			<th>Correo</th>
			<th>Operacion</th>
		</thead>
		@foreach($users as $user)
			<tbody>
				<td>{{$user->nombre}}</td>
				<td>{{$user->cargo}}</td>
				<td>{{$user->extension}}</td>
				<td>{{$user->email}}</td>
				<td>
					{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
		@endforeach
	</table>

	@endsection
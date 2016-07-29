@extends('layouts.master',['menus' => $menus])
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
		@foreach($clientes as $cliente)
			<tbody>
				<td>{{$cliente->nombre}}</td>
				<td>{{$cliente->cargo}}</td>
				<td>{{$cliente->extension}}</td>
				<td>{{$cliente->email}}</td>
				<td>
					{!!link_to_route('clientes.edit', $title = 'Editar', $parameters = $cliente->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
		@endforeach
	</table>

	@endsection
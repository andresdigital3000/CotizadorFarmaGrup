@extends('layouts.master',['menus' => $menus])
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Cargo</th>
			<th>Extension</th>
			<th>Correo</th>
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
				<td>
					{!!Form::open(['route'=>['usuario.destroy', $user->id], 'method'=>'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$users->render()!!}

	@endsection
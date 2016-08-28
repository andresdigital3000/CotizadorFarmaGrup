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
		@foreach($productos as $producto)
			<tbody>
				<td>{{$producto->nombre}}</td>
				<td>{{$producto->cargo}}</td>
				<td>{{$producto->extension}}</td>
				<td>{{$producto->email}}</td>
				<td>
					{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $producto->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route'=>['usuario.destroy', $producto->id], 'method'=>'DELETE', 'align'=>'right'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$productos->render()!!}

	@endsection
@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Nivel</th>
			<th>tipo</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</thead>
		@foreach($perfiles as $perfil)
			<tbody>
				<td>{{$perfil->nomperfil}}</td>
				<td>{{$perfil->nivel}}</td>
				<td>{{$perfil->tipo}}</td>
				<td>
					{!!link_to_route('perfiles.edit', $title = 'Editar', $parameters = $perfil->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route'=>['perfiles.destroy', $perfil->id], 'method'=>'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$perfiles->render()!!}

	@endsection
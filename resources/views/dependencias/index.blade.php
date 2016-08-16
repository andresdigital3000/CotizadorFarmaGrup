@extends('layouts.master',['menus' => $menus])
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Codigo</th>
			<th>Nombre</th>
		</thead>
		@foreach($dependencias as $dependencia)
			<tbody>
				<td>{{$dependencia->id}}</td>
				<td>{{$dependencia->dependencia}}</td>
				<td>
					{!!link_to_route('dependencias.edit', $title = 'Editar', $parameters = $dependencia->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route'=>['dependencias.destroy', $dependencia->id], 'method'=>'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	@endsection
@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>			
			<th style="text-align:center">Editar</th>		
			<th style="text-align:center">Eliminar</th>
		</thead>
		@foreach($dependencias as $dependencia)
			<tbody>
				<td>{{$dependencia->dependencia}}</td>
				<td style="text-align:center">
					{!!link_to_route('dependencias.edit', $title = 'Editar', $parameters = $dependencia->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td style="text-align:center">
					{!!Form::open(['route'=>['dependencias.destroy', $dependencia->id], 'method'=>'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$dependencias->render()!!}

	@endsection
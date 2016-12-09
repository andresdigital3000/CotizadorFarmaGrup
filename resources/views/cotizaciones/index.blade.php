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
			<th style="text-align:center">Editar</th>
			<th style="text-align:center">Eliminar</th>
		</thead>
		@foreach($cotis as $cotizacion)
			<tbody>
				<td>{{$cotizacion->nombre}}</td>
				<td>{{$cotizacion->cargo}}</td>
				<td>{{$cotizacion->extension}}</td>
				<td>{{$cotizacion->email}}</td>
				<td style="text-align:center">
					{!!link_to_route('cotizaciones.edit', $title = 'Editar', $parameters = $cotizacion->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td style="text-align:center">
					{!!Form::open(['route'=>['cotizaciones.destroy', $cotizacion->id], 'method'=>'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$cotis->render()!!}

	@endsection
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
		@foreach($cotis as $cotizacion)
			<tbody>
				<td>{{$cotizacion->nombre}}</td>
				<td>{{$cotizacion->cargo}}</td>
				<td>{{$cotizacion->extension}}</td>
				<td>{{$cotizacion->email}}</td>
				<td>
					{!!link_to_route('cotizaciones.edit', $title = 'Editar', $parameters = $cotizacion->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route'=>['cotizaciones.destroy', $cotizacion->id], 'method'=>'DELETE', 'align'=>'right'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	@endsection
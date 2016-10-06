@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Nit</th>
			<th>Razon Social</th>
			<th>Pais</th>
			<th>Correo</th>
			<th>Moneda</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</thead>
		@foreach($proveedores as $proveedor)
			<tbody>
				<td>{{$proveedor->nit}}</td>
				<td>{{$proveedor->razonsocial}}</td>
				<td>{{$proveedor->pais}}</td>
				<td>{{$proveedor->email}}</td>
				<td>{{$proveedor->moneda}}</td>
				<td>
					{!!link_to_route('proveedores.edit', $title = 'Editar', $parameters = $proveedor->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route'=>['proveedores.destroy', $proveedor->id], 'method'=>'DELETE', 'align'=>'right'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$proveedores->render()!!}

	@endsection
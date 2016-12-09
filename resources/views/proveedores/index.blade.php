@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Código</th>
			<th>Nit</th>
			<th>Razon Social</th>
			<th>Pais</th>
			<th>Correo</th>
			<th>Moneda</th>
			<th style="text-align:center">Editar</th>
			<th style="text-align:center">Ver</th>
			<th style="text-align:center">Eliminar</th>
		</thead>
		@foreach($proveedores as $proveedor)
			<tbody>
				<td>{{$proveedor->codigo}}</td>
				<td>{{$proveedor->nit}}</td>
				<td>{{$proveedor->razonsocial}}</td>
				<td>{{$proveedor->pais}}</td>
				<td>{{$proveedor->email}}</td>
				<td>{{$proveedor->moneda}}</td>
				<td style="text-align:center">
					{!!link_to_route('proveedores.edit', $title = 'Editar', $parameters = $proveedor->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td style="text-align:center">
					{!!link_to_route('proveedores.show', $title = 'Ver', $parameters = $proveedor->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>				
				<td style="text-align:center">
					{!!Form::open(['route'=>['proveedores.destroy', $proveedor->id], 'method'=>'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$proveedores->render()!!}

	@endsection
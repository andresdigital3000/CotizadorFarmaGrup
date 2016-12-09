@extends('layouts.master')
	@include('alerts.success')
	@include('alerts.errors')
	@section('content')
	<table class="table">
		<thead>
			<th>Nit</th>
			<th>Razon Social</th>
			<th>Pais</th>
			<th>Teléfono</th>
			<th style="text-align:center">Editar</th>
			<th style="text-align:center">Ver</th>			
			<th style="text-align:center">Eliminar</th>
		</thead>
		@foreach($clientes as $cliente)
			<tbody>
				<td>{{$cliente->nit}}</td>
				<td>{{$cliente->razonsocial}}</td>
				<td>{{$cliente->pais}}</td>
				<td>{{$cliente->telfno}}</td>
				<td style="text-align:center">
					{!!link_to_route('clientes.edit', $title = 'Editar', $parameters = $cliente->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td style="text-align:center">
					{!!link_to_route('clientes.show', $title = 'Ver', $parameters = $cliente->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td style="text-align:center">
					{!!Form::open(['route'=>['clientes.destroy', $cliente->id], 'method'=>'DELETE', 'align'=>'rigth'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$clientes->render()!!}

	@endsection
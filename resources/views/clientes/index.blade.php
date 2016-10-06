@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Nit</th>
			<th>Razon Social</th>
			<th>Pais</th>
			<th>Responsable</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</thead>
		@foreach($clientes as $cliente)
			<tbody>
				<td>{{$cliente->nit}}</td>
				<td>{{$cliente->razonsocial}}</td>
				<td>{{$cliente->pais}}</td>
				<td>{{$cliente->respnsbleamfar}}</td>
				<td>
					{!!link_to_route('clientes.edit', $title = 'Editar', $parameters = $cliente->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route'=>['clientes.destroy', $cliente->id], 'method'=>'DELETE', 'align'=>'right'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$clientes->render()!!}

	@endsection
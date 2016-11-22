@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Referencia</th>
			<th>Descripción</th>
			<th>Tipo</th>
			<th>Precio Dolar</th>
			<th>Precio Euro</th>
			<th>Editar</th>
			<th>Plantillas</th>			
			<th>Eliminar</th>
		</thead>
		@foreach($productos as $producto)
			<tbody>
				<td>{{$producto->referencia}}</td>
				<td>{{$producto->descrpcion}}</td>
				<td>{{$producto->deta_parametro}}</td>
				<td>{{$producto->precio_dolar}}</td>
				<td>{{$producto->precio_euro}}</td>
				<td>
					{!!link_to_route('productos.edit', $title = 'Editar', $parameters = $producto->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!link_to_route('pantilla.edit', $title = 'Plantillas', $parameters = $producto->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route'=>['productos.destroy', $producto->id], 'method'=>'DELETE', 'align'=>'right'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

<!-- 	{!!$productos->render()!!} -->

	@endsection
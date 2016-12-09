@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Codigo</th>
			<th>Nombre</th>
			<th style="text-align:center">Editar</th>
			<th style="text-align:center">Eliminar</th>
		</thead>
		@foreach($menus as $menu)
			<tbody>
				<td>{{$menu->id}}</td>
				<td>{{$menu->nom_menu}}</td>
				<td style="text-align:center">
					{!!link_to_route('menus.edit', $title = 'Editar', $parameters = $menu->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td style="text-align:center">
					{!!Form::open(['route'=>['menus.destroy', $menu->id], 'method'=>'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$menus->render()!!}

	@endsection
@extends('layouts.master')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Codigo</th>
			<th>Nombre</th>
		</thead>
		@foreach($menus as $menu)
			<tbody>
				<td>{{$menu->id}}</td>
				<td>{{$menu->nom_menu}}</td>
				<td>
					{!!link_to_route('menus.edit', $title = 'Editar', $parameters = $menu->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route'=>['menus.destroy', $menu->id], 'method'=>'DELETE', 'align'=>'right'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>

	{!!$menus->render()!!}

	@endsection
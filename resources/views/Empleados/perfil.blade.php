<!DOCTYPE html>
<html>
<head>
	<title>EMPLEADOS</title>
</head>
<body>
	<h1 align="center"><strong><em>	NUEVO PERFIL  </em></strong></h1>
	{!!Form::open(['route'=>'empleados.perfil','method'=>'POST','align'=>'center'])!!}  
		<div class="form-group">
			{!!Form::label('NOMBRE PERFIL:')!!}
		    {!!Form::text('nomperfil',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre Perfil'])!!}
		</div>
		<br>
		<div class="form-group">
		    {!!Form::label('NIVEL:')!!}
		    {!!Form::text('nivel',null,['class'=>'form-control','placeholder'=>'Ingrese Nivel Perfil'])!!}
		</div>
		<br>
		<div class="form-group">
		    {!!Form::label('TIPO:')!!}
		    {!!Form::text('tipo',null,['class'=>'form-control','placeholder'=>'Ingrese Tipo Perfil'])!!}
		</div>
		<br>
		<div class="form-group">
		    {!!Form::label('NOMBRE TIPO:')!!}
		    {!!Form::text('nomtipo',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre Tipo Perfil'])!!}
		</div>
		<br><br>
		{!!Form::submit('REGISTRAR PERFIL',null,['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
</body>
</html>
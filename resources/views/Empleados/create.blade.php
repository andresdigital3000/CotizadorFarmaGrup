<!DOCTYPE html>
<html>
<head>
	<title>EMPLEADOS</title>
</head>
<body>
	<h1 align="center"><strong><em>	REGISTRO DE NUEVO EMPLEADO </em></strong></h1>
	{!!Form::open(['route'=>'empleados.vperfil','method'=>'GET'])!!}
	   	{!!Form::submit('NUEVO PERFIL',null,['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	<br>
	{!!Form::open(['route'=>'empleados.vdependencia','method'=>'GET'])!!}
	   	{!!Form::submit('NUEVA DEPENDENCIA',null,['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	{!!Form::open(['route'=>'empleados.registro','method'=>'POST','align'=>'center'])!!}  
		<div class="form-group">
			{!!Form::label('CEDULA:')!!}
		    {!!Form::text('cedula',null,['class'=>'form-control','placeholder'=>'Ingrese Numero Identificacion', 'size'=>'25'])!!}
		</div>
		<br>
	    <div class="form-group">
		    {!!Form::label('PERFIL:')!!}
		    {!!Form::select('perfil', $datosPerf);!!}
		</div>
		<br>
	    <div class="form-group">
		    {!!Form::label('DEPENDENCIA:')!!}
		    {!!Form::select('dep', $datosDep);!!}
		</div>
		<br>
		<div class="form-group">
		    {!!Form::label('NOMBRE:')!!}
		    {!!Form::text('nomb',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre Completo'])!!}
		</div>
		<br>
		<div class="form-group">
		    {!!Form::label('EXTESION:')!!}
		    {!!Form::text('ext',null,['class'=>'form-control','placeholder'=>'Ingrese la Extension'])!!}
		</div>
		<br>
		<div class="form-group">
		    {!!Form::label('CARGO:')!!}
		    {!!Form::text('cargo',null,['class'=>'form-control','placeholder'=>'Ingrese el Cargo'])!!}
		</div>
		<br>
		<div class="form-group">
		    {!!Form::label('CORREO ELECTRONICO:')!!}
		    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese E-Mail'])!!}
		</div>
		<br>
		<div class="form-group">
		    {!!Form::label('USUARIO:')!!}
		    {!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre de Usuario'])!!}
		</div>		
		<br>
		<div class="form-group">
		    {!!Form::label('CONTRASEÑA:')!!}
		    {!!Form::text('contrasena',null,['class'=>'form-control','placeholder'=>'Ingrese Contraseña de Usuario', 'size'=>'25'])!!}
		</div>
		<br><br>
		{!!Form::submit('REGISTRAR',null,['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
</body>
</html>
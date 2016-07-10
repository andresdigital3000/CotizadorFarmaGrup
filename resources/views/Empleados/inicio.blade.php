<!DOCTYPE html>
<html>
<head>
	<title>EMPLEADOS</title>
</head>
<body>
	<h1 align="center"><strong><em>	BIENVENIDO EMPLEADO <?php echo "$user->nombre";?> </em></strong></h1>
	{!!Form::open(['route'=>'empleados.create','method'=>'GET','align'=>'center'])!!}  
		{!!Form::submit('REGISTRAR EMPLEADO',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>'empleados.create','method'=>'GET','align'=>'right'])!!}  
		{!!Form::submit('CERRAR SESION',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
</body>
</html>
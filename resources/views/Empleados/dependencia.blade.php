<!DOCTYPE html>
<html>
<head>
	<title>EMPLEADOS</title>
</head>
<body>
	<h1 align="center"><strong><em>	NUEVA DEPENDENCIA  </em></strong></h1>
	{!!Form::open(['route'=>'empleados.dependencia','method'=>'POST','align'=>'center'])!!}  
		<div class="form-group">
			{!!Form::label('NOMBRE DEPENDENCIA:')!!}
		    {!!Form::text('dependencia',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre Dependencia', 'size'=>'25'])!!}
		</div>		
		<br><br>
		{!!Form::submit('REGISTRAR DEPENDENCIA',null,['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
</body>
</html>
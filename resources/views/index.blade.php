<!DOCTYPE html>
<html>
<head>
	<title>COTIZADOR FARMAGROUP</title>
</head>
<body>	
	<table border="1" width="100%">
		<tr><h1 align="center"><strong><em>	COTIZADOR WEB FARMAGRUP </em></strong></h1></tr>
		<tr>
        	<th width="50%"><a href="index.php" align="left"><img src="Images/LogoAmfarGlobo.jpg"></a></th>
        	<th>   
        		{!!Form::open(['route'=>'empleados.store','method'=>'POST'])!!}  
        			<div class="form-group">
				      {!!Form::label('INICIO DE SESION')!!}
				    </div>
				    <br>
	        		<div class="form-group">
				      {!!Form::label('USUARIO:')!!}
				      {!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre de Usuario'])!!}
				    </div>
				    <br>
				    <div class="form-group">
				      {!!Form::label('CONTRASEÑA:')!!}
				      {!!Form::password('contrasena',['class'=>'form-control','placeholder'=>'Ingrese Contraseña de Usuario', 'size'=>'25'])!!}
				    </div>
				    <br><br>
				    {!!Form::submit('INGRESAR',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
			</th>
		</tr>
		<tr> </tr>
	</table>	
</body>
</html>
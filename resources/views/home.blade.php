<?php  
	namespace CotizadorAF\Http\Controllers;
	use DB;
	use Auth;
	$perfil = DB::table('perfiles')->where('id', Auth::user()->cod_perfil)->first();
?>

@extends('layouts.master',['menus' => $menus]) 
    
@section('content')
	<!DOCTYPE html>
	<html>
		<head>
			<script language="JavaScript" type="text/javascript">
			    function mueveReloj(){
			        if (!document.layers&&!document.all&&!document.getElementById)
			        return

			         var Digital=new Date()
			         var hours=Digital.getHours()
			         var minutes=Digital.getMinutes()
			         var seconds=Digital.getSeconds()

			        var dn="PM"
			        if (hours<12)
			        dn="AM"
			        if (hours>12)
			        hours=hours-12
			        if (hours==0)
			        hours=12

			         if (minutes<=9)
			         minutes="0"+minutes
			         if (seconds<=9)
			         seconds="0"+seconds
			        //change font size here to your desire
			        myclock="<font size='15' face='Arial'><b></br>"+hours+":"+minutes+":"+seconds+" "+dn+"</b></font>"
			        if (document.layers){
			        document.layers.liveclock.document.write(myclock)
			        document.layers.liveclock.document.close()
			        }
			        else if (document.all)
			        liveclock.innerHTML=myclock
			        else if (document.getElementById)
			        document.getElementById("liveclock").innerHTML=myclock
			        setTimeout("mueveReloj()",1000)
			    }
			    window.onload=mueveReloj
		     </script>
		</head>
		<body>			
			<h1 align="center">Bienvenido <?php echo $perfil->nomperfil ?></h1>
			<br><br><br><br><br>
		    <form onload="mueveReloj()" align="center">
		    	<font face="ComicSans" size="20" color='205CB7'>
		    		<?php 
		    			$dia=date("l");
		    			if ($dia=="Monday") $dia="Lunes";
						if ($dia=="Tuesday") $dia="Martes";
						if ($dia=="Wednesday") $dia="Miércoles";
						if ($dia=="Thursday") $dia="Jueves";
						if ($dia=="Friday") $dia="Viernes";
						if ($dia=="Saturday") $dia="Sabado";
						if ($dia=="Sunday") $dia="Domingo";

						$mes=date("F");
						if ($mes=="January") $mes="Enero";
						if ($mes=="February") $mes="Febrero";
						if ($mes=="March") $mes="Marzo";
						if ($mes=="April") $mes="Abril";
						if ($mes=="May") $mes="Mayo";
						if ($mes=="June") $mes="Junio";
						if ($mes=="July") $mes="Julio";
						if ($mes=="August") $mes="Agosto";
						if ($mes=="September") $mes="Setiembre";
						if ($mes=="October") $mes="Octubre";
						if ($mes=="November") $mes="Noviembre";
						if ($mes=="December") $mes="Diciembre";

						$ano=date("Y");

						$dia2=date("d");

		    			echo "$dia, $dia2 de $mes del $ano";
		    		?>
					<span id="liveclock"></span>
				</font>	
			</form>	
		</body>
	</html>					
@endsection

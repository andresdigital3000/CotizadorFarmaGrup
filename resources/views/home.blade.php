<?php  
	namespace CotizadorAF\Http\Controllers;
	use Illuminate\Http\Request;
	use CotizadorAF\Http\Requests;
	use DB;
	use Auth;
	$perfil = DB::table('perfiles')->where('id', Auth::user()->cod_perfil)->first();
?>

@extends('layouts.master')
    
@section('content')
	<!DOCTYPE html>
	<html>
		<head>
			<title>EMPLEADOS</title>
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
		    		<?php echo date('l jS \of F Y');?>
					<span id="liveclock"></span>
				</font>	  
			</form>	
		</body>
	</html>					
@endsection

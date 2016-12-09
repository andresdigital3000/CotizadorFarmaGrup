$("#buscar").click(function(){

	var id = $("#id_m").val();
	var nit = $("#nit_m").val();
	var razonsocial = $("#razonsocial_m").val();
	var params = 'codigo='+id+'&nit='+nit+'&razonsocial='+razonsocial;
	var route = window.location.origin+"/CotizadorFarma/public/buscarProv";
	var tablaRegistros = $("#registros");
	var tablaTr = $("#registros tr");
	tablaTr.remove();

	$.get(route, params, function(res){
	 	for (var i=0; i<res.length; i++) {
			tablaRegistros.append("<tr><td style='display:none;'>"+res[i].id+"</td>"+
									  "<td>"+res[i].id+"</td>"+
				                      "<td>"+res[i].nit+"</td>"+
				                      "<td>"+res[i].razonsocial+"</td>"+
				                      "<td><button class='btn btn-primary' value='"+res[i].id+"'  OnClick='Elegir(this);'>Elegir</button></td></tr>"); 
		}
	});

	var divResultado = document.getElementById('resultado');
	if (divResultado.style.display == 'none' ){
		divResultado .style.display = 'block';
	}
});

function Elegir(btn){

	var route = window.location.origin+"/CotizadorFarma/public/findById";
	var params = 'codigo='+btn.value; 

	$.get(route, params, function(res){	
		$("#codgo_prov").val(res.id);		
		$("#razonsocial").val(res.razonsocial);
		$("#nit").val(res.nit);
		$("#codigo").val(res.codigo);
		$("#ubccion").val(res.ubccion);
		$("#pais").val(res.pais);
		$("#ciudad").val(res.ciudad);
		$("#telfno").val(res.telfno);
		$("#fax").val(res.fax);
		$("#email").val(res.email);
		$("#contcto").val(res.contcto);
	});
	$('#searchProveedorModal').modal('hide');

}
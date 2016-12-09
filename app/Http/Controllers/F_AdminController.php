<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use DB;

class F_AdminController extends Controller{
	public function index(){
    }

    public function create(){
    	
    }

    public function store(){
		
    }

    public function n_perfil(Request $request){
    	if ($_GET) {    		
    	return view('f_administrador.r_perfil');
    	}
    	if ($_POST) {
    		\CotizadorAF\Perfiles::create([
	            'nomperfil' => $request['nomperfil'],
	            'nivel' => $request['nivel'],
	            'tipo' => $request['tipo'],
	            'nomtipo' => $request['nomtipo'],
	        ]); 	        

	        print '<script language="JavaScript">'; 
	        print 'alert("Registro Exitoso");'; 
	        print '</script>'; 
	        
	        return view('auth.register');
    	}
    }

    public function n_dependencia(Request $request){
    	if ($_GET) {    		
    	return view('f_administrador.r_dependencia');
    	}
    	if ($_POST) {    		
    		\CotizadorAF\Dependencias::create([
	            'dependencia' => $request['dependencia'],
	        ]);  

	        $datosPerf = DB::table('perfiles')->lists('nomperfil','cod_prfil');
	        $datosDep = DB::table('dependencias')->lists('dependencia','codigo');

	        print '<script language="JavaScript">'; 
	        print 'alert("Registro Exitoso");'; 
	        print '</script>'; 

	        return view('auth.register');
    	}
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update($id){

    }

    public function destroy($id){

    }
}

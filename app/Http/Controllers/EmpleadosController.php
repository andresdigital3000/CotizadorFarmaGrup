<?php

namespace Cotizador_Farmagroup\Http\Controllers;

use Illuminate\Http\Request;
use Cotizador_Farmagroup\Http\Requests;
use DB;
use Crypt;

class EmpleadosController extends Controller
{
    public function index(){
    	
    }

    //Funcion para inicio de sesion del empleado
    public function store(Request $request){ 
        $user = DB::table('empleados')->where('usuario', $request['usuario'])->first();
        if (empty($user)) {
            print '<script language="JavaScript">'; 
            print 'alert("Usuario No Existente");'; 
            print '</script>'; 
            return view('index');              
        }else{
            $clavedes = Crypt::decrypt("$user->clave");        
            if ("$clavedes" == $request['contrasena']){                     
                print '<script language="JavaScript">'; 
                print 'alert("Ingreso Correcto");'; 
                print '</script>';
                return view('empleados.inicio',compact('$user'));
            }else{
                print '<script language="JavaScript">'; 
                print 'alert("Verifique");'; 
                print '</script>';
                return view('index');
            }
        }
    }

    //Funcion para mostrar fomulario de registro
    public function create(){
        $datosPerf = DB::table('perfiles')->lists('nomperfil','cod_prfil');
        $datosDep = DB::table('dependencias')->lists('dependencia','codigo');

        return view('empleados.create',compact('datosPerf'),compact('datosDep'));
    }

    //Funcion para registro de empleado en la base de datos
    public function registro(Request $request){
        \Cotizador_Farmagroup\Empleados::create([
            'cedla' => $request['cedula'],
            'cod_perfil' => $request['perfil'],
            'cod_dependencia' => $request['dep'],
            'nombre' => $request['nomb'],
            'extension' => $request['ext'],
            'cargo' => $request['cargo'],
            'email' => $request['email'],
            'usuario' => $request['usuario'],
            'clave' => Crypt::encrypt($request['contrasena']),
        ]);         
        print '<script language="JavaScript">'; 
        print 'alert("Registro Exitoso");'; 
        print '</script>'; 

        return view('empleados.inicio');
    }

    public function viewperfil(){
        return view('empleados.perfil'); 
    }

    public function perfil(Request $request){
        \Cotizador_Farmagroup\Perfiles::create([
            'nomperfil' => $request['nomperfil'],
            'nivel' => $request['nivel'],
            'tipo' => $request['tipo'],
            'nomtipo' => $request['nomtipo'],
        ]); 

        $datosPerf = DB::table('perfiles')->lists('nomperfil','cod_prfil');
        $datosDep = DB::table('dependencias')->lists('dependencia','codigo');

        print '<script language="JavaScript">'; 
        print 'alert("Registro Exitoso");'; 
        print '</script>'; 
        
        return view('empleados.create',compact('datosPerf'),compact('datosDep'));
    }

    public function viewdependencia(){
        return view('empleados.dependencia');
    }

    public function dependencia(Request $request){
        \Cotizador_Farmagroup\Dependencias::create([
            'dependencia' => $request['dependencia'],
        ]);  

        $datosPerf = DB::table('perfiles')->lists('nomperfil','cod_prfil');
        $datosDep = DB::table('dependencias')->lists('dependencia','codigo');

        print '<script language="JavaScript">'; 
        print 'alert("Registro Exitoso");'; 
        print '</script>'; 

        return view('empleados.create',compact('datosPerf'),compact('datosDep'));
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

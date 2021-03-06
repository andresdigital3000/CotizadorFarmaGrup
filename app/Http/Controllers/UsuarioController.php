<?php

namespace CotizadorAF\Http\Controllers;

use DB;
use Auth;
use Cache;
use Session;
use Redirect;
use Illuminate\Support\Facades\Log;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\UserCreateRequest;
use CotizadorAF\Http\Requests\UserUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\User;

class UsuarioController extends Controller
{
    public function __construct(){
        //$this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->user = User::find($route->getParameter('usuario'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::info('UsuarioController - create');
        $datosPerf = DB::table('perfiles')->lists('nomperfil','id');
        $datosDep = DB::table('dependencias')->lists('dependencia','id');
        $conferr = " ";

        return view('usuario.create',compact('datosPerf','datosDep','conferr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        //Validar contraseñas iguales
        $pass = $request->input('password');
        $conf = $request->input('password-confirm');
        if(strcmp ($pass,$conf ) == 0){
            User::create($request->all());       
            Session::flash('message','Usuario Creado Correctamente');
            return Redirect::to('/usuario');
        }else{
            $datosPerf = DB::table('perfiles')->lists('nomperfil','id');
            $datosDep = DB::table('dependencias')->lists('dependencia','id');
            $conferr = "No coinciden las contraseñas!!! - Verifique";
            $request->flash();
            return view('usuario.create',compact('datosPerf','datosDep','conferr'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);        
        $datosPerf = DB::table('perfiles')->lists('nomperfil','id');
        $datosDep = DB::table('dependencias')->lists('dependencia','id');
        $conferr = " ";
        return view('usuario.editar',compact('user','datosPerf','datosDep','conferr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {      
        $user=User::find($id);
        //Validar contraseñas iguales
        $pass = $request->input('password');
        $conf = $request->input('password-confirm');
        if(strcmp ($pass,$conf ) == 0){
            $user->fill($request->all());
            $user->save();            
            Session::flash('message','Usuario Actualizado Correctamente');
            return Redirect::to('/usuario');
        }else{
            $datosPerf = DB::table('perfiles')->lists('nomperfil','id');
            $datosDep = DB::table('dependencias')->lists('dependencia','id');
            $conferr = "No coinciden las contraseñas!!! - Verifique";
            $request->flash();            
            return view('usuario.editar',compact('user','datosPerf','datosDep','conferr'));
        }     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }
}
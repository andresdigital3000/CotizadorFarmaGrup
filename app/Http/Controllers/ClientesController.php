<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\ClientesCreateRequest;
use CotizadorAF\Http\Requests\ClientesUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\User;
use CotizadorAF\Clientes;
use DB;
use Auth;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::paginate(10);
        return view('clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosEmp = DB::table('users')->lists('nombre','id');
        return view('clientes.create',compact('datosEmp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesCreateRequest $request)
    {
        try{
            Clientes::create($request->all());
            Session::flash('message','Cliente Agregado Correctamente');
        }catch (\Illuminate\Database\QueryException $e){
            Session::flash('message-error','No se creó el cliente, Nit ya existe!');
        }
        return Redirect::to('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente=Clientes::find($id);
        $datosEmp=User::where('id',$cliente->respnsbleamfar)->first();                
        return view('clientes.view',compact('cliente','datosEmp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=Clientes::find($id);
        $datosEmp = DB::table('users')->lists('nombre','id');        
        return view('clientes.editar',compact('cliente','datosEmp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientesUpdateRequest $request, $id)
    {
        $cliente=Clientes::find($id);
        $cliente->fill($request->all());
        $cliente->save();
        
        Session::flash('message','Cliente Actualizado Correctamente');
        return Redirect::to('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clientes::destroy($id);
        Session::flash('message','Cliente Eliminado Correctamente');
        return Redirect::to('/clientes');
    }
}

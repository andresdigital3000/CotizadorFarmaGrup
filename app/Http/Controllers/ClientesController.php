<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\ClientesCreateRequest;
use CotizadorAF\Http\Requests\ClientesUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Clientes;
use Auth;
use DB;
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
        $menus = DB::table('paginas')
            ->join('perf__pagis','paginas.id','=','perf__pagis.cod_pagina')
            ->where('cod_perf', Auth::user()->cod_perfil)
            ->join('menus','paginas.cod_menu','=', 'menus.id')
            ->select('nom_pagina', 'url')
            ->get();
        $clientes = Clientes::All();
        return view('clientes.index',compact('clientes','menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = DB::table('paginas')
            ->join('perf__pagis','paginas.id','=','perf__pagis.cod_pagina')
            ->where('cod_perf', Auth::user()->cod_perfil)
            ->join('menus','paginas.cod_menu','=', 'menus.id')
            ->select('nom_pagina', 'url')
            ->get();
        return view('clientes.create',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesCreateRequest $request)
    {
        Clientes::create($request->all());
        Session::flash('message','Cliente Creado Correctamente');
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
        $menus = DB::table('paginas')
            ->join('perf__pagis','paginas.id','=','perf__pagis.cod_pagina')
            ->where('cod_perf', Auth::user()->cod_perfil)
            ->join('menus','paginas.cod_menu','=', 'menus.id')
            ->select('nom_pagina', 'url')
            ->get();
        $cliente=Clientes::find($id);        
        return view('clientes.editar',compact('cliente','menus'));
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

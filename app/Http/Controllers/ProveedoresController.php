<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\ProveedoresCreateRequest;
use CotizadorAF\Http\Requests\ProveedoresUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Proveedores;
use Auth;
use DB;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class ProveedoresController extends Controller
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
        $proveedores = Proveedores::paginate(5);
        return view('proveedores.index',compact('proveedores','menus'));
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
        return view('proveedores.create',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedoresCreateRequest $request)
    {
        Proveedores::create($request->all());
        Session::flash('message','Proveedor Creado Correctamente');
        return Redirect::to('/proveedores');
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
        $prov=Proveedores::find($id);        
        return view('proveedores.editar',compact('prov','menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProveedoresUpdateRequest $request, $id)
    {
        $proveedor=Proveedores::find($id);
        $proveedor->fill($request->all());
        $proveedor->save();
        
        Session::flash('message','Proveedor Actuaizado Correctamente');
        return Redirect::to('/proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proveedores::destroy($id);
        Session::flash('message','Proveedor Elimiado Correctamente');
        return Redirect::to('/proveedores');
    }
}

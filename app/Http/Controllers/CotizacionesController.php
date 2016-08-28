<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\CotizacionesCreateRequest;
use CotizadorAF\Http\Requests\CotizacionesUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Cotizaciones;
use Auth;
use DB;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class CotizacionesController extends Controller
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
        $cotis = Cotizaciones::paginate(5);
        return view('cotizaciones.index',compact('cotis','menus'));
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
        return view('cotizaciones.create',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CotizacionesCreateRequest $request)
    {
        Cotizaciones::create($request->all());
        Session::flash('message','Dependencia Creada Correctamente');
        return Redirect::to('/cotizaciones');
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
        $cotizacion=Cotizaciones::find($id);        
        return view('cotizaciones.editar',compact('cotizacion','menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CotizacionesUpdateRequest $request, $id)
    {
        $cotizacion=Cotizaciones::find($id);
        $cotizacion->fill($request->all());
        $cotizacion->save();
        
        Session::flash('message','Cotizacion Actualizada Correctamente');
        return Redirect::to('/cotizaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cotizaciones::destroy($id);
        Session::flash('message','Cotizacion Eliminada Correctamente');
        return Redirect::to('/cotizaciones');
    }
}

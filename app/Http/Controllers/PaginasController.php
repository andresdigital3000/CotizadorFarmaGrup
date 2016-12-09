<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\PaginasCreateRequest;
use CotizadorAF\Http\Requests\PaginasUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Paginas;
use CotizadorAF\Perf_Pagi;
use Auth;
use DB;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class PaginasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginas = Paginas::paginate(10);
        return view('paginas.index',compact('paginas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cod_menu = DB::table('menus')->lists('nom_menu','id');
        return view('paginas.create',compact('cod_menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaginasCreateRequest $request)
    {
        Paginas::create($request->all());
        Session::flash('message','Pagina Agregada Correctamente');
        return Redirect::to('/paginas');
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
        $pagina=Paginas::find($id);        
        return view('paginas.editar',compact('pagina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaginasUpdateRequest $request, $id)
    {
        $pagina=Paginas::find($id);
        $pagina->fill($request->all());
        $pagina->save();
        
        Session::flash('message','Pagina Actualizada Correctamente');
        return Redirect::to('/paginas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paginas::destroy($id);
        Perf_Pagi::where('cod_pagina', $id)->delete();        
        Session::flash('message','Pagina Eliminada Correctamente');
        return Redirect::to('/paginas');
    }
}

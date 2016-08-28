<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\PaginasCreateRequest;
use CotizadorAF\Http\Requests\PaginasUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Paginas;
use CotizadorAF\PerfPagis;
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
        $menus = DB::table('paginas')
            ->join('perf__pagis','paginas.id','=','perf__pagis.cod_pagina')
            ->where('cod_perf', Auth::user()->cod_perfil)
            ->join('menus','paginas.cod_menu','=', 'menus.id')
            ->select('nom_pagina', 'url')
            ->get();
        $paginas = Paginas::paginate(5);
        return view('paginas.index',compact('paginas','menus'));
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
        $cod_menu = DB::table('menus')->lists('nom_menu','id');
        return view('paginas.create',compact('cod_menu','menus'));
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
        $menus = DB::table('paginas')
            ->join('perf__pagis','paginas.id','=','perf__pagis.cod_pagina')
            ->where('cod_perf', Auth::user()->cod_perfil)
            ->join('menus','paginas.cod_menu','=', 'menus.id')
            ->select('nom_pagina', 'url')
            ->get();
        $pagina=Paginas::find($id);        
        return view('paginas.editar',compact('pagina','menus'));
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
        PerfPagis::destroy($id);        
        Session::flash('message','Pagina Eliminada Correctamente');
        return Redirect::to('/paginas');
    }
}

<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\DependenciasCreateRequest;
use CotizadorAF\Http\Requests\DependenciasUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Dependencias;
use Auth;
use DB;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class DependenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencias = Dependencias::paginate(5);
        return view('dependencias.index',compact('dependencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dependencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DependenciasCreateRequest $request)
    {
        Dependencias::create($request->all());
        Session::flash('message','Dependencia Creada Correctamente');
        return Redirect::to('/dependencias');
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
        $dependencia=Dependencias::find($id);        
        return view('dependencias.editar',compact('dependencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DependenciasUpdateRequest $request, $id)
    {
        $dependencia=Dependencias::find($id);
        $dependencia->fill($request->all());
        $dependencia->save();
        
        Session::flash('message','Dependencia Actualizada Correctamente');
        return Redirect::to('/dependencias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dependencias::destroy($id);
        Session::flash('message','Dependencia Eliminada Correctamente');
        return Redirect::to('/dependencias');
    }
}

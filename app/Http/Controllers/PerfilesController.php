<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\PerfilesCreateRequest;
use CotizadorAF\Http\Requests\PerfilesUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Perfiles;
use DB;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class PerfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfiles = Perfiles::All();
        return view('perfiles.index',compact('perfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerfilesCreateRequest $request)
    {
        Perfiles::create($request->all());
        Session::flash('message','Perfil Creada Correctamente');
        return Redirect::to('/perfiles');
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
        $perfil=Perfiles::find($id);        
        return view('perfiles.editar',['perfil'=>$perfil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PerfilesUpdateRequest $request, $id)
    {
        $perfil=Perfiles::find($id);
        $perfil->fill($request->all());
        $perfil->save();
        
        Session::flash('message','Perfil Actualizada Correctamente');
        return Redirect::to('/perfiles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perfiles::destroy($id);
        Session::flash('message','Perfil Eliminada Correctamente');
        return Redirect::to('/perfiles');
    }
}

<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\PerfilesCreateRequest;
use CotizadorAF\Http\Requests\PerfilesUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Perfiles;
use CotizadorAF\Perf_Pagi;
use CotizadorAF\Paginas;
use Auth;
use DB;
use Session;
use Redirect;
use Subquery;
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
        $perfiles = Perfiles::paginate(10);
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
        $perf=DB::table('perfiles')->where('nomperfil',$request['nomperfil'])->first(); 
        $paginas=Paginas::paginate(10);  
        return view('perf_pag.index',compact('perf','paginas'));
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
        return view('perfiles.editar',compact('perfil'));
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

        $checkVer = DB::table('perf__pagis as pp')
                ->selectRaw('count(pp.id)')->whereRaw('pp.cod_perf = '.$perfil->id.' and pp.cod_pagina=paginas.id and pp.ver = 1');

        $checkAct = DB::table('perf__pagis as pp')
                ->selectRaw('count(pp.id)')->whereRaw('pp.cod_perf = '.$perfil->id.' and pp.cod_pagina=paginas.id and pp.actualizar = 1');

        $checkEli = DB::table('perf__pagis as pp')
                ->selectRaw('count(pp.id)')->whereRaw('pp.cod_perf = '.$perfil->id.' and pp.cod_pagina=paginas.id and pp.eliminar = 1');

        $perf=DB::table('perfiles')->where('id',$perfil->id)->first(); 

        $paginas=Paginas::from('paginas')
                ->select('*',DB::raw('('.$checkVer->toSql().') as sCheckVer'),DB::raw('('.$checkAct->toSql().') as sCheckAct'),DB::raw('('.$checkEli->toSql().') as sCheckEli'))
                ->paginate(10);  
        
        return view('perf_pag.indexEdit',compact('perf','paginas'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perf_Pagi::where('cod_perf',$id)->delete();
        Perfiles::destroy($id);
        Session::flash('message','Perfil Eliminado Correctamente');
        return Redirect::to('/perfiles');
    }
}

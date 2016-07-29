<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\PerfPagisCreateRequest;
use CotizadorAF\Http\Requests\PerfPagisUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Perf_Pagi;
use Auth;
use DB;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class PerfPagisController extends Controller
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
        $perfiles = Perf_Pagi::All();
        return view('perfiles.index',compact('perfiles','menus'));
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
        return view('perfiles.create',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerfPagisCreateRequest $request)
    {
        if (isset($_POST['ver'])) {
            if (is_array($_POST['ver'])) {
                $selected = '';
                $num_countries = count($_POST['ver']);
                $current = 0;
                foreach ($_POST['ver'] as $key => $value) {
                    if ($current != $num_countries-1)
                        $selected .= $value.', ';
                    else
                        $selected .= $value.'.';
                    $current++;
                }
            }
            return '<div>Has seleccionado: '.$selected.'</div>';
        }
        //Perf_Pagi::create($request->all());
        //Session::flash('message','Permiso Creado Correctamente');
        //return Redirect::to('/perfiles');
        //return view('perf_pag.create');
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
        $perfil=Perf_Pagi::find($id);        
        return view('perfiles.editar',compact('perfil','menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PerfPagisUpdateRequest $request, $id)
    {
        $perfil=Perf_Pagi::find($id);
        $perfil->fill($request->all());
        $perfil->save();
        
        Session::flash('message','Permiso Actualizado Correctamente');
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
        Perf_Pagi::destroy($id);
        Session::flash('message','Permiso Eliminado Correctamente');
        return Redirect::to('/perfiles');
    }
}

<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\MenusCreateRequest;
use CotizadorAF\Http\Requests\MenusUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Menu;
use DB;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $menus = Menu::All();
        return view('menus.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenusCreateRequest $request)
    {
        Menu::create($request->all());
        Session::flash('message','Menu Creado Correctamente');
        return Redirect::to('/menus');
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
        $menu=Menu::find($id);        
        return view('menus.editar',['menu'=>$menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenusUpdateRequest $request, $id)
    {
        $menu=Menu::find($id);
        $menu->fill($request->all());
        $menu->save();
        
        Session::flash('message','Menu Actualizado Correctamente');
        return Redirect::to('/menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id);
        Session::flash('message','Menu Eliminado Correctamente');
        return Redirect::to('/menus');
    }
}

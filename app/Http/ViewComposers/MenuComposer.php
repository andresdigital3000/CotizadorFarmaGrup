<?php

namespace CotizadorAF\Http\ViewComposers;
use Illuminate\Support\Facades\Log;
use DB; 
use Auth;
use Cache;
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class MenuComposer
{

    public function managerMenus()
    {

        if (Auth::check()) {
            Log::info('En el compose del MenuComposer');
            
            if (!Cache::has('menus'.Auth::user()->id)) {
                $menusComposer = DB::table('paginas')
                ->join('perf__pagis','paginas.id','=','perf__pagis.cod_pagina')
                ->where('cod_perf', Auth::user()->cod_perfil)
                ->join('menus','paginas.cod_menu','=','menus.id')
                ->orderBy('orden','asc','orden_pag','asc')
                ->select('nom_menu','nom_pagina','url','menus.id')
                ->get();

                Log::info('MenuComposer - managerMenus - cargando de nuevo en Cache');
                $var = 'menus'.Auth::user()->id;
                Cache::put($var, $menusComposer, 60);
            }             
        }
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $this->managerMenus();
        $view->with('menus', Cache::get('menus'.Auth::user()->id));
    }


}
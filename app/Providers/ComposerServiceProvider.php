<?php

namespace CotizadorAF\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('usuario.create','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('usuario.index','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('usuario.editar','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('dependencias.create','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('dependencias.index','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('dependencias.editar','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('perfiles.create','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('perfiles.index','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('perfiles.editar','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('perf_pag.index','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('perf_pag.indexEdit','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('perf_pag.editar','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('paginas.create','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('paginas.index','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('paginas.editar','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('clientes.create','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('clientes.index','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('clientes.editar','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('proveedores.create','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('proveedores.index','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('proveedores.editar','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('productos.create','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('productos.index','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('productos.editar','CotizadorAF\Http\ViewComposers\MenuComposer');
        view()->composer('productos.plantillas','CotizadorAF\Http\ViewComposers\MenuComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

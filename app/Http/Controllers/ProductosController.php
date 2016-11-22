<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\ProductosCreateRequest;
use CotizadorAF\Http\Requests\ProductosUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Productos;
use CotizadorAF\Proveedor;
use Auth;
use DB;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class ProductosController extends Controller
{
    
    var $cod_tipo_producto = 6;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = DB::table('productos')
            ->join('deta_parametros','productos.clasfccion','=','deta_parametros.id')
            ->orderBy('descrpcion','asc')
            ->select('referencia','descrpcion','deta_parametro','precio_dolar','precio_euro','productos.id')
            ->paginate(10);

        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tipo_producto = DB::table('deta_parametros')
                   -> where('deta_parametros.cod_parametro','=',$this->cod_tipo_producto)
                   -> lists('deta_parametro','id');


        return view('productos.create', compact('tipo_producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductosCreateRequest $request)
    {
        Productos::create($request->all());
        Session::flash('message','Producto Creado Correctamente');
        return Redirect::to('/productos');
        //return ($request->all());
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
        $producto=Productos::find($id);        

        $prov=Proveedor::find($producto->codgo_prov);        

        $tipo_producto = DB::table('deta_parametros')
                   -> where('deta_parametros.cod_parametro','=',$this->cod_tipo_producto)
                   -> lists('deta_parametro','id');

        return view('productos.editar',compact('producto','tipo_producto','prov'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function plantillaEdit($id)
    {
        $prod=Productos::find($id);        

        return view('productos.plantillas',compact('prod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductosUpdateRequest $request, $id)
    {
        $producto=Productos::find($id);
        $producto->fill($request->all());
        $producto->save();

        $directorio="\Farma"."\Prueba.jpg";
        \Storage::disk('farma')->put($directorio, \File::get($request->plantlla_vtaplaza));

        Session::flash('message','Producto Actualizado Correctamente');
        return Redirect::to('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Productos::destroy($id);
        Session::flash('message','Producto Eliminado Correctamente');
        return Redirect::to('/productos');
    }
}

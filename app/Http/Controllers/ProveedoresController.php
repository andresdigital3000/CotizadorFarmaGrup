<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\ProveedoresCreateRequest;
use CotizadorAF\Http\Requests\ProveedoresUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Proveedor;
use Auth;
use DB;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::paginate(10);
        return view('proveedores.index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedoresCreateRequest $request)
    {
        Proveedor::create($request->all());
        Session::flash('message','Proveedor Creado Correctamente');
        return Redirect::to('/proveedores');
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
        $prov=Proveedor::find($id);        
        return view('proveedores.editar',compact('prov'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProveedoresUpdateRequest $request, $id)
    {
        $proveedor=Proveedor::find($id);
        $proveedor->fill($request->all());
        $proveedor->save();
        
        Session::flash('message','Proveedor Actuaizado Correctamente');
        return Redirect::to('/proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proveedor::destroy($id);
        Session::flash('message','Proveedor Elimiado Correctamente');
        return Redirect::to('/proveedores');
    }


    /**
     * Show the form for editing the specified resource.
     *
     */
    public function findById(Request $request)
    {
        $prov=Proveedor::find($request->codigo);     
        return response()->json($prov);
    }

    /**
     *
     *
     *
     */
    public function buscarProveedor(Request $request){
        
        $codigo=$request->codigo;
        $nit=$request->nit;
        $razonsocial=$request->razonsocial;        

        if ($codigo=='' && $nit=='' && $razonsocial==''){
            $proveedores = Proveedor::All(); 
        }else{
            $query = Proveedor::query();
            if($codigo!=''){
                $query = $query->where('id','like', '%'.$codigo.'%');
            }
            if($nit!=''){
                $query = $query->where('nit','=',$nit);
            }
            if($razonsocial!=''){
                $query = $query->where('razonsocial','like', '%'.$razonsocial.'%');
            }
            $proveedores = $query->get();
        }

        if ($proveedores == ''){
            Session::flash('message-error','No se encontraron proveedores');
        }

        return response()->json($proveedores);
    }
}

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
use CotizadorAF\Perfiles;
use CotizadorAF\Paginas;
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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerfPagisCreateRequest $request)
    {
        $ver=$request['ver'];
        $act=$request['act'];
        $eli=$request['eli'];

        $arrlengthver = count($ver);
        if($arrlengthver!=0){

            $this->recorrerVectores($request, $ver, $act, $eli, $arrlengthver);
            Session::flash('message','Perfil Creado Correctamente');
            return Redirect::to('/perfiles');
        }else{
            print '<script language="JavaScript">'; 
            print 'alert("Debe otorgar permisos");'; 
            print '</script>';
            $perf=DB::table('perfiles')->where('id',$request['id_perf'])->first(); 
            $paginas=Paginas::paginate(10);  
            return view('perf_pag.index',compact('perf','paginas'));
        }
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
     
        Perf_Pagi::where('cod_perf',$id)->delete();
        
        $ver=$request['ver'];
        $act=$request['act'];
        $eli=$request['eli'];
        $arrlengthver = count($ver);

        if($arrlengthver!=0){
            $this->recorrerVectores($request, $ver, $act, $eli, $arrlengthver);
            Session::flash('message','Perfil Editado Correctamente');
            return Redirect::to('/perfiles');
        }else{
            print '<script language="JavaScript">'; 
            print 'alert("Debe otorgar permisos");'; 
            print '</script>';
            // $menus = DB::table('paginas')
            // ->join('perf__pagis','paginas.id','=','perf__pagis.cod_pagina')
            // ->where('cod_perf', Auth::user()->cod_perfil)
            // ->join('menus','paginas.cod_menu','=', 'menus.id')
            // ->select('nom_pagina', 'url')
            // ->get();
            //Perfiles::create($request->all()); 
            $perf=DB::table('perfiles')->where('id',$id)->first(); 
            $paginas=Paginas::paginate(10);              
            return view('perf_pag.index',compact('perf','paginas'));
        }       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }


    public function recorrerVectores($request, $ver, $act, $eli, $arrlengthver)
    {
        
        for($x = 0; $x < $arrlengthver; $x++) {
            $mat[$x][0]=$request['id_perf'];
            $mat[$x][1]=$ver[$x];
            $mat[$x][2]=1;
        }

        $arrlengthact = count($act);
        if($arrlengthact==0){            
            foreach ($mat as $key => $valor){  
                $mat[$key][3]=0;
            }            
        }else{
            for($x = 0; $x < $arrlengthact; $x++) {
                foreach ($mat as $key => $value) {
                    if (in_array($act[$x],$value)){                
                        $mat[$key][3]=1;
                    }elseif (!isset($mat[$key][3])) {
                        $mat[$key][3]=0;
                    }
                }
            }
        }

        $arrlengtheli = count($eli);
        if($arrlengtheli==0){
            foreach ($mat as $key => $valor){  
                $mat[$key][4]=0;
            }
        }else{
            for($x = 0; $x < $arrlengtheli; $x++) {
                foreach ($mat as $key => $value) {
                    if (in_array($eli[$x],$value)){                    
                        $mat[$key][4]=1; 
                    }elseif (!isset($mat[$key][4])) {
                        $mat[$key][4]=0;
                    }
                }
            }    
        }
            
        foreach ($mat as $key => $valor){  
            Perf_Pagi::create([
                'cod_perf' => $mat[$key][0],
                'cod_pagina' => $mat[$key][1],
                'ver' => $mat[$key][2],
                'actualizar' => $mat[$key][3],
                'eliminar' => $mat[$key][4],
            ]);     
        }
    }

}

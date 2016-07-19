<?php

namespace CotizadorAF\Http\Controllers;

use Illuminate\Http\Request;
use CotizadorAF\Http\Requests;
use CotizadorAF\Http\Requests\UserCreateRequest;
use CotizadorAF\Http\Requests\UserUpdateRequest;
use CotizadorAF\Http\Controllers\Controller;
use CotizadorAF\Reportes;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class ReportesController extends Controller
{
    public function index(){
        return "HOLA DESDE EL INDEX DE LARAVELCONTROLLER";
    }

    public function create(){
        return "HOLA DESDE EL CREATE DE LARAAVELCONTROLLER";
    }

    public function store(){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update($id){

    }

    public function destroy($id){

    }
}

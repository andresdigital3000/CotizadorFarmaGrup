<?php

namespace Cotizador_Farmagroup\Http\Controllers;

use Illuminate\Http\Request;

use Cotizador_Farmagroup\Http\Requests;

class FrontController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(){
     	return view('contacto');   
    }
}

<?php

namespace CotizadorAF\Http\Controllers;

use CotizadorAF\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;
use Cache;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

    }
}

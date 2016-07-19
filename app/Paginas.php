<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Paginas extends Model
{
    protected $table= "paginas";

    protected $fillable = ['id','cod_menu','nom_pagina'];
}

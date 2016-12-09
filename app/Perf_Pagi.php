<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Perf_Pagi extends Model
{
    protected $table= "perf__pagis";

    protected $fillable = ['cod_perf','cod_pagina','ver','actualizar','eliminar'];
}

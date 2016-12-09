<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Dependencias extends Model
{
    protected $table= "dependencias";

    protected $fillable = ['dependencia'];
}

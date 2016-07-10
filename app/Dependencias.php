<?php

namespace Cotizador_Farmagroup;

use Illuminate\Database\Eloquent\Model;

class Dependencias extends Model
{
    protected $table= "Dependencias";

    protected $fillable = array('dependencia');
}

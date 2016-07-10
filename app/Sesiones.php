<?php

namespace Cotizador_Farmagroup;

use Illuminate\Database\Eloquent\Model;

class Sesiones extends Model
{
    protected $table= "sesiones";

    protected $fillable = array('usuario');
}

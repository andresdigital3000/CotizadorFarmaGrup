<?php

namespace Cotizador_Farmagroup;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = "empleados";

    protected $fillable = array('cedla','cod_perfil','cod_dependencia','nombre','extension','cargo','email','usuario','clave');
}

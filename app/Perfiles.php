<?php

namespace Cotizador_Farmagroup;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    protected $table= "perfiles";

    protected $fillable = array('nomperfil','nivel','tipo','nomtipo');
}

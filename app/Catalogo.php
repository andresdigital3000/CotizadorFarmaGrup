<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table= "catalogos";

    protected $fillable = ['catalogo','descripcion','medicion','operacion'];
}

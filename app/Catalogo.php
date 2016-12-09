<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

/**
  * Clase del modelo que representa una lista parametrizable.
  *
  * 
  */
class Catalogo extends Model
{
    protected $table= "catalogos";

    protected $fillable = ['catalogo','descripcion','medicion','operacion'];
}

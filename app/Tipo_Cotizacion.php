<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Tipo_Cotizacion extends Model
{
    protected $table= "tipo__cotizacions";

    protected $fillable = ['nom_tipo'];

}

<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Deta_Dato_Compuesto extends Model
{
    protected $table= "deta__dato__compuestos";

    protected $fillable = ['cod_dato_compuesto','cod_dato_basico','operacion','orden'];
}

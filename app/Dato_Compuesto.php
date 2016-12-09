<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Dato_Compuesto extends Model
{
    protected $table= "dato__compuestos";

    protected $fillable = ['dato_compuesto','descripcion'];
}

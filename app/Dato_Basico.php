<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Dato_Basico extends Model
{
    protected $table= "dato__basicos";

    protected $fillable = ['cod_tipo_dato','cod_catalogo','dato_basico','descripcion'];
}

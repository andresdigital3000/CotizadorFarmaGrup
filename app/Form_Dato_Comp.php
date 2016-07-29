<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Form_Dato_Comp extends Model
{
    protected $table= "form__dato__comps";

    protected $fillable = ['cod_formula','cod_dato_compuesto','operacion','orden'];
}

<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Formula_Proveedor extends Model
{
    protected $table= "formula__proveedors";

    protected $fillable = ['codgo_prov','cod_form_dato_comp','cod_dato_compuesto','cod_deta_dato_compuesto','cod_dato_basico','valor_numerico','valor_texto'];
}

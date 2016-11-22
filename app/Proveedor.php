<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table= "proveedors";

    protected $fillable = ['id','codigo','nit','razonsocial','ubccion','ciudad','pais','telfno','fax','email','contcto','nal_nit','bancarios_cc','bancarios_swiftcode','bancarios_refrnce','bancarios_tt','bancarios_estdo','moneda'];
}

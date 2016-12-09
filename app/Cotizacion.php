<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $table= "cotizacions";

    protected $fillable = ['id','codgo_cli','codgo_prov','fecha','refrncia','respnsble','venta','venta_fecha','cod_tipo_coti','cod_tipo_serv'];
}

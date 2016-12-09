<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table= "productos";

    protected $fillable = ['id','descrpcion','referencia','codgo_prov','clasfccion','plantlla_vtaplaza','plantlla_vtaimpprove','plantlla_calbrcion','plantlla_valdcion','plantlla_corrctvo','plantlla_mantnmiento','fotos','precio_dolar','precio_euro'];
}

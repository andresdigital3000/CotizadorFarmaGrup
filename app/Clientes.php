<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table= "clientes";

    protected $fillable = ['nit','razonsocial','ubccion','ciudad','pais','telfno','fax','fechaIngrso','caldad_contcto','caldad_tels','caldad_email','desrrllo_contcto','desrrllo_tels','desrrllo_email','prodccion_contcto','prodccion_tels','prodccion_email','planta_contcto','planta_tels','planta_email','compras_contcto','compras_tels','compras_email','estbldad_contcto','estbldad_tels','estbldad_email','mantnmiento_contcto','mantnmiento_tels','mantnmiento_email','tesrria_contcto','tesrria_tels','tesrria_email','otro_contcto','otro_tels','otro_email','reprsntntelegal','respnsbleamfar','ventas','mantnmiento','potencial'];
}

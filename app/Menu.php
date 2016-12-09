<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='menus';

    protected $fillable = ['id','nom_menu'];
}

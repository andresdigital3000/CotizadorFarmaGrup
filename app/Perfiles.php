<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    protected $table= "perfiles";

    protected $fillable = ['nomperfil','nivel','tipo','nomtipo'];
}

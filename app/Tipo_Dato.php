<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Tipo_Dato extends Model
{
    protected $table= "tipo__datos";

    protected $fillable = ['tipo_dato','simbolo'];

}

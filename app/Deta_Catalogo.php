<?php

namespace CotizadorAF;

use Illuminate\Database\Eloquent\Model;

class Deta_Catalogo extends Model
{
    protected $table= "deta__catalogos";

    protected $fillable = ['cod_catalogo','limite_inferior','limite_superior','valor','base'];
}

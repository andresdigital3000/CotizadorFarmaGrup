<?php

namespace CotizadorAF;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table='users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','cod_perfil','cod_dependencia','nombre','extension','cargo','email','name','password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($valor){
        if (!empty($valor)) {
            $this->attributes['password']=bcrypt($valor);
        }
    }
}

<?php

namespace CotizadorAF\Http\Controllers\Auth;

use CotizadorAF\User;
use Validator;
use CotizadorAF\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id' => 'required',
            'nombre' => 'required',
            'extension' => 'required',
            'cargo' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'name' => 'required|max:255|unique:users',
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'id' => $data['id'],
            'cod_perfil' => $data['cod_perfil'],
            'cod_dependencia' => $data['cod_dependencia'],
            'nombre' => $data['nombre'],
            'extension' => $data['extension'],
            'cargo' => $data['cargo'],
            'email' => $data['email'],
            'name' => $data['name'],
            'password' => $data['password'],
        ]);
    }
}

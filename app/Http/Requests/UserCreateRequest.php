<?php

namespace CotizadorAF\Http\Requests;

use CotizadorAF\Http\Requests\Request;

class UserCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required',
            'nombre' => 'required',
            'extension' => 'required',
            'cargo' => 'required',
            'email' => 'required|email|max:25|unique:users',
            'name' => 'required|max:15|unique:users',
            'password' => 'required|min:6',
            'password-confirm' => 'required|min:6',
        ];
    }
}

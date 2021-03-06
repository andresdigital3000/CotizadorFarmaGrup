<?php

namespace CotizadorAF\Http\Requests;

use CotizadorAF\Http\Requests\Request;

class ProveedoresCreateRequest extends Request
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
            'nit'=> 'required',
            'razonsocial'=> 'required',
            'ubccion'=> 'required',
            'ciudad'=> 'required',
            'pais'=> 'required',
            'telfno'=> 'required',
            'email' => 'required|email',            
            'contcto'=> 'required',
        ];
    }
}

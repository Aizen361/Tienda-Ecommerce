<?php

namespace laravel\Http\Requests;

use laravel\Http\Requests\Request;

class ClienteFormRequest extends Request
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
            'nombre' =>'required|alpha|max:50',
            'apellido_paterno' => 'required|alpha|max:50',
            'apellido_materno' => 'required|alpha|max:50',
            'calle' => 'required|alpha|max:50',
            'no' => 'required|numeric',
            'colonia' => 'required|alpha|max:50',
            'municipio' => 'required|alpha|max:50',
            'estado' => 'required|alpha|max:50',
            'cp' => 'required|numeric',
            'correo' => 'required|email|max:50',
          
            'telefono' => 'required|numeric'
            
        ];
      
    }
}

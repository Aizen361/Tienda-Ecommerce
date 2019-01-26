<?php

namespace laravel\Http\Requests;

use laravel\Http\Requests\Request;

class ProveedorFormRequest extends Request
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
        'name'=>'required|max:50',
        'calle'=>'required|max:50',
        'no'=>'required|integer',
        'colonia'=>'required|max:50',
        'municipio'=>'required',
        'estado'=>'required',
        'cp'=>'required|numeric',
        'email'=>'required|email',
        'password'=>'password',
        'telefono'=>'required|numeric',
      
        ];
    }
}

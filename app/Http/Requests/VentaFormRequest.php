<?php

namespace laravel\Http\Requests;

use laravel\Http\Requests\Request;

class VentaFormRequest extends Request
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
        'idCliente'=>'required',
        'id'=>'required',
        'fecha_pago'=>'required',
        'fecha_inicio'=>'required',
        'fecha_fin'=>'required',
        'Estado'=>'required|max:30'
        
        ];
    }
}

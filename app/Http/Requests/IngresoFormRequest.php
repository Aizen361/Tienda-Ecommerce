<?php

namespace laravel\Http\Requests;

use laravel\Http\Requests\Request;

class IngresoFormRequest extends Request
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
            'idProducto'=>'required',
            'precio_compra'=>'required',
            'fecha_compra',
            'tipo_pago'=>'required|max:20',
            'estado'=>'required'

        ];
    }
}

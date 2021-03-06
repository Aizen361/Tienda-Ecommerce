<?php

namespace laravel\Http\Requests;

use laravel\Http\Requests\Request;

class ProductoFormRequest extends Request
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
        'idCategoria'=>'required',
        'nombre'=>'required|max:50',
        'descripcion'=>'required|max:512',
        'imagen'=>'mimes:jpeg,bmp,png',
        'stock'=>'required|numeric',
        'costo_unitario'=>'required|numeric',
        'Unidad_de_medida'=>'required|max:20'
        ];
    }
}

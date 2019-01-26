<?php

namespace laravel\Http\Requests;

use laravel\Http\Requests\Request;

class RestauracionProveedorFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
        'nombre'=>'required|alpha|max:50',
        'descripcion'=>'required|string|max:512',
        'imagen'=>'mimes:jpeg,bmp,png,jpg',
        'stock'=>'required|numeric',
        'costo_unitario'=>'required|numeric',
        'unidad_de_medida'=>'required|alpha|max:20'
        ];
    }
}

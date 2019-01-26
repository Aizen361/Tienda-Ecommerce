<?php

namespace laravel\Http\Requests;

use laravel\Http\Requests\Request;

class RestauracionCategoriaFormRequest extends Request
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
            'idProveedor' =>'required',
            'nombre' => 'required|alpha|max:50',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedoresRequest extends FormRequest
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
            'nombre_proveedor' => ['required', 'string', 'max:255'],
            'numero_telefono' => ['nullable','max:10'],
            'rfc' => ['nullable','string', 'max:255'],
        ];
    }
    public function messages()
    {
        return [
            'nombre_proveedor.required' => 'El campo nombre proveedor es obligatorio',


        ];
    }
}

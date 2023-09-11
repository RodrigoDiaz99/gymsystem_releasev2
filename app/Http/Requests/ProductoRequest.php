<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
        $rules = [
            'codigo_barras' => ['required', 'string', 'max:255'],
            'nombre_producto' => ['required', 'string'],
            'precio_venta' => ['required'],

            'proveedores_id' => ['nullable'],
            'categoria_productos_id' => ['nullable'],
        ];


        return $rules;
    }

    public function messages()
    {
        return [
            'codigo_barras.required' => 'El campo codigo de barras es obligatorio',
            'nombre_producto.required' => 'El campo nombre del producto es obligatorio',

            'precio_venta.required' => 'El campo precio de venta es obligatorio',
            'estatus.required' => 'El campo estatus es obligatorio',


        ];
    }
}

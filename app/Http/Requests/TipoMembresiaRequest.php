<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoMembresiaRequest extends FormRequest
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
            'nombre_membresia' => ['required', 'string', 'max:255'],
            'precio' => ['required'],
            'descripcion_membresia' => ['required','string'],

            'dias_membresia' => ['required'],

        ];


        return $rules;
    }

    public function messages()
    {
        return [
            'nombre_membresia.required' => 'El campo nombre de la membresia es obligatorio',
            'precio.required' => 'El campo nombre de precio es obligatorio',

            'descripcion_membresia.required' => 'El campo precio de descripcion es obligatorio',
            'dias_membresia.required' => 'El campo dias de la membresia es obligatorio',


        ];
    }
}

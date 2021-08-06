<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|unique:products|max:150',
            // 'image' => 'required|dimensions:min_width=100,min_height=200',
            'sell_price' => 'required',
            'category_id' => 'required|exists:App\Category,id',
            'provider_id' => 'required|exists:App\Provider,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido.',
            'name.unique' => 'Ya se encuentra registrado este producto.',
            'name.max' => 'Solo se permite un máximo de 150 carácteres.',

            'image.required' => 'La imagen es requerida.',
            'image.dimensions' => 'Solo se permiten imagenes de 100x200 px.',

            'sell_price.required' => 'El precio es requerido.',

            'category_id.required' => 'Este campo es requerido.',
            'category_id.exists' => 'La categoría no existe.',

            'provider_id.required' => 'Este campo es requerido.',
            'provider_id.exists' => 'El proveedor no existe.',

        ];
    }
}
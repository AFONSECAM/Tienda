<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string|unique:providers,name,' . $this->route('provider')->id . 'max:100',
            'email' => 'required|email|unique:providers,email,' . $this->route('provider')->id . '',
            'ruc_number' => 'required|min:11|unique:providers,ruc_number,' . $this->route('provider')->id . '|max:11',
            'address' => 'nullable|string',
            'phone' => 'required|unique:providers,phone,' . $this->route('provider')->id . '|max:11'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido.',
            'name.string' => 'El valor no es correcto.',
            'name.max' => 'Solo se permiten 100 carácteres',

            'email.required' => 'Este campo es requerido',
            'email.email' => 'Debe ingresar un correo valido',
            'email.unique' => 'Ya se encuentra registrado este correo.',

            'ruc_number.required' => 'Este campo es requerido.',
            'ruc_number.min' => 'Se requiere al menos 11 carácteres.',
            'ruc_number.max' => 'Solo se permite un máximo de 11 carácteres.',
            'ruc_number.unique' => 'Ya se encuentra registrado.',

            'phone.required' => 'Este campo es requerido.',
            'phone.required' => 'Solo se permite un máximo de 11 carácteres.',
            'ruc_number.unique' => 'Ya se encuentra registrado.',
        ];
    }
}
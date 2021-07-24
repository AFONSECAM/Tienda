<?php

namespace App\Http\Requests\Client;

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
            'name' => 'string|required|max:100',
            'dni' => 'required|unique:clients,dni,' . $this->route('client')->id . '|max:11',
            'ruc' => 'nullable|string|unique:clients,ruc,' . $this->route('client')->id . '',
            'address' => 'nullable',
            'phone' => 'required|unique:clients,phone,' . $this->route('client')->id . '',
            'email' => 'required|email:rfc,dns|unique:clients,email,' . $this->route('client')->id . '',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'El valor no es correcto.',
            'name.required' => 'Este campo es requerido.',
            'name.max' => 'Solo se permiten 100 carácteres',

            'dni.required' => 'Este campo es requerido.',
            'dni.unique' => "Ya se encuentra registrado el DNI.",
            'dni.max' => 'Solo se permiten 11 carácteres',

            'ruc.unique' => 'Ya se encuentra registrado.',

            'phone.required' => 'Este campo es requerido.',
            'phone.unique' => 'Ya se encuentra registrado.',

            'email.required' => 'Este campo es requerido',
            'email.email' => 'Debe ingresar un correo valido',
            'email.unique' => 'Ya se encuentra registrado este correo.',
        ];
    }
}
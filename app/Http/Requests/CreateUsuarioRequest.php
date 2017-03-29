<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsuarioRequest extends FormRequest
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
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'cedula' => 'required|numeric|unique:usuario|min:4000000|max:99999999',
            'direccion' => 'required|max:1000',            
            'fecha' => 'required|max:10',            
            'genero' => 'required',            
        ];
    }

    public function messages()
    {
        return [
            'cedula.min' => 'El campo cedula ser mínimo a 7 dígitos ',
            'cedula.max' => 'El campo cedula ser máximo a 8 dígitos ',            
        ];
    }    

}

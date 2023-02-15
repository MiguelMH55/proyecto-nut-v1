<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'nombre' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required',
        'apellido' => 'required',
        'numdocumento' => 'required|unique:users,numdocumento',
        'tpdocumento' => 'required',
        'genero' => 'required',
        'direccion' => 'required',
        'fecha_nac'=>'required',
        'eps'=>'required',
        'telefono' => 'required',
        ];
    }
}

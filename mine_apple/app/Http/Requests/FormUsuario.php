<?php

namespace mine_apple\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormUsuario extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'     => 'required|string|email|max:255|unique:usuario',
            'password'  => 'required|string|min:8',
        ];
    }

    public function messages()
    {
        return [
            'email'     => 'Erro no campo: Email',
            'password'  => 'Erro no campo: Senha',
        ];
    }
}

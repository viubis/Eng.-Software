<?php

namespace mine_apple\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FormConsumidor extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'          => 'required|string|min:1|max:255',
            'sobrenome'     => 'required|string|min:1|max:255',
            'cpf'           => 'required|string|min:14|max:14',
            'telefone'      => 'required|string|min:14|max:15',
            'sexo'          => ['required', Rule::in('m', 'f')],
        ];
    }

    public function messages()
    {
        return [
            'nome'          => 'Erro no campo: Nome',
            'sobrenome'     => 'Erro no campo: Sobrenome',
            'cpf'           => 'Erro no campo: CPF',
            'telefone'      => 'Erro no campo: Telefone',
            'sexo'          => 'Erro no campo: Sexo',
        ];
    }
}

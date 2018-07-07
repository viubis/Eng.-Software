<?php

namespace mine_apple\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'cpf'           => 'required|formato_cpf',
            'telefone'      => 'required|telefone_com_ddd',
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

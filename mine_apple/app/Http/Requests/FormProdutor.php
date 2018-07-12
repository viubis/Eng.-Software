<?php

namespace mine_apple\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FormProdutor extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'razaoSocial'   => 'required|string|min:1|max:255',
            'cnpj'          => 'required|string|min:18|max:18',
            'nomeFantasia'  => 'required|string|min:1|max:255',
            'telefone'      => 'required|string|min:14|max:15',
            'raioEntrega'   => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'razaoSocial'   => 'Erro no campo: Razão Social',
            'cnpj'          => 'Erro no campo: CNPJ',
            'nomeFantasia'  => 'Erro no campo: Nome Fantasia',
            'telefone'      => 'Erro no campo: Telefone',
            'raioEntrega'   => 'Erro no campo: Raio de entrega',
        ];
    }
}

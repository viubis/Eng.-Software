<?php

namespace mine_apple\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'cnpj'          => 'required|cnpj',
            'nomeFantasia'  => 'required|string|min:1|max:255',
            'telefone'      => 'required|telefone_com_ddd',
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

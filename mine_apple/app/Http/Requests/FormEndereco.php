<?php

namespace mine_apple\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormEndereco extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'numero_cep'    => 'required|formato_cep', //Vai ter que usar um web service porque é muito importante p/ cálculos
            'rua'           => 'required|string|string|min:1|max:255',
            'numero'        => 'required|integer',
            'bairro'        => 'required|string|min:1|max:255',
            'complemento'   => 'required|string|min:1|max:255',
        ];
    }

    public function messages()
    {
        return [
            'numero_cep'    => 'Erro no campo: CEP',
            'rua'           => 'Erro no campo: Rua',
            'numero'        => 'Erro no campo: Número',
            'bairro'        => 'Erro no campo: Bairro',
            'complemento'   => 'Erro no campo: Complemento',
        ];
    }
}

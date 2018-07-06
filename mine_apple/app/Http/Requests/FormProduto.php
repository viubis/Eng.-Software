<?php

namespace mine_apple\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormProduto extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'              => 'required|string|min:1|max:255',
            'descricao'         => 'required|string|min:1|max:255',
            'valor'             => 'required|numeric',
            'minPorAssinatura'  => 'required|integer',
            'maxPorDia'         => 'required|integer',
            'freteMax'          => 'required|numeric',
            'seg'               => 'required|boolean',
            'ter'               => 'required|boolean',
            'qua'               => 'required|boolean',
            'qui'               => 'required|boolean',
            'sex'               => 'required|boolean',
            'sab'               => 'required|boolean',
            'dom'               => 'required|boolean',
            'imagens'           => 'required|array',
        ];
    }

    public function messages()
    {
        return [
            'nome'              => 'Erro no campo: Nome',
            'descricao'         => 'Erro no campo: Descrição',
            'valor'             => 'Erro no campo: Valor',
            'minPorAssinatura'  => 'Erro no campo: Mínimo por assinatura',
            'maxPorDia'         => 'Erro no campo: Máximo por dia',
            'freteMax'          => 'Erro no campo: Frete máximo',
            'seg'               => 'Erro no campo: Seg',
            'ter'               => 'Erro no campo: Ter',
            'qua'               => 'Erro no campo: Qua',
            'qui'               => 'Erro no campo: Qui',
            'sex'               => 'Erro no campo: Sex',
            'sab'               => 'Erro no campo: Sab',
            'dom'               => 'Erro no campo: Dom',
            'imagens'           => 'Erro ao carregar as imagens',
        ];
    }
}

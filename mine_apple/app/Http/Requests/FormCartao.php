<?php

namespace mine_apple\Http\Requests;

use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use Illuminate\Foundation\Http\FormRequest;

class FormCartao extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'titular'           => 'required|string|min:1|max:255',
            'numero_cartao'     => ['required', new CardNumber],
            'codigo'            => ['required', new CardCvc($this->get('codigo'))],
            'validade'          => 'required|date_format:d/m',
        ];
    }

    public function messages()
    {
        return [
            'titular'           => 'Erro no campo: Titular',
            'numero_cartao'     => 'Erro no campo: Número do cartão',
            'codigo'            => 'Erro no campo: Código',
            'validade'          => 'Erro no campo: Validade',
        ];
    }
}

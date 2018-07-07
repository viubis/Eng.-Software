<?php

namespace mine_apple\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormConta extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'agencia'       => 'required|interger',
            'numero'        => 'required|interger',
            'digito'        => 'required|digits_between:0,9',
        ];
    }

    public function messages()
    {
        return [
            'agencia'       => 'Erro no campo: Agência',
            'numero'        => 'Erro no campo: Número',
            'digito'        => 'Erro no campo: Dígito',
        ];
    }
}

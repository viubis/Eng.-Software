<?php

namespace mine_apple\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAvaliacao extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nota'          => 'required|digits_between:0,5',
            'comentario'    => 'string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nota'          => 'Erro no campo: Nota',
            'comentario'    => 'Erro no campo: Comentário',
        ];
    }
}

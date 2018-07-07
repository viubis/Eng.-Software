<?php

namespace mine_apple\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAssinatura extends FormRequest
{

    //A definir
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

        ];
    }

    public function messages()
    {
        return [

        ];
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $tabela = 'endereco';
    protected$campos = [
    	'id',
        'Cep',
        'rua',
        'numero',
        'complemento',
        'Bairro'
    ];


}

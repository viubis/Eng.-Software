<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtor extends Model
{
    protected $tabela = 'produtor';
    protected$campos = [
    	'id',
        'idEndereco',
        'cnpj',
        'nomeFantasia',
        'razaoSocial',
        'telefone',
        'raioEntrega',
        'acesso'
    ];
}

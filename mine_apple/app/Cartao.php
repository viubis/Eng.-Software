<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    protected $tabela = 'cartao';
    protected$campos = [
    	'numero',
        'titular',
        'validade',
        'codigo',
        'credito',
        'bandeira'
    ];
}

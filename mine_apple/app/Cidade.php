<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $tabela = 'cidade';
    protected$campos = [
    	'idCidade',
        'nome',
        'sigla'
    ];
}

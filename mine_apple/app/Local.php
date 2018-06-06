<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $tabela = 'local';
    protected$campos = [
    	'Cep',
        'idCidade',
        'idEstado'
    ];
}

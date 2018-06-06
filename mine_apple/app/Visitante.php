<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    protected $tabela = 'visitante';
    protected$campos = [
    	'idVisitante',
    	'idCarrinho'
    ];
}

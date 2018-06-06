<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $tabela = 'log';
    protected $campos = [
    	'id',
    	'idUsuario',
    	'data',
    	'hora',
    	'operacao'
    ];
}
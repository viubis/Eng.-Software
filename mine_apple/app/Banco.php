<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $tabela = 'banco';
    protected$campos = [
    	'id',
    	'nome'
    ];
}

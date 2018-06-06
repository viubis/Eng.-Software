<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $tabela = 'administrador';
    protected$campos = [
    	'id',
    	'nome'
    ];
}

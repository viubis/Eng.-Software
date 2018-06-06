<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $tabela = 'categoria';
    protected$campos = [
    	'id',
    	'nome'
    ];
}

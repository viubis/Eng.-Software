<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $tabela = 'foto';
    protected$campos = [
    	'id',
    	'idProduto',
    	'path'
    ];
}

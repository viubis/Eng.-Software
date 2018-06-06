<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $tabela = 'conta';
    protected$campos = [
    	'id',
    	'idBanco',
    	'numero',
    	'agencia',
    	'digito',
    	'produtor_id'
    ];
}

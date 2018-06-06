<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $tabela = 'avaliacao';
    protected$campos = [
    	'idAssinatura',
        'nota',
        'comentario'
    ];
}

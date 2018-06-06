<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $tabela = 'estado';
    protected$campos = [
    	'idEstado',
        'nome',
        'Sigla'
    ];
}

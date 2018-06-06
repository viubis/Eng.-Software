<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    protected $tabela = 'entrega';
    protected$campos = [
    	'id',
        'seg',
        'ter',
        'qua',
        'qui',
        'sex',
        'sab'
    ];
}

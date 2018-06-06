<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    protected $tabela = 'assinatura';
    protected$campos = [
    	'id',
        'idCompra',
        'produtor_id',
        'status',
        'valor',
        'notaFiscal'
    ];
}

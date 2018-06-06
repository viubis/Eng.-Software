<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $tabela = 'compra';
    protected$campos = [
    	'id',
        'idConsumidor',
        'idEndereco',
        'data',
        'valor_Total',
        'valor_Frete'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $tabela = 'pagamento';
    protected$campos = [
    	'id',
        'idAssinatura',
        'data',
        'hora',
        'cartao_numero',
        'valor_Pago'
    ];
}

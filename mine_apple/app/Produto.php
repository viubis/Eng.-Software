<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $tabela = 'produto';
    protected$campos = [
    	'id',
        'idProdutor',
        'idCategoria',
        'nome',
        'descricao',
        'valor',
        'minPorAssinatura',
        'prodPorDia',
        'freteMax',
        'entrega_id'
    ];
}

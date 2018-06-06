<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoAssinatura extends Model
{
    protected $tabela = 'produto_assinatura';
    protected$campos = [
    	'idProduto',
        'idAssinatura',
        'idEntrega',
        'quantidade',
        'frequencia'
    ];
}

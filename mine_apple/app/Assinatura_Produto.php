<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Assinatura_Produto extends Model
{
    protected $table = 'assinatura_produto';
    protected $primaryKey = ['assinatura_id', 'compra_id', 'consumidor_id', 'produto_id', 'categoria_id', 'produtor_id'];
    public $timestamps = false;
}

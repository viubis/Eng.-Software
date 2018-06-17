<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Assinatura_Produto extends Model
{
    protected $table = 'assinatura_produto';
    protected $primaryKey = ['assinatura_id', 'produto_id'];
    public $timestamps = false;
}

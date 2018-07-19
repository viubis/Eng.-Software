<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Assinatura_Produto extends Model
{
    protected $table = 'assinatura_produto';
    //protected $primaryKey = ['assinatura_id', 'produto_id'];
    protected $fillable = ['assinatura_id', 'produto_id', 'quantidade', 'frequencia', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab', 'dom'];
    public $timestamps = false;

    public function assinatura()
    {
        return $this->belongsTo('mine_apple\Assinatura', 'asssinatura_id');
    }

    public function produto()
    {
        return $this->belongsTo('mine_apple\Produto', 'produto_id');
    }
}

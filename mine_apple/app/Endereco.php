<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'endereco';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function consumidor()
    {
        return $this->belongsTo('mine_apple\Consumidor', 'consumidor_id', 'usuario_id');
    }

    public function cep()
    {
        return $this->belongsTo('mine_apple\Cep', 'cep_id');
    }

    public function compras()
    {
        return $this->hasMany('mine_apple\Compra', 'endereco_id');
    }
}

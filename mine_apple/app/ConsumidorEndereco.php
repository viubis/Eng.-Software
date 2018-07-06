<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class ConsumidorEndereco extends Model
{
    protected $table = 'consumidor_endereco';
    protected $fillable = ['consumidor_id', 'endereco_id'];
    public $timestamps = false;

    public function consumidor()
    {
        return $this->belongsTo('mine_apple\Consumidor', 'consumidor_id');
    }

    public function endereco()
    {
        return $this->belongsTo('mine_apple\Endereco', 'endereco_id');
    }

    public function compras()
    {
        return $this->hasMany('mine_apple\Compra', 'consumidor_endereco_id');
    }
}

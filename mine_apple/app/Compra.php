<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compra';
    protected $fillable = ['consumidor_endereco_id', 'data', 'hora', 'valor', 'frete', 'consumidor_id'];
    public $timestamps = false;

    public function consumidorEndereco()
    {
        return $this->belongsTo('mine_apple\ConsumidorEndereco', 'consumidor_endereco_id');
    }

    public function assinaturas()
    {
        return $this->hasMany('mine_apple\Assinatura', 'compra_id');
    }

    public function consumidor(){
        return $this->hasOne('mine_apple\Consumidor', 'consumidor_id');
    }
}

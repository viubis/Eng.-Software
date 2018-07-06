<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model 
{
    protected $table = 'compra';
    protected $fillable = ['consumidor_endereco_id', 'data', 'hora', 'valor', 'frete'];
    public $timestamps = false;

    public function consumidorEndereco()
    {
        return $this->belongsTo('mine_apple\ConsumidorEndereco', 'consumidor_endereco_id');
    }

    public function assinaturas()
    {
        return $this->hasMany('mine_apple\Assinatura', 'compra_id');
    }
}

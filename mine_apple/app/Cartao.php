<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model 
{
    protected $table = 'cartao';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function pagamentos() {
    	return $this->hasMany('App/Pagamento', 'foreign_key');
    }

    public function consumidor() {
    	return $this->hasMany('App/Consumidor', 'cartaoConsumidor', 'idConsumidor', 'cartao_numero');
    }
}

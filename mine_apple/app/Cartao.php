<?php namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model {

    protected $tabel = 'cartao';
    protected $primaryKey = 'numero';
    public $timestamps = false
    protected $guarded = [];

    public function pagamentos() {
    	return $this->hasMany('App/Pagamento', 'foreign_key');
    }

    public function consumidor() {
    	return $this->hasMany('App/Consumidor', 'cartaoConsumidor', 'idConsumidor', 'cartao_numero');
    }

}

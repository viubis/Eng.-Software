<?php namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model {

    protected $tabel = 'compra';
    public $timestamps = false
    protected $guarded = ['id'];

    public function consumidor() {
    	return $this->hasOne('App/Consumidor', 'foreign_key');
    }

    public function assinatura() {
    	return $this->hasMany('App/Assinatura', 'foreign_key');
    }

    public function endereco() {
    	return $this->hasOne('App/Endereco', 'foreign_key');
    }

}

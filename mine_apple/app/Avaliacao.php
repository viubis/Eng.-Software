<?php namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model {

    protected $tabel = 'avaliacao';
    protected $primaryKey = 'idAssinatura';
    public $timestamps = false
    protected $guarded = [];

    public function assinatura() {
    	return $this->hasOne('App/Assinatura', 'foreign_key');
    }

}

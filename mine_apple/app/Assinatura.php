<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model 
{
    protected $table = 'assinatura';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function produtor() {
    	return $this->hasOne('App/Pordutor', 'foreign_key');
    }

    public function compra() {
    	return $this->hasOne('App/Compra', 'foreign_key');
    }

    public function pagamento() {
    	return $this->hasMany('App/Pagamento', 'foreign_key');
    }

    public function avaliacao() {
    	return $this->hasMany('App/Avaliacao', 'foreign_key');
    }	
}

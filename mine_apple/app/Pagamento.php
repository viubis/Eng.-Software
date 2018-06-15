<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model 
{
    protected $table = 'pagamento';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function cartao() {
    	return $this->hasOne('App/Cartao', 'foreign_key');
    }

    public function assinatura() {
    	return $this->hasOne('App/Assinatura', 'foreign_key');
    }
}
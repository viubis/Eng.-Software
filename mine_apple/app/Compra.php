<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model 
{
    protected $table = 'compra';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function endereco()
    {
        return $this->belongsTo('mine_apple\Endereco', 'endereco_id');
    }

    public function assinaturas()
    {
        return $this->hasMany('mine_apple\Assinatura', 'compra_id');
    }
}

<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model 
{
    protected $table = 'assinatura';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function compra()
    {
        return $this->belongsTo('mine_apple\Compra', 'compra_id');
    }

    public function produtor()
    {
        return $this->belongsTo('mine_apple\Produtor', 'produtor_id');
    }

    public function pagamentos()
    {
        return $this->hasMany('mine_apple\Pagamento', 'assinatura_id');
    }

    public function avaliacao()
    {
        return $this->hasOne('mine_apple\Avaliacao', 'assinatura_id');
    }

    public function produtos()
    {
        return $this->hasMany('mine_apple\Assinatura_Produto', 'assinatura_id');
    }
}

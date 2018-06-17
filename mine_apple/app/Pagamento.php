<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model 
{
    protected $table = 'pagamento';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function assinatura()
    {
        return $this->belongsTo('mine_apple\Assinatura', 'assinatura_id');
    }

    public function cartao()
    {
        return $this->belongsTo('mine_apple\Cartao', 'cartao_id');
    }
}

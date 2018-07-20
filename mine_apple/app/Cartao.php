<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Cartao extends Model 
{
    protected $table = 'cartao';
    protected $fillable = ['consumidor_id', 'numero', 'titular', 'validade', 'codigo'];
    public $timestamps = false;

    public function getNumeroAttribute($numero)
    {
        return Crypt::decryptString($numero);
    }

    public function setNumeroAttribute($numero)
    {
        $this->attributes['numero'] = Crypt::encryptString($numero);
    }

    public function getCodigoAttribute($codigo)
    {
        return Crypt::decryptString($codigo);
    }

    public function setCodigoAttribute($codigo)
    {
        $this->attributes['codigo'] = Crypt::encryptString($codigo);
    }

    public function consumidor()
    {
        return $this->belongsTo('mine_apple\Consumidor', 'consumidor_id', 'usuario_id');
    }

    public function pagamentos()
    {
        return $this->hasMany('mine_apple\Pagamento', 'cartao_id');
    }
}

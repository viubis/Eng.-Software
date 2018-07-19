<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Financa extends Model
{
    protected $table = 'Financa';
    protected $primaryKey = 'usuario_id';
    protected $fillable = ['usuario_id', 'saldo_disponivel', 'valor_a_receber'];
    public $timestamps = false;

    public function produtor()
    {
        return $this->hasOne('mine_apple\Produtor', 'usuario_id');
    }
}

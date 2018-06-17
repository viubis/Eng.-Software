<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Consumidor extends Model
{
    protected $table = 'consumidor';
    protected $primaryKey = 'usuario_id';
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('mine_apple\Usuario', 'usuario_id');
    }

    public function enderecos()
    {
        return $this->hasMany('mine_apple\Endereco', 'consumidor_id');
    }

    public function cartoes()
    {
        return $this->hasMany('mine_apple\Cartao', 'consumidor_id');
    }
}

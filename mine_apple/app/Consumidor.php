<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Consumidor extends Model
{
    protected $table = 'consumidor';
    protected $primaryKey = 'usuario_id';
    protected $fillable = ['usuario_id', 'cpf', 'nome', 'sobrenome', 'sexo', 'telefone', 'acesso'];
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('mine_apple\User');
    }

    public function consumidorEndereco()
    {
        return $this->hasMany('mine_apple\ConsumidorEndereco', 'consumidor_id');
    }

    public function cartoes()
    {
        return $this->hasMany('mine_apple\Cartao', 'consumidor_id');
    }
}

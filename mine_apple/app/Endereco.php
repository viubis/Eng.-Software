<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'endereco';
    protected $guarded = ['cidade_id', 'numero_cep', 'rua', 'numero', 'complemento', 'bairro'];
    public $timestamps = false;

    public function consumidorEndereco()
    {
        return $this->hasOne('mine_apple\ConsumidorEndereco', 'endereco_id');
    }

    public function produtor()
    {
        return $this->hasOne('mine_apple\Produtor', 'endereco_id');
    }


    public function cidade()
    {
        return $this->belongsTo('mine_apple\Cidade', 'cidade_id');
    }
}

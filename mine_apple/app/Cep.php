<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Cep extends Model
{
    protected $table = 'cep';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function enderecos()
    {
        return $this->hasMany('mine_apple\Endereco', 'cep_id');
    }

    public function cidade()
    {
        return $this->belongsTo('mine_apple\Cidade', 'cidade_id');
    }
}

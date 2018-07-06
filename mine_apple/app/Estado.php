<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';
    protected $fillable = ['nome', 'sigla'];
    public $timestamps = false;

    public function cidades()
    {
        return $this->hasMany('mine_apple\Cidade', 'estado_id');
    }
}

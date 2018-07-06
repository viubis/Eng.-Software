<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'cidade';
    protected $fillable = ['estado_id', 'nome'];
    public $timestamps = false;

    public function estado() {
        return $this->belongsTo('mine_apple\Estado', 'estado_id');
    }

    public function ceps()
    {
        return $this->hasMany('mine_apple\Cep', 'cidade_id');
    }
}

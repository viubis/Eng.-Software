<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Operacao extends Model
{
    protected $table = 'operacao';
    protected $fillable = ['nome'];
    public $timestamps = false;

    public function logs()
    {
        return $this->hasMany('mine_apple\Log', 'operacao_id');
    }
}

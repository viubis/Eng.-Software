<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $table = 'banco';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function contas()
    {
        return $this->hasMany('mine_apple\Conta', 'banco_id');
    }
}

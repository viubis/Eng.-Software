<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Embalagem extends Model
{
    protected $table = 'embalagem';
    protected $fillable = ['tipo'];
    public $timestamps = false;

    public function produtos()
    {
        return $this->hasMany('mine_apple\Produto', 'embalagem_id');
    }
}

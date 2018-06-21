<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Embalagem extends Model
{
    protected $table = 'embalagem';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function produto()
    {
        return $this->hasMany('mine_apple\Produto', 'embalagem_id');
    }
}

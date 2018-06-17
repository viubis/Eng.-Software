<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'cidade';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function ceps()
    {
        return $this->hasMany('mine_apple\Cidade', 'cidade_id');
    }
}

<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $fillable = ['nome'];
    public $timestamps = false;

    public function produtos()
    {
        return $this->hasMany('mine_apple\Produto', 'categoria_id');
    }
}

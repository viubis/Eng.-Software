<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'foto';
    protected $fillable = ['produto_id', 'path'];
    public $timestamps = false;

    public function produto()
    {
        return $this->belongsTo('mine_apple\Produto', 'produto_id');
    }
}

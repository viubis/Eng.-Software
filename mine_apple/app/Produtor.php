<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Produtor extends Model
{
    protected $table = 'produtor';
    public $timestamps = false;

    public function usuario()
    {
    return $this->belongsTo( related: 'mine_apple/Usuario', foreignKey: 'id');
    }
}

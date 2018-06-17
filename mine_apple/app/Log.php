<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('mine_apple\Usuario', 'usuario_id');
    }
}

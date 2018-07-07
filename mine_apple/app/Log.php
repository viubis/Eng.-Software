<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log';
    protected $fillable = ['usuario_id', 'data', 'hora', 'operacao'];
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('mine_apple\User', 'usuario_id');
    }
}

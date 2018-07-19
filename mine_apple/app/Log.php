<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log';
    protected $fillable = ['usuario_id', 'data', 'hora', 'operacao_id'];
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('mine_apple\User', 'usuario_id');
    }

    public function operacao()
    {
    	return $this->hasOne('mine_apple\Operacao', 'operacao_id');
    }
}

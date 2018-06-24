<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administrador';
    protected $primaryKey = 'usuario_id';
    protected $fillable = ['usuario_id', 'nome'];
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('mine_apple\User');
    }
}

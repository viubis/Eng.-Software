<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function getSenhaAttribute($senha)
    {
        return Crypt::decryptString($senha);
    }

    public function setSenhaAttribute($senha)
    {
        $this->attributes['senha'] = Crypt::encryptString($senha);
    }

    public function administrador()
    {
        return $this->hasOne('mine_apple\Administrador', 'usuario_id');
    }

    public function consumidor()
    {
        return $this->hasOne('mine_apple\Consumidor', 'usuario_id');
    }

    public function produtor()
    {
        return $this->hasOne('mine_apple\Produtor', 'usuario_id');
    }

    public function log()
    {
        return $this->hasMany('mine_apple\Log', 'usuario_id');
    }
}

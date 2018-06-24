<?php

namespace mine_apple;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario';
    protected $fillable = ['email', 'password'];
    protected $hidden = ['remember_token'];
    public $timestamps = false;


    /*public function getPasswordAttribute($password) {
        return Crypt::decryptString($password);
    }

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Crypt::encryptString($password);
    }*/

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

    public function logs()
    {
        return $this->hasMany('mine_apple\Log', 'usuario_id');
    }

}

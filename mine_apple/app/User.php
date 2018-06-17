<?php

namespace mine_apple;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Crypt;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['remember_token'];

    public function getPasswordAttribute($password) {
        return Crypt::decryptString($password);
    }

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Crypt::encryptString($password);
    }
}

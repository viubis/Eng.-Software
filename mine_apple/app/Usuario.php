<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $guarded = ['id'];
    public $timestamps = false;
}

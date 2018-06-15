<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administrador';
    protected $guarded = ['id'];
    public $timestamps = false;
}

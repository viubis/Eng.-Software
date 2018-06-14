<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $table = 'conta';
    protected $guarded = ['id'];
    public $timestamps = false;
}

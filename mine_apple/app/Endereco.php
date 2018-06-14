<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'endereco';
    protected $guarded = ['id'];
    public $timestamps = false;
}

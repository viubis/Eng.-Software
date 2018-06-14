<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $guarded = ['id'];
    public $timestamps = false;
}

<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $guarded = ['id'];
    public $timestamps = false;
}

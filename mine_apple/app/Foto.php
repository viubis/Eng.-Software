<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'foto';
    protected $guarded = ['id'];
    public $timestamps = false;
}

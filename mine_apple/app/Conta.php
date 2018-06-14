<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $table = 'conta';
    protected $guarded = ['id'];
    public $timestamps = false;
}

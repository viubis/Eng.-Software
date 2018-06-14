<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cep extends Model
{
    protected $table = 'cep';
    protected $guarded = ['id'];
    public $timestamps = false;
}

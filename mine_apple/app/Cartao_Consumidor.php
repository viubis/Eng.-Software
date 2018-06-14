<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao_Consumidor extends Model
{
    protected $table = 'cartao_consumidor';
    protected $primaryKey = ['cartao_id', 'consumidor_id'];
    public $timestamps = false;
}

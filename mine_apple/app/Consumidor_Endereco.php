<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Consumidor_Endereco extends Model
{
    protected $table = 'consumidor_endereco';
    protected $primaryKey = ['consumidor_id', 'endereco_id'];
    public $timestamps = false;
}

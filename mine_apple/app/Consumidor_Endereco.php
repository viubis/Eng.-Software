<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumidor_Endereco extends Model
{
    protected $table = 'consumidor_endereco';
    protected $primaryKey = ['consumidor_id', 'endereco_id', 'cep_id', 'cidade_id', 'estado_id'];
    public $timestamps = false;
}

<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model 
{
    protected $table = 'avaliacao';
    protected $primaryKey = ['assinatura_id'];
    public $timestamps = false;
}

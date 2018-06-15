<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model 
{
    protected $table = 'assinatura';
    protected $guarded = ['id'];
    public $timestamps = false;
}

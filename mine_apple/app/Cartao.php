<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model 
{
    protected $table = 'cartao';
    protected $guarded = ['id'];
    public $timestamps = false;
}

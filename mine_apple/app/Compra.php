<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model 
{
    protected $table = 'compra';
    protected $guarded = ['id'];
    public $timestamps = false;
}

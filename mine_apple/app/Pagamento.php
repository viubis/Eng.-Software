<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model 
{
    protected $table = 'pagamento';
    protected $guarded = ['id'];
    public $timestamps = false;
}

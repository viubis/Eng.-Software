<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function usuario ()
    {
      return $this->belongsTo( related: 'mine_apple/Usuario', foreignKey: 'id');
    }

}

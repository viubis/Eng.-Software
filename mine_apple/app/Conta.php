<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $table = 'conta';
    protected $fillable = ['banco_id', 'produtor_id', 'numero', 'agencia', 'digito'];
    protected $guarded = ['id'];
    public $timestamps = false;

    public function banco()
    {
        return $this->belongsTo('mine_apple\Banco', 'banco_id');
    }

    public function produtor()
    {
        return $this->belongsTo('mine_apple\Produtor', 'produtor_id');
    }
}

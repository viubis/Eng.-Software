<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $table = 'conta';
    protected $fillable = ['produtor_id','banco_id', 'numero', 'agencia', 'digito'];
    protected $guarded = ['id'];
    public $timestamps = false;

    public function getNumeroAttribute($numero)
    {
        return \Crypt::decryptString($numero);
    }

    public function setNumeroAttribute($numero)
    {
        $this->attributes['numero'] = \Crypt::encryptString($numero);
    }

    public function banco()
    {
        return $this->belongsTo('mine_apple\Banco', 'banco_id');
    }

    public function produtor()
    {
        return $this->belongsTo('mine_apple\Produtor', 'produtor_id');
    }
}

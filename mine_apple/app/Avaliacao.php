<?php 

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model 
{
    protected $table = 'avaliacao';
    protected $primaryKey = ['assinatura_id'];
    protected $fillable = ['assinatura_id', 'nota', 'comentario'];
    public $timestamps = false;

    public function assinatura()
    {
        return $this->belongsTo('mine_apple\Assinatura', 'assinatura_id');
    }
}

<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class financas extends Model
{
    protected $table = 'financas';
    protected $primaryKey = 'produtor_id';
    protected $fillable = ['produtor_id', 'saldo_disponivel', 'valor_a_receber'];
    public $timestamps = false;

    public function financasProdutor()
    {
        return $this->hasOne('mine_apple\Produtor', "produtor_id");
    }

}

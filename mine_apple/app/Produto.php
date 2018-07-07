<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $fillable = ['produtor_id', 'categoria_id', 'embalagem_id', 'nome', 'descricao', 'valor', 'minPorAssinatura',
                            'maxPorDia', 'freteMax', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab', 'dom'];
    public $timestamps = false;

    public function produtor()
    {
        return $this->belongsTo('mine_apple\Produtor', 'produtor_id');
    }

    public function categoria()
    {
        return $this->belongsTo('mine_apple\Categoria', 'categoria_id');
    }

    public function embalagem()
    {
        return $this->belongsTo('mine_apple\Embalagem', 'embalagem_id');
    }

    public function fotos()
    {
        return $this->hasMany('mine_apple\Foto', 'produto_id');
    }

    public function assinaturas()
    {
        return $this->hasMany('mine_apple\Assinatura_Produto', 'produto_id');
    }
}

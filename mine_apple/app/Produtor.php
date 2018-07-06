<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Produtor extends Model
{
    protected $table = 'produtor';
    protected $primaryKey = 'usuario_id';
    protected $fillable = ['usuario_id', 'endereco_id', 'cnpj', 'nomeFantasia', 'razaoSocial', 'telefone', 'raioEntrega', 'avaliacao', 'acesso'];
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('mine_apple\User');
    }

    public function endereco()
    {
        return $this->belongsTo('mine_apple\Endereco', 'endereco_id');
    }

    public function contas()
    {
        return $this->hasMany('mine_apple\Conta', 'produtor_id');
    }

    public function produtos()
    {
        return $this->hasMany('mine_apple\Produto', 'produtor_id');
    }

    public function assinaturas()
    {
        return $this->hasMany('mine_apple\Assinatura', 'produtor_id');
    }
}

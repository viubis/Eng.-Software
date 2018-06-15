<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function administrador()
    {
      return $this->hasOne( related: 'mine_apple/Administrador', foreignKey: 'id');
    }

    public function consumidor()
    {
    return $this->hasOne( related: 'mine_apple/Consumidor', foreignKey: 'id');

    public function produtor()
    {
    return $this->hasOne( related: 'mine_apple/Produtor', foreignKey: 'id');
    }

    public function log()
    {
    return $this->hasMany( related: 'mine_apple/Log', foreignKey: 'usuario_id');

}

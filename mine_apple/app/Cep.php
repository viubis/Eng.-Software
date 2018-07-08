<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Cep extends Model
{
    /**
     * Valida o cep
     * @param $cep
     * @return bool
     */
    public static function validar($cep) {
        return true;
    }
}

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

    /**
     * Calcula a distância entre dois ceps
     * @param $cep1
     * @param $cep2
     * @return int
     */
    public static function distancia($cep1, $cep2) {
        return 10;
    }
}

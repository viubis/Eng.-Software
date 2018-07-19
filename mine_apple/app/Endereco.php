<?php

namespace mine_apple;

use Canducci\Cep\Cep;
use Illuminate\Database\Eloquent\Model;
use TeamPickr\DistanceMatrix\DistanceMatrix;
use TeamPickr\DistanceMatrix\Licenses\StandardLicense;

class Endereco extends Model
{
    protected $table = 'endereco';
    protected $guarded = ['cidade_id', 'numero_cep', 'rua', 'numero', 'complemento', 'bairro'];
    public $timestamps = false;

    public function consumidorEndereco()
    {
        return $this->hasOne('mine_apple\ConsumidorEndereco', 'endereco_id');
    }

    public function produtor()
    {
        return $this->hasOne('mine_apple\Produtor', 'endereco_id');
    }


    public function cidade()
    {
        return $this->belongsTo('mine_apple\Cidade', 'cidade_id');
    }

    /**
     * Valida o número do cep
     *
     * @param $cep 'cep' somente números
     * @return bool
     */
    public static function validarCep($cep) {
        if(preg_match("/^[0-9]{2}[0-9]{3}[0-9]{3}$/", $cep) > 0) //Valida o formato
            return self::validarTrajeto($cep, $cep);

        return false;
    }

    /**
     * Valida o trajeto
     *
     * @param $origem 'rua, número, cep'
     * @param $destino 'rua, número, cep'
     * @return boolean
     */
    public static function validarTrajeto($origem, $destino) {
        return self::distancia($origem, $destino)->successful();
    }

    /**
     * Calcula a distância entre dois endereços
     *
     * @param $origem 'rua, número, cep'
     * @param $destino 'rua, número, cep'
     * @return integer distância em metros
     */
    public static function calcularDistancia($origem, $destino) {
        return self::distancia($origem, $destino)->distance();
    }

    private static function distancia($origem, $destino) {
        $response = new DistanceMatrix(new StandardLicense('AIzaSyB04oYaUr3O4pgiKt957DkM5rd_NMuVPAU'));
        $response->addOrigin($origem);
        $response->addDestination($destino);
        return $response->request()->rows()[0]->elements()[0];
    }
}

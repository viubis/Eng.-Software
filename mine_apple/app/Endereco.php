<?php

namespace mine_apple;

use Canducci\Cep\Cep;
use GuzzleHttp\Exception\GuzzleException;
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
     * Valida o cep
     *
     * @author Sesaque Oliveira
     *
     * @param $cep 'cep' somente números
     *
     * @return string informações do cep
     */
    public static function validarCep($cep) {
        if(preg_match("/^[0-9]{2}[0-9]{3}[0-9]{3}$/", $cep) > 0) {
            $http = new \GuzzleHttp\Client();
            $url = 'https://viacep.com.br/ws/'.$cep.'/json/';

            try {
                $resposta = $http->request('GET', $url)->getBody();
                $dados = json_decode($resposta);

                if(!property_exists($dados, "erro"))
                    return $dados;
            } catch(GuzzleException $e) {}
        }

        return null;
    }

    /**
     * Calcula a distância entre dois ceps
     *
     * @author Sesaque Oliveira
     *
     * @param $origem 'cep'
     * @param $destino 'cep'
     *
     * @return integer distância em metros
     */
    public static function calcularDistancia($cep1, $cep2) {
        $origem = self::validarCep($cep1);
        $destino = self::validarCep($cep2);

        if($origem != null && $destino != null) {
            $origem = $origem->localidade.','.$origem->uf.','.$origem->cep;
            $destino = $destino->localidade.','.$destino->uf.','.$destino->cep;

            $http = new \GuzzleHttp\Client();
            $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$origem.'&destinations='.$destino.'&key=AIzaSyB04oYaUr3O4pgiKt957DkM5rd_NMuVPAU';

            try {
                $resposta = $http->request('GET', $url)->getBody();
                $dados = json_decode($resposta)->rows[0]->elements[0];

                if(strcmp($dados->status,"OK") == 0)
                    return $dados->distance->value;
            } catch(GuzzleException $e) {}
        }

        return null;
    }
}

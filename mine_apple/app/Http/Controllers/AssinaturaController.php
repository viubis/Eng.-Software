<?php
/**
 * Created by PhpStorm.
 * User: Victória Oliveira Gomes e Bruno Claudino Matias
 * Date: 10/07/18
 * Time: 12:21
 */

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use mine_apple\Cartao;
use mine_apple\Financa;

class AssinaturaController
{

    /**
     * @author Victória Gomes e Bruno Claudino
     * @param Request $request
     * @return string
     *
     *
     * O request para completar a assinatura retorna o id do a ser utilizado no pagamento (em teoria).
     * Procura-se no banco o cartão que corresponde a esse id e as informações referentes a ele são mandadas
     * para o moduloTEF, que verificará as informações acerca do cartão e retornará se a compra pode ser processada ou
     * não
     * Caso a compra tenha sido autorizada, o valor referente a assinatura é repassado para o produtor responsável pelos
     * produtos dela
     */
    public function realizarAssinatura(Request $request)
    {
        $cartao = Cartao::where('id', $request->idCartao);
        $infosCartao = $cartao->numero_cartao . ";" . $cartao->titular . ";" . $cartao->validade . ";" .
            $cartao->codigo . ";" . $request->valor_compra;
        $consulta = $this->verificarCartao($infosCartao);
        if($consulta.equalTo('Cartao nao existente')){
            return view('realizacao_de_assinatura')->with('Cartao nao existente');
        }
        else if($consulta.equalTo('Nome do titular esta incorreto')){
            return view('realizacao_de_assinatura')->with('Nome do titular está incorreto');
        }
        else if($consulta.equalTo('Data de vencimento esta incorreta')){
            return view('realizacao_de_assinatura')->with('Data de vencimento está incorreta');
        }
        else if($consulta.equalTo('Codigo de segurança está incorreto')) {
            return view('realizacao_de_assinatura')->with('Codigo de segurança está incorreto');
        }
        else {
            $this->transferenciaValores($request->produtos);
            return view('realizacao_de_assinatura')->with('sucesso');
        }

    }


    /**
     * @author Victória Gomes e Bruno Claudino
     * @param Request $request
     * @return string
     *
     * Após a realização da assinatura, esse método é chamado e ele recebe um array contendo os produtos da assinatura
     * que acabou de ser ativada. Pega-se o id do produtor contido em cada produto, com isso busca-se a finança do produtor e
     * soma-se o valor do produtor ao saldo disponível do produtor
     *
     * O que fazer com o frete?
     *
     */
    public function transferenciaValores($produtos)
    {
        foreach ($produtos as $produto){
            $financa = Financa::where('usuario_id', $produto->produtor_id);
            $financa->saldo_disponivel = ($produto->valor - (($produto->valor*100)/5)) + $financa->saldo_disponivel;
        }
    }

    /**
     * @author Victória Oliveira Gomes
     * @param $infos
     * @return string
     */
    public function verificarCartao($infos)
    {
        $host = env('HOST');
        $port = env('PORTA');
        $sock = socket_create(AF_INET, SOCK_STREAM, 0);
        socket_connect($sock, $host, $port);
        socket_write($sock, $infos, strlen($infos));
        $reply = socket_read($sock, 1024);
        $reply = trim($reply);
        return $reply;
    }
}

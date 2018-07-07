<?php
/**
 * Created by PhpStorm.
 * User: Victória Gomes
 * Date: 06/07/2018
 * Time: 19:10
 */

namespace verificador;

class VerificadorCartao{
    static function verificacao ($numCartao, $titular, $dataVencimentoCartao, $codSeg){
        $conexao = mysqli_connect("localhost", "root", "", "moduloPagamento");
        $consulta = mysqli_query($conexao,"SELECT NumCartao FROM Cartoes where NumCartao = MD5('$numCartao')");
        $numeroCartao = mysqli_fetch_array($consulta);
        echo "\n".$numeroCartao["NumCartao"];
        if ($numeroCartao["NumCartao"] ==null) {
            return "Cartao nao existente";
        }
        $consulta = mysqli_query($conexao,"SELECT Titular FROM Cartoes where Titular = MD5('$titular') AND NumCartao = MD5('$numCartao')");
        $titularCartao = mysqli_fetch_array($consulta);
        echo "\n".$titularCartao["Titular"];
        if ($titularCartao["Titular"] == null) {
            return "Nome do titular esta incorreto";
        }
        $consulta = mysqli_query($conexao,"SELECT dataVencimento FROM Cartoes where dataVencimento = '$dataVencimentoCartao' AND NumCartao = MD5('$numCartao')");
        $dataVenc = mysqli_fetch_array($consulta);
        echo "\n".$dataVenc["dataVencimento"];
        if ($dataVenc["dataVencimento"] == null) {
            return "Data de vencimento esta incorreta";
        }
        $consulta = mysqli_query($conexao,"SELECT codSeguranca FROM Cartoes where codSeguranca = MD5('$codSeg') AND NumCartao = MD5('$numCartao')");
        $codSegu = mysqli_fetch_array($consulta);
        echo "\n".$codSegu["codSeguranca"];
        if ($codSegu["codSeguranca"] == null) {
            return "Codigo de segurança está incorreto";
        }
        return "sucesso";
    }
}
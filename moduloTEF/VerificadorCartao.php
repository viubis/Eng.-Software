<?php
/**
 * Created by PhpStorm.
 * User: Victória Gomes
 * Date: 06/07/2018
 * Time: 19:10
 */

namespace verificador;

class VerificadorCartao{
    static function verificacao ($numCartao, $titular, $dataVencimentoCartao, $codSeg, $valorCompra){
        $conexao = mysqli_connect("localhost", "root", "", "moduloPagamento");
        $consulta_num_cartao = mysqli_query($conexao,"SELECT NumCartao FROM Cartoes WHERE NumCartao = MD5('$numCartao')");
        $numeroCartao = mysqli_fetch_array($consulta_num_cartao);
        echo "\n".$numeroCartao["NumCartao"];
        if ($numeroCartao["NumCartao"] ==null) {
            return "Cartao nao existente";
        }
        $consulta_titular_cartao = mysqli_query($conexao,"SELECT Titular FROM Cartoes WHERE Titular = MD5('$titular') AND NumCartao = MD5('$numCartao')");
        $titularCartao = mysqli_fetch_array($consulta_titular_cartao);
        echo "\n".$titularCartao["Titular"];
        if ($titularCartao["Titular"] == null) {
            return "Nome do titular esta incorreto";
        }
        $consulta_data_venc = mysqli_query($conexao,"SELECT dataVencimento FROM Cartoes WHERE dataVencimento = '$dataVencimentoCartao' AND NumCartao = MD5('$numCartao')");
        $dataVenc = mysqli_fetch_array($consulta_data_venc);
        echo "\n".$dataVenc["dataVencimento"];
        if ($dataVenc["dataVencimento"] == null) {
            return "Data de vencimento esta incorreta";
        }
        $consulta_cod_seg = mysqli_query($conexao,"SELECT codSeguranca FROM Cartoes WHERE codSeguranca = MD5('$codSeg') AND NumCartao = MD5('$numCartao')");
        $codSegu = mysqli_fetch_array($consulta_cod_seg);
        echo "\n".$codSegu["codSeguranca"];
        if ($codSegu["codSeguranca"] == null) {
            return "Codigo de segurança está incorreto";
        }
        $consulta_valor_disp = mysqli_query($conexao,"SELECT limiteDisponivel FROM Cartoes WHERE codSeguranca = MD5('$codSeg') AND NumCartao = MD5('$numCartao')");
        $valorDisponivel = mysqli_fetch_array($consulta_valor_disp);
        echo "\n".$valorDisponivel["limiteDisponivel"];
        if($valorDisponivel["limiteDisponivel"]-$valorCompra>0){
            $totalDisponivel = $valorDisponivel["limiteDisponivel"] - $valorCompra;
            mysqli_query($conexao,"UPDATE Cartoes SET limiteDisponivel = $totalDisponivel WHERE codSeguranca = MD5('$codSeg') AND NumCartao = MD5('$numCartao')");
            $consulta_valor_usado = mysqli_query($conexao,"SELECT limiteUsado FROM Cartoes WHERE codSeguranca = MD5('$codSeg') AND NumCartao = MD5('$numCartao')");
            $valorUsado = mysqli_fetch_array($consulta_valor_usado);
            $totalUsado = $valorUsado["limiteUsado"] + $valorCompra;
            mysqli_query($conexao,"UPDATE Cartoes SET limiteUsado = $totalUsado WHERE codSeguranca = MD5('$codSeg') AND NumCartao = MD5('$numCartao')");
        }
        else{
            return "limite indisponivel para compra";
        }
        return "sucesso";
    }
}
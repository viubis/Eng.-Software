<?php

class Endereco{
    private $idEndereco;
    private $cep;
    private $bairro;
    private $complemento;
    private $numero;
    private $rua;


    public function getIdEndereco()
    {
        return $this->idEndereco;
    }

    public function setIdEndereco($idEndereco): void
    {
        $this->idEndereco = $idEndereco;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep): void
    {
        $this->cep = $cep;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro): void
    {
        $this->bairro = $bairro;
    }

    public function getComplemento()
    {
        return $this->complemento;
    }

    public function setComplemento($complemento): void
    {
        $this->complemento = $complemento;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function setRua($rua): void
    {
        $this->rua = $rua;
    }
}

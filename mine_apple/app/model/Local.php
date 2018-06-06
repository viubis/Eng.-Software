<?php
class Local{
    private $cep;
    private $idCidade;
    private $idEstado;

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep): void
    {
        $this->cep = $cep;
    }

    public function getIdCidade()
    {
        return $this->idCidade;
    }

    public function setIdCidade($idCidade): void
    {
        $this->idCidade = $idCidade;
    }

    public function getIdEstado()
    {
        return $this->idEstado;
    }

    public function setIdEstado($idEstado): void
    {
        $this->idEstado = $idEstado;
    }
}

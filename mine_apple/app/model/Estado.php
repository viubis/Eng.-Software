<?php
class Estado{
    private $idEstado;
    private $nome;
    private $sigla;

    public function getIdEstado()
    {
        return $this->idEstado;
    }

    public function setIdEstado($idEstado): void
    {
        $this->idEstado = $idEstado;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getSigla()
    {
        return $this->sigla;
    }

    public function setSigla($sigla): void
    {
        $this->sigla = $sigla;
    }
}

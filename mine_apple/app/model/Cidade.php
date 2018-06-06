<?php
class Cidade{
    private $idCidade;
    private $nome;
    private $sigla;


    public function getIdCidade()
    {
        return $this->idCidade;
    }

    public function setIdCidade($idCidade): void
    {
        $this->idCidade = $idCidade;
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

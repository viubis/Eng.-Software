<?php
class DadosEntrega{
    private $idEntrega;
    private $segunda;
    private $terca;
    private $quarta;
    private $quinta;
    private $sexta;
    private $sabado;

    public function getIdEntrega()
    {
        return $this->idEntrega;
    }

    public function setIdEntrega($idEntrega): void
    {
        $this->idEntrega = $idEntrega;
    }

    public function getSegunda()
    {
        return $this->segunda;
    }

    public function setSegunda($segunda): void
    {
        $this->segunda = $segunda;
    }

    public function getTerca()
    {
        return $this->terca;
    }

    public function setTerca($terca): void
    {
        $this->terca = $terca;
    }

    public function getQuarta()
    {
        return $this->quarta;
    }

    public function setQuarta($quarta): void
    {
        $this->quarta = $quarta;
    }

    public function getQuinta()
    {
        return $this->quinta;
    }

    public function setQuinta($quinta): void
    {
        $this->quinta = $quinta;
    }

    public function getSexta()
    {
        return $this->sexta;
    }

    public function setSexta($sexta): void
    {
        $this->sexta = $sexta;
    }

    public function getSabado()
    {
        return $this->sabado;
    }

    public function setSabado($sabado): void
    {
        $this->sabado = $sabado;
    }

}

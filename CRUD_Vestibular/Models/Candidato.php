<?php

class Candidato
{
    private $nome;
    private $rg;
    private $telefone;
    private $ensinoPublico;

    public function __construct( $nome, $rg, $telefone, $ensinoPublico)
    {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->telefone = $telefone;
        $this->ensinoPublico = $ensinoPublico;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getRG()
    {
        return $this->rg;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getEnsinoPublico()
    {
        return $this->ensinoPublico;
    }

}
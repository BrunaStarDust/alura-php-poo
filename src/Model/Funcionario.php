<?php

namespace Alura\Banco\Model;

class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct($documento, $nome, $cargo)
    {
        parent::__construct($documento, $nome);
        $this->cargo = $cargo;
    }

    public function getCargo()
    {
        return $this->cargo;
    }
}

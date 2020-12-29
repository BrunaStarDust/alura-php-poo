<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Pessoa;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct($documento, $nome, $salario)
    {
        parent::__construct($documento, $nome);
        $this->salario = $salario;
    }

    abstract public function calculaBonificacao();

    public function getSalario()
    {
        return $this->salario;
    }
}

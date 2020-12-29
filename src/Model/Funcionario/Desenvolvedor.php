<?php

namespace Alura\Banco\Model\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function __construct($documento, $nome, $salario)
    {
        parent::__construct($documento, $nome, $salario);
    }

    public function calculaBonificacao()
    {
        return 500;
    }
}

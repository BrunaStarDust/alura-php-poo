<?php

namespace Alura\Banco\Model\Funcionario;

class EditorDeVideo extends Funcionario
{
    public function __construct($documento, $nome, $cargo, $salario)
    {
        parent::__construct($documento, $nome, $cargo, $salario);
    }

    public function calculaBonificacao()
    {
        return 600;
    }
}

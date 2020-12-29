<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\AcessoPropriedades;

class Desenvolvedor extends Funcionario
{
    use AcessoPropriedades;

    public function __construct($documento, $nome, $salario)
    {
        parent::__construct($documento, $nome, $salario);
    }

    public function calculaBonificacao()
    {
        return 500;
    }
}

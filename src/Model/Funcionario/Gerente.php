<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function __construct($documento, $nome, $salario)
    {
        parent::__construct($documento, $nome, $salario);
    }

    public function calculaBonificacao()
    {
        return $this->getSalario();
    }

    public function podeAutenticar($senha)
    {
        return $senha === '4321';
    }
}

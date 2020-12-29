<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function __construct($documento, $nome, $salario)
    {
        parent::__construct($documento, $nome, $salario);
    }

    public function calculaBonificacao()
    {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar($senha)
    {
        return $senha === '1234';
    }
}

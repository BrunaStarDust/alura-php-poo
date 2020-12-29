<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\AcessoPropriedades;
use Alura\Banco\Model\Autenticavel;
use Alura\Banco\Model\Pessoa;

class Titular extends Pessoa implements Autenticavel
{
    use AcessoPropriedades;
    private $endereco;

    public function __construct($documento, $nome, $endereco)
    {
        parent::__construct($documento, $nome);
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco->formataEndereco();
    }

    public function podeAutenticar($senha)
    {
        return $senha === 'abcd';
    }
}

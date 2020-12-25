<?php
require_once 'Pessoa.php';

class Titular extends Pessoa
{
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
}

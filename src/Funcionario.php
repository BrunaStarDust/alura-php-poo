<?php
require_once 'Pessoa.php';

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

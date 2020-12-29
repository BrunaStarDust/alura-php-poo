<?php

namespace Alura\Banco\Model;

abstract class Pessoa
{
    protected $documento;
    protected $nome;

    public function __construct($documento, $nome)
    {
        $this->documento = $documento;
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDocumento()
    {
        return $this->documento->getCpf();
    }

    final protected function validaNome($nome)
    {
        if (mb_strlen($nome) < 5) {
            echo "<p>Nome precisa ter pelo menos 5 caracteres</p>";
            exit();
        }
    }
}

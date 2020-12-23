<?php

class Titular
{
    private $documento;
    private $nome;

    public function __construct(Documento $documento, string $nome)
    {
        $this->documento = $documento;
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    private function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "<p>Nome precisa ter pelo menos 5 caracteres</p>";
            exit();
        }
    }
}

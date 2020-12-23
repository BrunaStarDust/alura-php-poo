<?php

class Documento
{
    private $cpf;

    public function __construct(string $cpf)
    {
        $this->validaCpf($cpf);
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    private function validaCpf($cpf)
    {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        preg_match('/(\d)\1{10}/', $cpf, $matches);
        if ((strlen($cpf) < 11) || $matches) {
            echo '<p>CPF inválido</p>';
            exit();
        }
    }
}

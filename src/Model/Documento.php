<?php

namespace Alura\Banco\Model;

class Documento
{
    private $cpf;

    public function __construct($cpf)
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
        $cpfNumerico = $cpf;
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        $cpfNumerico = preg_replace('/[^0-9]/', '', $cpfNumerico);
        preg_match('/(\d)\1{10}/', $cpfNumerico, $matches);
        if ($cpf === false || $matches) {
            echo "Cpf inválido";
            exit();
        }

        // $cpf = preg_replace('/[^0-9]/', '', $cpf);
        // preg_match('/(\d)\1{10}/', $cpf, $matches);
        // if ((strlen($cpf) < 11) || $matches) {
        //     echo '<p>CPF inválido</p>';
        //     exit();
        // }
    }
}

<?php

namespace Alura\Banco\Model;

trait AcessoPropriedades
{
    public function __get($nomeAtributo)
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}

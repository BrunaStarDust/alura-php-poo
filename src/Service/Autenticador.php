<?php

namespace Alura\Banco\Service;

class Autenticador
{
    public function tentaLogin($autenticavel, $senha)
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "<p>Ok. Usuário logado no sistema</p>";
        } else {
            echo "<p>Ops. Senha incorreta</p>";
        }
    }
}

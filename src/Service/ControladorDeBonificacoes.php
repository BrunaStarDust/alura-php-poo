<?php

namespace Alura\Banco\Service;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe($funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacoes()
    {
        return $this->totalBonificacoes;
    }
}

<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Conta\Conta;

class ContaPoupanca extends Conta
{
    public function __construct($titular)
    {
        parent::__construct($titular);
    }

    public function saca($valorSacado)
    {
        $tarifaSaque = $valorSacado * $this->percentualTarifa();
        $valorSaque = $valorSacado + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "<p>Você não pode sacar</p>";
        } else {
            $this->saldo -= $valorSaque;
            echo "<p>Saque realizado com sucesso!</p>";
            echo "<p>Valor do saque: {$valorSacado}</p>";
            echo "<p>Valor da tarifa: {$tarifaSaque}</p>";
        }
    }

    public function deposita($valorDepositado)
    {
        if ($valorDepositado < 0) {
            echo "<p>Você só pode depositar um valor positivo</p>";
        } else {
            $this->saldo += $valorDepositado;
            echo "<p>Depósito realizado com sucesso!</p>";
        }
    }

    public function transfere($valorTransferido, $contaDestino)
    {
        if ($valorTransferido > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saca($valorTransferido);
            $contaDestino->deposita($valorTransferido);
            echo "<p>Transferência realizada com sucesso!</p>";
        }
    }

    public function percentualTarifa()
    {
        return 0.03;
    }
}

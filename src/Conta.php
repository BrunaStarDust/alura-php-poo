<?php

class Conta
{

    private $cpfTitular;
    private $nomeTitular;
    private $saldo;

    public function __construct($cpfTitular, $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

    public function saca($valorSacado)
    {
        if ($valorSacado > $this->saldo) {
            echo "<p>Você não pode sacar</p>";
        } else {
            $this->saldo -= $valorSacado;
            echo "<p>Saque realizado com sucesso!</p>";
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

    public function getCpfTitular()
    {
        return $this->cpfTitular;
    }

    public function getNomeTitular()
    {
        return $this->nomeTitular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}

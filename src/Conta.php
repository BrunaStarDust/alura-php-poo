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
        if ($valorSacado > $this->getSaldo()) {
            echo "<p>Você não pode sacar</p>";
        } else {
            $this->setSaldo($this->getSaldo() - $valorSacado);
            echo "<p>Saque realizado com sucesso!</p>";
        }
    }

    public function deposita($valorDepositado)
    {
        if ($valorDepositado < 0) {
            echo "<p>Você só pode depositar um valor positivo</p>";
        } else {
            $this->setSaldo($this->getSaldo() + $valorDepositado);
            echo "<p>Depósito realizado com sucesso!</p>";
        }
    }

    public function transfere($valorTransferido, $contaDestino)
    {
        if ($valorTransferido > $this->getSaldo()) {
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

    public function setCpfTitular($cpfTitular)
    {
        $this->cpfTitular = $cpfTitular;
    }

    public function getNomeTitular()
    {
        return $this->nomeTitular;
    }

    public function setNomeTitular($nomeTitular)
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
}

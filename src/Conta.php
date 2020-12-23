<?php

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
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

    public function getSaldo()
    {
        return $this->saldo;
    }

    public static function getNumeroDeContas()
    {
        return self::$numeroDeContas;
    }
}

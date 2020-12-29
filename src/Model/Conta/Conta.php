<?php

namespace Alura\Banco\Model\Conta;

abstract class Conta
{
    protected $titular;
    protected $saldo;
    protected static $numeroDeContas;

    public function __construct($titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    abstract protected function saca($valorSacado);

    abstract protected function deposita($valorDepositado);

    abstract protected function transfere($valorTransferido, $contaDestino);

    abstract protected function percentualTarifa();

    public function getTitular()
    {
        return $this->titular->getNome();
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

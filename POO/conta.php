<?php
class Conta
{
    private $nome;
    private $numConta;
    private $saldo;

    function __construct()
    {
        $this->nome = "xiru";
        $this->numConta = 123 - 4;
        $this->saldo = 50;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }
    function getNome()
    {
        return $this->nome;
    }

    function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }
    function getNumConta()
    {
        return $this->numConta;
    }

    function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    function getSaldo()
    {
        return $this->saldo;
    }
    function  imprimirSaldo()
    {
        echo "<br> Saldo disponivel R$" . $this->getSaldo();
    }

    function imprimirDados()
    {
        echo "<h1> Dados na conta </h1>";
        echo " Nome: ".$this->nome;
        echo " Número Conta: ".$this->nome;
        $this->imprimirSaldo(); 
    }
    function debitar($valor)
    {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo " O valor R$" . $valor . " foi sacado com sucesso";
        } else {
            echo " Saldo insuficiente";
        }
    }
    function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo " O valor R$" . $valor . " foi depositado com sucesso.";
        } else {
            echo " Apenas valores acima de 1 real ";
        }
    }
}

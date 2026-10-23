<?php

class ContaBancaria {
    private string $titular;
    private float $saldo;
    private string $numeroConta;

    public function __construct(string $titular, float $saldo, string $numeroConta) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->numeroConta = $numeroConta;
    }

public function getTitular(): string {
        return $this->titular;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function getNumeroConta(): string {
        return $this->numeroConta;
    }

    public function setTitular(string $titular): void {
        $this->titular = $titular;
    }
public function setNumeroConta(string $numeroConta): void {
        $this->numeroConta = $numeroConta;
    }
    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            echo "Valor de depósito inválido.";
        }
    }

    public function sacar(float $valor): void {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente ou valor de saque inválido.";
        }
    }

    public function ExibirInformacoes(): void {
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo: R$ " . number_format($this->saldo, 2, ',', '.') . "<br>";
        echo "Número da Conta: " . $this->numeroConta . "<br>";
    }
}


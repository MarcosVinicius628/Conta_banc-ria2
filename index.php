<?php
require_once 'Conta.php';
try {
    $conta1 = new ContaBancaria("João Silva", 1000.00, "123456789");
    $conta2 = new ContaBancaria("Maria Oliveira", 500.00, "987654321");
    $conta1->depositar(500.00);
    $conta2->depositar(700.00);
    $conta1->sacar(200.00);
    $conta1->sacar(500.00);
    $conta1->ExibirInformacoes();
    $conta2->ExibirInformacoes();
} catch (Exception $e) {
    echo "Ocorreu um erro: " . $e->getMessage();
}
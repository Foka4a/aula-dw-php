<?php

require_once __DIR__ . '/../cliente.php';

$conta = new Conta(100.00);
$conta->depositar(50.00);
$conta->sacar(30.00);

echo 'Saldo: R$ ' . number_format($conta->getSaldo(), 2, ',', '.') . PHP_EOL;

try {
    $conta->sacar(200.00);
} catch (RuntimeException $erro) {
    echo $erro->getMessage() . PHP_EOL;
}
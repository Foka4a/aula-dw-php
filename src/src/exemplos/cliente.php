<?php

require_once __DIR__ . '/../cliente.php';

$cliente = new Cliente('Maria Silva', 'maria@example.com');

echo 'Nome: ' . $cliente->getNome() . PHP_EOL;
echo 'E-mail: ' . $cliente->getEmail() . PHP_EOL;

$cliente->setNome('Maria Souza');
$cliente->setEmail('maria.souza@example.com');

echo 'Nome atualizado: ' . $cliente->getNome() . PHP_EOL;
echo 'E-mail atualizado: ' . $cliente->getEmail() . PHP_EOL;

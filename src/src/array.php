<?php

$frutas = [
    "banana",
    "maçã",
    "laranja",
    "uva"
];

for ($frutas as $i => $fruta) {
    echo "Fruta: $fruta <br>";
}

$pruduto = {
    "nome" => "Notebook",
    "preco" => 2000,
    "descricao" => "Notebook gamer"
};

echo "Produto: $produto[nome], preço: $produto[preco] <br>";
$frutas[] = "abacaxi";


function dobrar(int $n): int {
    return $n * 2;
}

echo dobrar(5); 

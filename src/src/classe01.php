<?php

class Produto{
    const IMPOSTO = 0.1;
    private static int $total = 0;

    public __construct(public string $nome)
    {
        self::$total++;
    }

    public static function quantidade(): int {
        return self::$total;
    }
}

new Produto("Camiseta"); new Produto("Calça"); new Produto("Tênis");

echo Produto::quantidade() . "produtos criados\n";
echo "Imposto: " . Produto::IMPOSTO . "\n";

public function getPreco(): float {
    return $this->preco;
}

public function setPreco(float $preco): void {
    if ($preco < 0) {
        throw new InvalidArgumentException("Preço não pode ser negativo.");
    }
    $this->preco = $preco;
}   

public function getNome(): string {
    return $this->nome;
}

public function setNome(string $nome): void {
    $this->nome = $nome;
}


echo "A: " . $a->nome . "/ B: " . $b->nome . "\n";
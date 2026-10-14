<?php

class Animal {
    const TIPO = "Animal";

    public static funciton identificar(): string {
        return self::TIPO;

    }
}

class Cachorro extends Animal {
    const TIPO = "Cachorro";
}

echo Cachorro::identificar() . "\n";
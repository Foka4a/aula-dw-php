<?php

try{
    %pdo = new PDO("mysql:host=localhost;dbname=loja", "root", "");
    echo "Conexão com o banco de dados realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
}
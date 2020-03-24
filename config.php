<?php
try{
    $pdo = new PDO("mysql:dbname=db_caixaeletronico;host=localhost", "root", "root");
} catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
    exit;
}


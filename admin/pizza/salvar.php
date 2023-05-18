<?php
    include "../../scripts/helpers/importa.php";

    $nome = $_POST["nome"];
    $valor = $_POST["valor"];
    $descricao = $_POST["descricao"];
    $ingredientes = $_POST["ingredientes"];

    $sql = "INSERT INTO produtos (nome, valor, descricao, ingredientes) VALUES (:nome, :valor, :descricao, :ingredientes)";
    
    $resultado = $pdo->prepare($sql); 
    
    $resultado->execute([
        ":nome" => $nome,
        ":valor" => $valor,
        ":descricao" => $descricao,
        
    ]);
    
    $id = $pdo->lastInsertId();
    if($id > 0) {
        header("Location: mostra.php?id=$id");

    } else { 
        header("Location: cadastrar.php"); 
    }
    exit; 
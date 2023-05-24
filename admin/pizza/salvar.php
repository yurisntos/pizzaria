<?php
    include "../../scripts/helpers/importa.php";

    $nome = $_POST["nome"];
    $valor = $_POST["valor"];
    $descricao = $_POST["descricao"];
    $imagem = '';

    if($_FILES['foto']){
        $nome_foto = rand(0, 99419845) .  $_FILES['foto']['name'];

        if(move_uploaded_file($_FILES['foto']['tmp_name'], '../../assepts/pizzas/' . $nome_foto)){
            $imagem = $nome_foto;
        }
    }

    $sql = "INSERT INTO produtos (nome, valor, descricao, imagem) VALUES (:nome, :valor, :descricao, :imagem)";
    
    $resultado = $pdo->prepare($sql); 
    
    $resultado->execute([
        ":nome" => $nome,
        ":valor" => $valor,
        ":descricao" => $descricao,
        ":imagem" => $imagem
    ]);
    
    $id = $pdo->lastInsertId();
    if($id > 0) {
        header("Location: mostra.php?id=$id");

    } else { 
        header("Location: cadastrar.php"); 
    }
    exit; 
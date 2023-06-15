<?php
    include "../funcoes.php";

    $nome = $_POST["nome"]; 
    $email = $_POST["email"]; 
    $telefone = $_POST["telefone"];

    if(empty($nome) || empty($email) || empty($telefone)){
        echo "Por favor, preencha todos os campos do formulário.";
        exit;
    }

    $sql = "INSERT INTO usuario (nome, email, telefone) VALUES (:nome, :email, :telefone)";
   
    $resultado = $pdo->prepare($sql);

    $resultado ->execute([
        ":nome" => $nome,
        ":email" => $email,
        ":telefone" => $telefone
    ]);
    
    $id = $pdo->lastInsertId();
    if($id > 0) {
        header("Location: " . buscaUrl("index.php"));

    } else { 
        header("Location:" . buscaUrl("index.php")); 
    }
    exit; 
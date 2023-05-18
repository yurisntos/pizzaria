<?php
    include "../../scripts/helpers/importa.php";

    // Coleta os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    // Valida os dados do formulário (você pode adicionar suas próprias validações aqui)
    if (empty($nome) || empty($email) || empty($senha)){
        echo "Por favor, preencha todos os campos do formulário.";
        exit;
    }

    $sql = "INSERT INTO administrador (nome, email, senha) VALUES (:nome, :email, :senha)";
   
    $resultado = $pdo->prepare($sql);

    $resultado ->execute([
        ":nome" => $nome,
        ":email" => $email,
        ":senha" => $senha
    ]);
    
    $id = $pdo->lastInsertId();
    if($id > 0) {
        header("Location: mostraUser.php?id=$id");

    } else { 
        header("Location: cadastrarUser.php"); 
    }
    exit; 
          
        
       
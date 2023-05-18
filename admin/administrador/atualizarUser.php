<?php
    include "../../scripts/helpers/importa.php";

    $id = $_POST["idadm"]; 
    $nome = $_POST["nome"]; 
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "UPDATE administrador SET nome = :nome, email = :email, senha = :senha WHERE idadm = :idadm"; 

    $resultado = $pdo->prepare($sql);

    $resultado->execute([
        ":idadm" => $id,
        ":nome"  => $nome,
        ":email" => $email,
        ":senha" => $senha
    ]); 

    

    header("Location: lista.php");
    exit; 
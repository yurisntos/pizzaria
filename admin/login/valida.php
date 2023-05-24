<?php
    require "../funcoes.php";

    $email = $_POST["email"];
    $senha = $_POST["password"];


    $sql = "SELECT * FROM administrador WHERE email = :email and senha = :senha";
    $login = buscaItem($sql, [':email' => $email, ':senha' => $senha]);

    if(!empty($login)){
        $_SESSION['id'] = $login['idadm'];
        header('Location: ../home/index.php');
    }
    else{
        unset($_SESSION['id']);
        header('Location: ./index.php');
    }

<?php
    require 'importa.php';

    $sql = "SELECT * FROM roupas WHERE id = :id";

    if(!empty($_GET['id'])){
        $roupa = buscaItem($sql, [':id' => $_GET['id']]);
    } else {
        header('Location: index.php');
    }

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $roupa['nome'] ?></title>
</head>
<body>
    <h1><?= $roupa['nome'] ?></h1>
    <p><?= $roupa['cor'] ?></p>
    <p><?= $roupa['preco'] ?></p>

    <a href="index.php">Voltar</a>
</body>
</html>

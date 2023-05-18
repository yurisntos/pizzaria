<?php
    require 'importa.php';

    $sql = "SELECT * FROM produtos WHERE idprodutos = $id";


    if(!empty($_GET['id'])){
        $produto = buscaItem($sql, [':id' => $_GET['id']]);
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
    <title><?= $produto['nome'] ?></title>
</head>
<body>
    <h1><?= $produto['nome'] ?></h1>
    <p><?= $produto['ingredientes'] ?></p>
    <p><?= $produto['price'] ?></p>

    <a href="index.php">Voltar</a>
</body>
</html>

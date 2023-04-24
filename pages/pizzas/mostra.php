<?php
    include "../../scripts/helpers/importa.php";

    if(!empty($_GET["id"])){
        $id = $_GET["id"];

    } else {
        header("Location: lista.php");
        exit;
    }

    $sql = "SELECT * FROM produtos WHERE idprodutos = $id";
    $produto = buscaItem($sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $produto["nome"]?></h1>
    <a href="editar.php?id=<?= $produto["idprodutos"] ?>">Editar</a>
    
</body>
</html>
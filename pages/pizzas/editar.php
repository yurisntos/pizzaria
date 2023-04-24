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
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $produto["idprodutos"] ?>">
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome" value="<?= $produto["nome"] ?>">
        </div>
        <div>
            <label for="">Valor</label>
            <input type="number" name="valor" step="0.01" value="<?= $produto["valor"] ?>" >
        </div>
        <div>
            <label for="">Descrição</label>
            <textarea name="descricao"><?= $produto["descricao"] ?></textarea> 
        </div>
        <div>
            <label for="">Ingredientes</label>
            <textarea name="ingredientes"><?= $produto["ingredientes"] ?></textarea>
        </div>
        <input type="submit" value="Atualizar">
    </form>
    
</body>
</html>
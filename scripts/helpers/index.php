<?php
    require 'importa.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista produtos</title>
    </head>
    <body>
        <?php
            $produtos = listaDados('SELECT * FROM produtos');

            foreach ($produtos as $produtos) { ?>
                <div>
                    <h2><?php echo $produtos['nome']; ?></h2>
                    <p><?php echo $produtos['descricao']; ?></p>
                    <p><?php echo $produtos['valor']; ?></p>
                    <a href="ver.php?id=<?= $produtos['idprodutos']; ?>">Ver</a>
                </div>
            <?php } ?>
    </body>
</html>
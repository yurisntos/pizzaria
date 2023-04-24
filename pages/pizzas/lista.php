<?php
include "../../scripts/helpers/importa.php";
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
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $produtos = listaDados('SELECT * FROM produtos');

            foreach ($produtos as $produto) { ?>
                <tr class="trow">
                    <td  class="td"><?= $produto['idprodutos'] ?> </td>
                    <td  class="td"><?= $produto['nome'] ?></td>
                    <td  class="td"><?= $produto['valor'] ?></td>
                    <td  class="td">
                        <a href="mostra.php?id=<?= $produto["idprodutos"] ?>">Veja</a>
                    </td>
                </tr>
            <?php } ?>
            
        </tbody>
    </table>

</body>

</html>
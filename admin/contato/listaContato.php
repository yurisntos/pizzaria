<?php
require '../funcoes.php';
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php include "../template/head.php" ?>

<body>
    <?php include "../template/navbar.php" ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "../template/sidebar.php" ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <br>
                <div class="row">
                    <div class="col">
                        <h1>Cadastro de contatos</h1>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col">
                        <a href="cadastroContato.php">
                        <button type="button" class="btn btn-success">Inserir</button>
                        </a>
                    </div> -->
                </div>
                <br>

                <table class="table" width="100%" border="1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Contato</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $usuario = listaDados('SELECT * FROM usuario');

                        foreach ($usuario as $item) { ?>
                            <tr class="trow">
                                <td class="td"><?= $item['iduser'] ?> </td>
                                <td class="td"><?= $item['nome'] ?></td>
                                <td class="td"><?= $item['email'] ?></td>
                                <td class="td"><?= $item['telefone'] ?></td>
                                <td class="td">
                                    <a href="mostraContato.php?id=<?= $item["iduser"] ?>">
                                    <button type="button" class="btn btn-info">Visualizar</button>
                                </a>
                                
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <?php include "../template/footer.php" ?>
</body>

</html>
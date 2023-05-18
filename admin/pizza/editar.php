<?php
require '../funcoes.php';

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
} else {
    header("Location: lista.php");
    exit;
}

$sql = "SELECT * FROM produtos WHERE idprodutos = $id";
$produto = buscaItem($sql);
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
                <h1 class="display-2">Edite a Pizza </h1>

                <form action="atualizar.php" method="POST">

                    <input type="hidden" name="id" value="<?= $produto["idprodutos"] ?>">
                    <div class="mb-3">
                        <label class="text_label" for="">Nome</label>
                        <input class="form-control" type="text" name="nome" value="<?= $produto["nome"] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="text_label" for="">Valor</label>
                        <input class="form-control" type="number" name="valor" step="0.01" value="<?= $produto["valor"] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="text_label" for="">Descrição</label>
                        <textarea class="form-control" name="descricao"><?= $produto["descricao"] ?></textarea>
                    </div>
                    

                    <a class="" href="lista.php">
                        <button type="button" class="btn btn-warning">Voltar</button>
                    </a>
                    <input class="btn btn-primary" type="submit" value="Atualizar">
                </form>
            </main>
        </div>
    </div>

    <?php include "../template/footer.php" ?>
</body>

</html>
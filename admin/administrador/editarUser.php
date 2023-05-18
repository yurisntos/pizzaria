<?php
require '../funcoes.php';

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
} else {
    header("Location: lista.php");
    exit;
}

$sql = "SELECT * FROM administrador WHERE idadm = $id";
$usuario = buscaItem($sql);
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
                <h1 class="display-2">Edite o usuario </h1>

                <form action="atualizarUser.php" method="POST">

                    <input type="hidden" name="idadm" value="<?= $usuario["idadm"] ?>">
                    <div class="mb-3">
                        <label class="text_label" for="">Nome</label>
                        <input class="form-control" type="text" name="nome" value="<?= $usuario["nome"] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="text_label" for="">Valor</label>
                        <input class="form-control" type="email" name="email" step="0.01" value="<?= $usuario["email"] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="text_label" for="">Descrição</label>
                        <input class="form-control" type="password" name="senha" value="<?= $usuario["senha"] ?>">
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
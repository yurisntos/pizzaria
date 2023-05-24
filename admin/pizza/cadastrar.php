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
                <h1 class="display-2">Nova Pizza</h1>

                <form action="salvar.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="text_label" for="">Nome</label>
                        <input class="form-control" type="text" name="nome">
                    </div>
                    <div class="mb-3">
                        <label class="text_label" for="">Valor</label>
                        <input class="form-control" type="number" name="valor" step="0.01">
                    </div>
                    <div class="mb-3">
                        <label class="text_label" for="">Descrição</label>
                        <textarea class="form-control" name="descricao"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="text_label">Imagem</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <a href="lista.php">
                        <input class="btn btn-warning" type="button" value="Voltar">
                    </a>
                    <input class="btn btn-primary" type="submit" value="Cadastrar">
                </form>
            </main>
        </div>
    </div>

    <?php include "../template/footer.php" ?>
</body>

</html>
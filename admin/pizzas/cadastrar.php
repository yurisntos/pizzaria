<!doctype html>
<html lang="en" data-bs-theme="auto">
  <?php include "../template/head.php" ?>
  <body>
    <?php include "../template/navbar.php" ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "../template/sidebar.php" ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <form action="salvar.php" method="POST">
                    <div class="box_input">
                        <label class="text_label" for="">Nome</label>
                        <input class="input" type="text" name="nome">
                    </div>
                    <div class="box_input">
                        <label class="text_label" for="">Valor</label>
                        <input class="input" type="number" name="valor" step="0.01">
                    </div>
                    <div class="box_input">
                        <label class="text_label" for="">Descrição</label>
                        <textarea name="descricao"></textarea> 
                    </div>
                    <div class="box_input">
                        <label class="text_label" for="">Ingredientes</label>
                        <textarea class="input" name="ingredientes"></textarea>
                    </div>
                    <input type="submit" value="Cadastrar">
                </form>
            </main>
        </div>
    </div>

    <?php include "../template/footer.php" ?>
  </body>
</html>

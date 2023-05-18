<?php
  require 'funcoes.php';
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <?php include buscaArquivo('/admin/template/head.php') ?>
  <body>
    
    <?php include buscaArquivo('/admin/template/navbar.php') ?>

    <div class="container-fluid">
        <div class="row">
            <?php include buscaArquivo('/admin/template/sidebar.php') ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h1>BEM VINDO</h1>
            </main>
        </div>
    </div>

    <?php include buscaArquivo('/admin/template/footer.php') ?>
  </body>
</html>

<?php
  require '../funcoes.php';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <?php include "../template/head.php" ?>
  <body>
    <?php include "../template/navbar.php" ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "../template/sidebar.php" ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h1 class="display-2">Faça seu cadastro!</h1>
                <form action="salvarUser.php" method="POST">
               
                <div class="mb-3">
                    <input class="form-control" placeholder="Digite seu nome" type="text" name="nome">
                </div>
                <div class="mb-3">
                    <input class="form-control" placeholder="Digite seu e-mail" type="email" name="email">
                </div>
                <div class="mb-3">
                    <input  class="form-control" type="password" placeholder="Digite sua senha" name="senha">
                    
                </div>
                <a href="lista.php" >
                <input class="btn btn-warning" type="button" value="Voltar">
                </a>
                <input class="btn btn-primary" type="submit" value="Cadastrar">
            </form>

            <?php include "../template/footer.php" ?>
</body>
</html>
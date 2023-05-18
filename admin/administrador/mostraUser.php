<?php
require "../funcoes.php";

if (!empty($_GET["id"])) {
  $id = $_GET["id"];
} else {
  header("Location: lista.php");
  exit;
}

$sql = "SELECT * FROM administrador WHERE idadm = $id";

$administrador = buscaItem($sql);
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
            <h1>Cadastro de Usuários</h1>
          </div>
        </div>  
        <h3><b>Nome: </b><?= $administrador["nome"] ?></h3>
        <h3><b>E-mail: </b><?= $administrador["email"] ?></h3>

        <form action="deletarUser.php" method="POST">
          <a class="" href="lista.php">
            <button type="button" class="btn btn-warning">Voltar</button>
          </a>
          <a class="" href="editarUser.php?id=<?= $administrador["idadm"] ?>">
            <button type="button" class="btn btn-primary">Editar</button>
          </a>
          <input type="hidden" name="id" value="<?= $administrador["idadm"] ?>">
          <button type="submit" class="btn btn-danger">Apagar</button>
        </form>
      </main>
    </div>
  </div>

  <?php include "../template/footer.php" ?>
</body>

</html>
<?php
require "../funcoes.php";

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
        <br>
        <div class="row">
          <div class="col">
            <h1>Cadastro de Pizza</h1>
          </div>
        </div>
        <img class="col-4" src="<?= buscaUrl('assepts/pizzas/' . $produto['imagem'] ) ?>" alt="">
        <h3><b>Nome: </b><?= $produto["nome"] ?></h3>
        <h3><b>Valor: </b><?= $produto["valor"] ?></h3>
        <h3><b>Descrição: </b><?= $produto["descricao"] ?></h3>
        

        <form action="delete.php" method="POST">
          <a class="" href="lista.php">
            <button type="button" class="btn btn-warning">Voltar</button>
          </a>
          <a class="" href="editar.php?id=<?= $produto["idprodutos"] ?>">
            <button type="button" class="btn btn-primary">Editar</button>
          </a>
          <input type="hidden" name="id" value="<?= $produto["idprodutos"] ?>">
          <button type="submit" class="btn btn-danger">Apagar</button>
        </form>

      </main>
    </div>
  </div>

  <?php include "../template/footer.php" ?>
</body>

</html>
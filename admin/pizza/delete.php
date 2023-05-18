<?php
    include "../../scripts/helpers/importa.php";

    $id = $_POST["id"];

    $sql = "DELETE FROM produtos WHERE idprodutos =  :id";

    // Executar a consulta
    $resultado = $pdo-> prepare($sql); 

    $resultado->execute([
        ":id" => $id
    ]);

    header("Location: lista.php"); 



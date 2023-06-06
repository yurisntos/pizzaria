<?php
    include "../../scripts/helpers/importa.php";

    $id = $_POST["id"];

    $sql = "DELETE FROM usuario WHERE iduser =  :id";

    // Executar a consulta
    $resultado = $pdo-> prepare($sql); 

    $resultado->execute([
        ":id" => $id
    ]);

    header("Location: listaContato.php"); 

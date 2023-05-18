<?php

require "../funcoes.php";

include "../../scripts/helpers/importa.php";

$email = $_POST["email"];
$senha = $_POST["password"];


$sql = "SELECT * FROM administrador WHERE email = $email and senha = $senha";
$login = buscaItem($sql);

if(!Empty($login)){
    $emailBanco = $login["email"];
    $senhaBanco = $login["senha"];
    echo $emailBanco .' - '. $senhaBanco;
}
else{
    
}

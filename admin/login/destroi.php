<?php
    include '../funcoes.php';

    unset($_SESSION['id']);
    header('Location: ./index.php');
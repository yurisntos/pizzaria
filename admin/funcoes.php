<?php
    session_start();

    function buscaArquivo($arquivo)
    {   
        $raiz =  dirname(dirname(__FILE__));

        $local = $raiz . $arquivo;

        return $local;
    }

    function buscaUrl($arquivo)
    {
        $url = 'http://pizzaria.test:84/';

        return $url . $arquivo;
    }

    function verificaLogin()
    {
        if(empty($_SESSION['id'])){
            header('Location: '. buscaUrl('admin/login/index.php'));
        }

        return true;
    }

    function usuarioLogado()
    {
        if (verificaLogin()){
            $usuario = buscaItem('SELECT * FROM administrador WHERE idadm = :id', [':id' => $_SESSION['id']]);
            return $usuario;
        }
    }


    require buscaArquivo("/scripts/helpers/importa.php");
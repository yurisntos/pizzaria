<?php

    function buscaArquivo($arquivo)
    {   
        $raiz =  dirname(dirname(__FILE__));

        $local = $raiz . $arquivo;

        return $local;
    }

    function buscaUrl($arquivo)
    {
        $url = 'http://localhost:84/projeto%202023/pizzaria/';

        return $url . $arquivo;
    }

    require buscaArquivo("/scripts/helpers/importa.php");
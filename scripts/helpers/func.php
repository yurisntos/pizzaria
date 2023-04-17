<?php
    function listaDados($sql, $parametros = []) {
        $stmt = CON->prepare($sql);
        $stmt->execute($parametros);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function buscaItem($sql, $parametros = []) { 
        $stmt = CON->prepare($sql);
        $stmt->execute($parametros);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
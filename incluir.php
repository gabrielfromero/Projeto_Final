<?php

include_once ('comum.php');

$con = novaConexao();

if (count($_GET) > 0) {

    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';

    echo 'teste';

    if (isset($_GET['ativo'])) {
        $ativo = 1;
    } else {
        $ativo = 0;
    }

    $sql = $con->prepare('INSERT INTO conta (usuario, senha) VALUES (?,?)');
    $sql->bind_param('sssi', $_GET['usuario'], $_GET['senha']);


    if ($sql->execute()) {
        $msg = 'Deu certo';
//        echo '<h2>Sucesso<h2>';
    } else {
        $msg = 'Não deu certo';
        echo '<pre>';
        var_dump($sql->error_list);
        echo '</pre>';
        exit;
    }
    header('location:index.php?msg='. $msg);
}
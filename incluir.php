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

    $sql = $con->prepare('INSERT INTO conta (nome, endereco, telefone, email, cpf, rg, sexo) VALUES (?,?,?,?,?,?,?)');
    $sql->bind_param('ssssssi', $_GET['nome'], $_GET['endereco'], $_GET['telefone'], $_GET['email'], $_GET['cpf'], $_GET['rg'], $_GET['sexo']);


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
<?php

include_once ('comum.php');

$con = novaConexao();

if (count($_POST) > 0) {

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    echo 'teste';



    if (isset($_POST['ativo'])) {
        $ativo = 1;
    } else {
        $ativo = 0;
    }
    
//    $senha = sha1($_POST['senha1']);

    $sql = $con->prepare('INSERT INTO conta (nome, endereco, telefone, email, cpf, rg, sexo, senha2) VALUES (?,?,?,?,?,?,?,?)');
    $sql->bind_param('ssssssis', $_POST['nome'], $_POST['endereco'], $_POST['telefone'], $_POST['email'], $_POST['cpf'], $_POST['rg'], $_POST['sexo'], $_POST['senha2']);

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
    header('location:index.php?msg=' . $msg);
}
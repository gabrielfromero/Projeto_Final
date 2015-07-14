<?php

session_start();
include('comum.php');

$con = novaConexao();

$sql = $con->prepare('SELECT id, nome, email, senha2 FROM conta WHERE email LIKE ?');

$email = $_POST['email'];
$senha = ($_POST['senha']);

$sql->bind_param('s', $email);
$sql->execute();
$conta = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

var_dump($conta);

if (count($conta)) {
    if ($conta[0]['senha2'] == $senha) {
        $_SESSION['conta'] = [
            'id' => $conta[0]['id'],
            'nome' => $conta[0]['nome'],
            'email' => $conta[0]['email'],
        ];
    }
}
header('location:index.php?p=user-welcome');

?>
<?php


include_once ('comum.php');

$con = novaConexao();

$sql = $con->prepare('CADASTRO FROM conta WHERE ID ?');





<?php


include_once ('comum.php');

$con = novaConexao();

$sql = $con->prepare('DELETE FROM conta WHERE ID ?');





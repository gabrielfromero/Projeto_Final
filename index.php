<?php
session_start();
include ('comum.php');

$con = novaConexao();

$sql = $con->prepare('select * from conta');
$sql->execute();
$sql->bind_result($id, $nome, $endereco, $telefone, $email, $cpf, $rg, $sexo, $senha);
include_once ('comum.php');
?>
<html>
    <head>
        <title>Projeto Final</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div align="center">
                    <img src="img/logo1.gif" style="border-radius: 40px">
                </div>
            </div>
            <div><marquee style="font-family: fantasy" slide direction="left"><span style="color: fuchsia;">
                        <h1><b>A Melhor Empresa do Estado. Os Melhores Produtos com o Melhor Suporte do Mercado!
                            </b></h1></span></marquee>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin: 10px">
                <ul>
                    <li class="btn-primary col-md-4" align="center"> 
                        <span class="icon-bar">
                            <a style="text-decoration: none; color: #000" href="computadores.php"><h2>Computadores</h2></a></span>
                    </li>
                    <li class="btn-primary col-md-4" align="center">
                        <span class="icon-bar">
                            <a  style="text-decoration: none; color: #000" href="pecas.php"><h2>Peças</h2></a></span>
                    </li>
                    <li class="btn-primary col-md-4" align="center">
                        <span class="icon-bar">
                            <a style="text-decoration: none; color: #000" href="suporte.php"><h2>Suporte</h2></a></span>
                    </li>
                </ul>
            </div>
        <div align="center" class="col-lg-5" style="margin: 10px">
            <div>
                <form class="form-inline" method="GET" action="busca.php">
                    <div class="form-group">
                        <label for="exampleInputName2" style="color: white">Campo de Busca</label>
                        <input type="text" style="margin: 7px" class="form-control" id="consulta" name="consulta" placeholder="Digite sua busca">

                    </div>
                    <button type="submit" class="btn btn-success">Buscar</button>
                </form>
            </div>
            <div class="jumbotron">
                <?php if (!empty($_SESSION['conta']['id'])) { ?>
                    <h4> Bem vindo, <?php echo $_SESSION['conta']['nome'] ?>!</h4>
                    <a href="logoff.php">Sair</a>
                <?php } else { ?>
                    <form class="form-inline" style="margin-top:08px" action="login.php" method="POST">
                        <div class="form-group">
                            <label class="col-sm-5 control-label" id="user">E-mail</label>
                            <div class="col-sm-7">
                                <input type="email" name="email" class="form-control" placeholder="Login">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" id="senha">Senha</label>
                            <div class="col-sm-7">
                                <input type="password" name="senha" class="form-control" placeholder="Senha">
                            </div>
                        </div> 
                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="form-group">
                            <button style="margin: 5px"  type="submit" class="btn btn-info" id="login">Entrar</button>
                            <br>
                            <a  href="cadastro.php" style="color: #000"><button style="margin: 5px"type="button" class="btn btn-info">Criar Cadastro</button></a>                 
                        </div>
                    </form>
                <?php } ?>
            </div>
            <div class="row" style="background-color: #bce8f1" align="center">
                <h2>Carrinho de Compras</h2>
                <br>
                <ul>
                    <a><li><h4>Produto 1</h4></li></a>
                    <br>
                    <a><li><h4>Produto 2</h4></li></a>
                    <br>
                    <a><li><h4>Produto 3</h4></li></a>
                    <br>
                    <a><li><h4>Produto 4</h4></li></a>
                    <br>
                    <a><li><h4>Produto 5</h4></li></a>
                </ul>
            </div>
        </div>
        <div class="col-md-6"  style="margin: 10px">
            <div class="row" style="background-color: white">
                <ul><h3 style="font-family: inherit; color: blue"><b>Lançamentos</b></h3></ul>
                <ul>
                    <li><h4>Computador Dell i10</h4>
                        <img src="img/pc_1.jpg" height="200">
                        <button type="button" id="compra1" class="btn btn-danger">Comprar</button> 
                        <h5>Este Computador é uma super máquina da revolução moderna, com 50Gb de Memória Ram e seu processador de 10 núcleos de processameto.</h5>
                    </li>
                    <li><h4>Computador Lenovo i5</h4>
                        <img src="img/pc_2.jpg" height="250">
                        <button type="button" id="compra2" class="btn btn-danger">Comprar</button>
                        <h5>Esta máquina de uso pessoal é perfeita para o seu dia-a-dia com seu design futuristico e seu poder de armazento altíssimo.</h5>
                    </li>
                    <li><h4>Computador Apple</h4>
                        <img src="img/pc_3.jpg" height="300">
                        <button type="button" id="compra3" class="btn btn-danger">Comprar</button>
                        <h5>Este é o mais novo lançamento da Apple, com seu super processador você poderá jogar os melhores jogos.</h5>    
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" align="center" style="color: red">
            <h3>Site criado em Julho de 2015 por [Gabriel Faber Romero]
                <br> 
                Copyright © 2003-2015. O design deste site é uma cortesia do [Mestre Gabriel].</h3>
        </div>
    </div>
    <script>
        $('.btn-danger').click(function () {
            alert("Deseja comprar este produto?");
        })
    </script>
</body>
</html>


<?php ?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>        
    </head>
    <body>
        <div align="center" style="color: blue"><h1>Digital Computer</h1></div>
        <div class="container" style="background-color: lightskyblue">
            <div class="nav nav-justified" style="margin: 10px" align="center">
                <div class="col-sm-4"><h2>Computadores</h2></div>
                <div class="col-sm-4"><h2>Peças</h2></div>
                <div class="col-sm-4"><h2>Suporte</h2></div>
            </div>
            <div align="center"  class="col-lg-4" style="margin: 10px">
                <div class="jumbotron">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Usuário</label>
                    <div class="col-sm-10">
                        <input type="text" name="login" class="form-control" placeholder="Login">
                    </div>
                </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" name="senha"class="form-control" placeholder="Senha">
                    </div>
                </div>
                    <br>
                <button  type="button" class="btn btn-success">Entrar</button>
                <br>
                <br>
                <br>
                </div>
                <div class="row" style="background-color: #bce8f1" align="center">
                    <h2>Carrinho de Compras</h2>
                    <br>
                    <ul>
                        <li><h4>Produto 1</h4></li>
                        <br>
                        <li><h4>Produto 2</h4></li>
                        <br>
                        <li><h4>Produto 3</h4></li>
                        <br>
                        <li><h4>Produto 4</h4></li>
                        <br>
                        <li><h4>Produto 5</h4></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="background-color: darkcyan">
                    <ul><h3 style="font-family: inherit">Lançamentos</h3></ul>
                    <ul>
                        <li><h4>Computador Dell i3</h4>
                            <img src="img/pc_1.jpg" height="200">
                            <h5>Este Computador é uma super máquina da revolução moderna, com 50Gb de Memória Ram e seu processador de 10 núcleos de processameto.</h5>
                        </li>
                        <li><h4>Computador Lenovo i5</h4>
                            <img src="img/pc_2.jpg" height="250">
                            <h5>Esta máquina de uso pessoal é perfeita para o seu dia-a-dia com seu design futuristico e seu poder de armazento altíssimo.</h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>


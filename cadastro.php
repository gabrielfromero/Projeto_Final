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
        <!--<div align="center" style="color: cyan; font-family: cursive"><h1><b>Digital Computer</b></h1></div>-->
        <div class="container">
            <a href="index.php"><img src="img/logo1.gif" style="border-radius: 40px"></a>

            <div><marquee style="font-family: fantasy;" slide direction="left"><span style="color: fuchsia;">
                        <h1><b>A Melhor Empresa da Galaxia. Os Melhores Produtos com o Melhor Suporte do Mercado!
                            </b></h1></span></marquee>
            </div>
        </div>
        <div class="container"
             <head>
            <div class="row" style="margin: 10px">
                <ul>
                    <li class="btn-primary col-md-4" align="center" style="text-decoration-color: #28a4c9" 
                        <span class="icon-bar">
                            <a href="http://www.americanas.com.br/linha/267889/informatica/computadores-e-all-in-one"style="color:#000"><h2>Computadores</h2></a></span>
                    </li>
                    <li class="btn-primary col-md-4" align="center">
                        <span class="icon-bar">
                            <a href="https://www.balaodainformatica.com.br/Produtos/Inform%C3%A1tica/Componentes-e-Pe%C3%A7as"style="color: #000"><h2>Peças</h2></a></span>
                    </li>
                    <li class="btn-primary col-md-4" align="center">
                        <span class="icon-bar">
                            <a href="http://www.smartsupport.com.br/" style="color: #000"><h2>Suporte</h2></a></span>
                    </li>
                </ul>
            </div>
        </head>

        <div class="container" style="background-color: #269abc">
            <div class="col-lg-12" style="margin: 10px">
                <div>
                    <div class= col-md-6>
                        <img class="form-inline">
                    </div>
                    <div class= col-md-4></div>
                </div>
                <head>
                <div class="container">
                    <div class="col-md-12">
                        <form class="form-horizontal" method="GET" action="incluir.php">
                            <div class="form-group" style="margin-top: 30px">
                                <label class="col-sm-2 control-label " id="nome">Nome</label>
                                <div class="col-sm-5">
                                    <input type="text" name="nome"class="form-control" placeholder="Nome">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" id="end">Endereço</label>
                                <div class="col-sm-8">
                                    <input type="text" name="endereco"class="form-control" placeholder="Endereço">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" id="tel">Telefone</label>
                                <div class="col-sm-4">
                                    <input type="text" name="telefone"class="form-control" placeholder="Telefone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" id="email">E-mail</label>
                                <div class="col-sm-8">
                                    <input type="text" name="email"class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" id="cpf">CPF</label>
                                <div class="col-sm-4">
                                    <input type="text" name="cpf"class="form-control" placeholder="000.000.000-00">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" id="rg">RG</label>
                                <div class="col-sm-3">
                                    <input type="text" name="rg" id="input-endereco" class="form-control" placeholder="0000000000">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" id="sexo">Sexo</label>
                                <div class="col-sm-3">
                                    <label class="radio-inline" id="genero">
                                        <input name="sexo" type="radio" value="m"> Masculino
                                    </label>
                                    <label class="radio-inline">
                                        <input name="sexo" type="radio" value="f"> Feminino
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Digite uma Senha</label>
                                <div class="col-sm-2">
                                    <input type="password" name="senha"class="form-control" placeholder="****">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Confirme a sua senha</label>
                                <div class="col-sm-2">
                                    <input type="password" name="senha" class="form-control" placeholder="****">
                                </div>
                            </div>
                            <div class="form-group" style="margin: 10px">
                                <div class="col-sm-offset-2 col-sm-3">
                                    <a id="cadastro" ><button class="btn btn-success" type="button" >Cadastrar</button></a>
                                    <?php if (isset($_GET['msg'])) { ?>
                                        <span>//<?php echo $_GET['msg']; ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" align="center" style="color: red">
            <h3>Site criado em Julho de 2015 por [Gabriel Faber Romero]

                Copyright © 2003-2015.<br>O design deste site é uma cortesia do [Mestre Gabriel].</h3>
        </div>
    </div>

</body>
<script>
    $('#cadastro').click(function () {
        var valido = true;
        if ($('#nome').val() == '') {
            valido = false;
            alert('Preencha o nome');
        }
        if ($('#end').val() == '') {
            valido = false;
            alert('Preencha o endereço');
        }
        if ($('#tel').val() == '') {
            valido = false;
            alert('Preencha o endereço');
        }
        if ($('#email').val() == '') {
            valido = false;
            alert('Preencha o e-mail');
        }
        if ($('#cpf').val() == '') {
            valido = false;
            alert('Preencha o CPF');
        }
        if ($('#rg').val() == '') {
            valido = false;
            alert('Preencha o seu RG');
        }
        if (!$('#opt-masc').is(':checked') && !$('#opt-fem').is(':checked')) {
            valido = false;
            alert('Escolha um sexo');
        }
        return valido;
    });
    function confirmaCadastrar(id) {
     if (confirm("Deseja Cadastrar?")) {
     window.location.href = 'cadastrar.php?id=' + id
     }
     }

</script>
</html>
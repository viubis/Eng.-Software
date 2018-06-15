<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de produtor</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="styles/bootstrap4/bootstrap.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
          type='text/css'>
    <link rel="stylesheet" href="styles/formularios_style.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon-72.png">
    <link rel="apple-touch-icon-precomposed" href="images/icon-16.png">

</head>

<body>


<!-- Top content -->
<div class="top-content">
    <div class="logo_icon"><img src="images/logoSite.png" alt=""></div>
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <div class="description">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-lg-3 form-box">
                    <form role="form" action="" method="post" data-toggle="validator" class="registration-form">

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Passo 1 / 3</h3>
                                    <p>Dados da empresa:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-user-plus"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="email" name="form-email" placeholder="Email..."
                                           class="form-first-name form-control" required id="email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="senha">Senha</label>
                                    <input type="password" minlength="8" name="form-senha" placeholder="Senha..."
                                           class="form-first-name form-control" required id="senha">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="confSenha">Confirmação de senha</label>
                                    <input type="password" minlength="8" name="form-confirmacao-senha"
                                           placeholder="Confirmação de senha..."
                                           class="form-first-name form-control" data-match="#senha" required
                                           id="confSenha">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="razaoSocial">Razão social</label>
                                    <input type="text" name="form-razao-social" placeholder="Razão social..."
                                           class="form-first-name form-control" required id="razaoSocial">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="cnpj">CNPJ</label>
                                    <input type="text" name="form-cnpj" placeholder="CNPJ..."
                                           class="form-last-name form-control" required id="cnpj">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="nomeFantasia">Nome fantasia</label>
                                    <input type="text" name="form-nome-fantasia" placeholder="Nome fantasia..."
                                           class="form-first-name form-control" required id="nomeFantasia">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="telefoneComercial">Telefone Comercial</label>
                                    <input type="tel" name="form-telefone" placeholder="Telefone Comercial..."
                                           class="form-first-name form-control" required id="telefoneComercial">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="valorMinimo">Valor mínimo para frete grátis</label>
                                    <input type="number" min="1" max="999" name="form-valor"
                                           placeholder="Valor mínimo para frete grátis..."
                                           class="form-first-name form-control" required id="valorMinimo">
                                </div>
                                <button type="button" class="btn btn-next">Próximo</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Passo 2 / 3</h3>
                                    <p>Endereço da sua empresa:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="CEP">CEP</label>
                                    <input type="text" name="form-cep" placeholder="CEP"
                                           class="form-first-name form-control" required id="CEP">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Rua">Rua</label>
                                    <input type="text" name="form-rua" placeholder="Rua"
                                           class="form-first-name form-control" required id="Rua">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Número">Número</label>
                                    <input type="number" min="1" name="form-numero" placeholder="Número"
                                           class="form-first-name form-control" id="Número">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Complemento">Complemento</label>
                                    <input type="text" name="form-complemento" placeholder="Complemento"
                                           class="form-first-name form-control" id="Complemento">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="estados">Estados</label>
                                    <select class="form-control" id="estados">
                                        <option value=""></option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="cidades">Cidades</label>
                                    <select class="form-control" id="cidades">
                                    </select>

                                </div>
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="button" class="btn btn-next">Próximo</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Passo 3 / 3</h3>
                                    <p>Informações bancárias:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="idBanco">ID do banco</label>
                                    <input type="text" name="form-id-banco" placeholder="ID do banco"
                                           class="form-facebook form-control" required id="idBanco">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="numeroConta">Número da conta</label>
                                    <input type="text" name="form-numero-conta" placeholder="Número da conta"
                                           class="form-facebook form-control" required id="numeroConta">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="agencia">Agência</label>
                                    <input type="text" name="form-agencia" placeholder="Agência"
                                           class="form-facebook form-control" required id="agencia">
                                </div>

                                <div class="form-group">
                                    <input id="contrato" name="contrato" type="checkbox" value="nao">
                                    <label for="contrato">Li e aceito os termos de uso.</label>
                                </div>
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="submit" class="btn">Cadastre-me!</button>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-lg-3">

                <div
                    class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                    <div class="copyright_content">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        Todos os direitos reservados | Esse site foi feito com <i class="fa fa-heart"
                                                                                  aria-hidden="true"></i> pela <a
                            href="#" target="_blank">Weiche Technologie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="js/script_tela_cadastro_produtor.js"></script>
<script src="js/validator.min.js"></script>
<!--[if lt IE 10]>
<script src="js/placeholder_tela_cadastro_produtor.js"></script>
<![endif]-->

</body>

</html>

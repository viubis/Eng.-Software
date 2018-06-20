<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo cartão</title>

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
                    <form role="form" action="" method="post" class="registration-form">
                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Cadastrar novo cartão de crédito:</h3>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="logoscartoes">
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_5.png" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_6.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Nome do titular</label>
                                    <input type="text" name="form-facebook" placeholder="Nome do Titular do cartão"
                                           class="form-facebook form-control" id="idnome">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Número do cartão</label>
                                    <input type="text" name="form-facebook" placeholder="Número do cartão"
                                           class="form-facebook form-control" id="idBanco">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Validade</label>
                                    <input type="text" name="form-facebook" placeholder="Validade"
                                           class="form-facebook form-control" id="validade">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="tipo">Tipo de cartão </label>
                                    <select class="form-control" id="tipo">
                                        <option selected disabled>Tipo de cartão</option>
                                        <option value="credito">Crédito</option>
                                        <option value="debito">Débito</option>
                                    </select>
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

<!--[if lt IE 10]>
<script src="js/placeholder_tela_cadastro_produtor.js"></script>
<![endif]-->

</body>

</html>


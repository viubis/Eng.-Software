<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Cadastro de consumidor</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
          type='text/css'>
    <link rel="stylesheet" href="{{asset('css/formularios_style.css')}}">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/icon-144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/icon-114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/icon-72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/icon-16.png')}}">

</head>

<body>


<!-- Top content -->
<div class="top-content">
    <div class="logo_icon"><img src="{{asset('images/logoSite.png')}}" alt=""></div>
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
                                    <h3>Passo 1 / 3</h3>
                                    <p>Meus dados:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-user-plus"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="nome">Nome</label>
                                    <input type="text" name="nome" placeholder="Nome..."
                                           class="form-first-name form-control" id="nome">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="sobrenome">Sobrenome</label>
                                    <input type="text" name="sobrenome" placeholder="Sobrenome..."
                                           class="form-first-name form-control" id="sobrenome">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="cpf">CPF</label>
                                    <input type="text" name="cpf" placeholder="CPF..."
                                           class="form-last-name form-control" id="cpf">
                                </div>
                                
                                <div class="form-group">
                                    <label class="sr-only" for="sexo">Sexo</label>
                                    <select class="form-control" id="sexo" name="sexo" required>
                                        <option disabled selected> Sexo</option>
                                        <option value="feminino">Feminino</option>
                                        <option value="masculino">Masculino</option>
                                    </select>
                                </div>

                                <button type="button" class="btn btn-next">Próximo</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Passo 2 / 3</h3>
                                    <p>Endereço:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="CEP">CEP</label>
                                    <input type="text" name="cep" placeholder="CEP"
                                           class="form-first-name form-control" id="CEP">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Rua">Rua</label>
                                    <input type="text" name="rua" placeholder="Rua"
                                           class="form-first-name form-control" id="Rua">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Número">Número</label>
                                    <input type="text" name="numero" placeholder="Número"
                                           class="form-first-name form-control" id="Número">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Bairro">Bairro</label>
                                    <input type="text" name="bairro" placeholder="Bairro"
                                           class="form-first-name form-control" id="Bairro">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Complemento">Complemento</label>
                                    <input type="text" name="complemento" placeholder="Complemento"
                                           class="form-first-name form-control" id="Complemento">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="estados">Estados</label>
                                    <select class="form-control" id="estados" name="estado">
                                        @foreach($estados as $estado)
                                            <option value="{{$estado->id}}">{{$estado->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="cidades">Cidades</label>
                                    <select class="form-control" id="cidades" name="cidade">
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
                                    <p>Cartão de credito:</p>
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
                                    <label class="sr-only" for="titular">Nome do titular</label>
                                    <input type="text" name="titular" placeholder="Nome do Titular do cartão"
                                           class="form-facebook form-control" id="titular">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="NumeroCartao">Número do cartão</label>
                                    <input type="text" name="numero" placeholder="Número do cartão"
                                           class="form-facebook form-control" id="NumeroCartao">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="CodSeg">Número do cartão</label>
                                    <input type="text" name="codigo" placeholder="Código de segurança"
                                           class="form-facebook form-control" id="CodSeg">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Validade">Validade</label>
                                    <input type="text" name="validade" placeholder="Validade"
                                           class="form-facebook form-control" id="validade">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="tipo">Tipo de cartão </label>
                                    <select class="form-control" id="tipo" name="tipo">
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
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('css/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('js/retina-1.1.0.min.js')}}"></script>
<script src="{{asset('js/script_tela_cadastro_produtor.js')}}"></script>

<!--[if lt IE 10]>
<script src="{{asset('js/placeholder_tela_cadastro_produtor.js')}}"></script>
<![endif]-->

</body>

</html>

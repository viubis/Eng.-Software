<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Cadastro de produtor</title>

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
        @if(isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $erro):
                    <p>{{$erro}}</p>
                 @endforeach 
            </div>
        @endif
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
                    <form role="form" action="{{route('cadastrarProdutor')}}" method="post" data-toggle="validator" class="registration-form">

                        <!-- Esse csrf ta bugando mais precisa dele -->


                        <fieldset>

                            @csrf

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
                                    <label class="sr-only" for="razaoSocial">Razão social</label>
                                    <input type="text" name="razaoSocial" placeholder="Razão social..."
                                           class="form-first-name form-control" required id="razaoSocial" value="{{old('razaoSocial')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="cnpj">CNPJ</label>
                                    <input type="text" name="cnpj" placeholder="CNPJ..."
                                           class="form-last-name form-control" required id="cnpj" data-mask="00.000.000/0000-00" value="{{old('cnpj')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="nomeFantasia">Nome fantasia</label>
                                    <input type="text" name="nomeFantasia" placeholder="Nome fantasia..."
                                           class="form-first-name form-control" required id="nomeFantasia" value="{{old('nomeFantasia')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="telefoneComercial">Telefone Comercial</label>
                                    <input type="tel" name="telefone" placeholder="Telefone Comercial..."
                                           class="form-first-name form-control" required id="telefoneComercial" data-mask="(00) 00000-0000" value="{{old('telefone')}}" required>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="raio_entrega">Raio de entrega (em km)</label>
                                    <input type="number" min="1"  name="raioEntrega"
                                           placeholder="Raio de entrega (em km)..."
                                           class="form-first-name form-control" required id="raio_entrega" value="{{old('raioEntrega')}}">
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
                                    <input type="text" name="cep" placeholder="CEP"
                                           class="form-first-name form-control" data-mask="00.000-000" required id="CEP" value="{{old('cep')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Rua">Rua</label>
                                    <input type="text" name="rua" placeholder="Rua"
                                           class="form-first-name form-control" required id="Rua" value="{{old('rua')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Número">Número</label>
                                    <input type="number" min="1" name="numero" placeholder="Número"
                                           class="form-first-name form-control" id="Número" value="{{old('numero')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Bairro">Bairro</label>
                                    <input type="text" name="bairro" placeholder="Bairro"
                                           class="form-first-name form-control" id="Bairro" value="{{old('bairro')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Complemento">Complemento</label>
                                    <input type="text" name="complemento" placeholder="Complemento"
                                           class="form-first-name form-control" id="Complemento" value="{{old('complemento')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="estados">Estados</label>
                                    <select class="form-control" name="estado" id="estados">
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
                                    <p>Informações bancárias:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="idBancos">ID do banco</label>
                                    <select class="form-control" name="banco" id="idBancos">
                                        @foreach($bancos as $banco)
                                            <option value="{{$banco->id}}">{{$banco->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="sr-only" for="numeroConta">Número da conta</label>
                                            <input type="text" name="numeroConta" placeholder="Número da conta"
                                                   class="form-facebook form-control" required id="numeroConta" value="{{old('numeroConta')}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="sr-only" for="dVerif">Dígito verificador</label>
                                            <input type="text" name="digitoConta" placeholder="Dígito verificador"
                                                   class="form-facebook form-control" required id="dVerif" maxlength="1" value="{{old('digitoConta')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="sr-only" for="agencia">Agência</label>
                                            <input type="text" name="agencia" placeholder="Agência"
                                                   class="form-facebook form-control" required id="agencia" value="{{old('agencia')}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="sr-only" for="dVerif">Dígito verificador</label>
                                            <input type="text" name="digitoAgencia" placeholder="Dígito verificador"
                                                   class="form-facebook form-control" required id="dVerif" maxlength="1" value="{{old('digitoAgencia')}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input id="contrato" name="contrato" type="checkbox" value="false">
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
                        Copyright &copy;<script>document.write(new Date().getFullYear().toString());</script>
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
<script src="{{asset('js/validator.min.js')}}"></script>
<script src="{{asset('plugins/jquery-plugin-mask/jquery.mask.js')}}"></script>
</body>

</html>

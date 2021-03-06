<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo endereço</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css')}}" rel="stylesheet"
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
                    <form role="form" action="{{route('consumidor.cadastrar.endereco')}}" method="post" class="registration-form">
                        <fieldset>
                            @csrf
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Cadastrar novo endereço</h3>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="CEP">CEP</label>
                                    <input type="text" name="cep" placeholder="CEP"
                                           class="form-first-name form-control" data-mask="00.000-000" id="CEP">
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
                                    @foreach($estados as $estado)
                                        <option value="{{$estado->id}}">{{$estado->nome}}</option>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="cidades">Cidades</label>
                                    <select class="form-control" name="cidade" id="cidades">
                                    </select>
                                </div>
                                <button type="submit" class="btn">Adicionar</button>
                                <button type="button" class="btn btn-previous">Cancelar</button>
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
<script src="{{asset('plugins/jquery-plugin-mask/jquery.mask.js')}}"></script>

</body>

</html>

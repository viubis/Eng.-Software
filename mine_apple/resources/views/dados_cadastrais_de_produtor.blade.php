<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Mineapple</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mineapple shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dados_cadastrais_de_produtor_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/header_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">


    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/icon-144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/icon-114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/icon-72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/icon-16.png')}}">

</head>

<body>

<div class="super_container">

    <!-- Header -->
    @if(Auth::check())
        @if(Auth::user()->consumidor != null)
            @include('layouts.header_consumidor')
        @elseif(Auth::user()->produtor != null)
            @include('layouts.header_produtor')
        @elseif(Auth::user()->administrador != null)
            @include('layouts.header_administrador')
        @endif
    @else

        @include('layouts.header_usuario')
    @endif


    <!--<section>-->

    <div class="top-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_title">Meus dados</div>
                    <form action="{{route('produtor.alterar')}}" method="POST">
                        @csrf
                        <label class="my-0 mr-2" style="font-size: 20px">Dados da conta <i class="fa fa-at"></i>
                        </label>
                        <div class="pb-0" id="line"></div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{Auth::user()->email}}" disabled>
                            </div>
                            <!-- <div class="form-group col-md-6">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="{{Auth::user()->password}}">
                            </div> -->
                        </div>


                        <label class="my-0 mr-2" style="font-size: 20px">Dados pessoais <i
                                class="fa fa-user-circle"></i> </label>
                        <div class="pb-0" id="line"></div>
                        <div class="form-group">
                            <label for="nomeFantasia">Nome fantasia</label>
                            <input type="text" class="form-control" id="nomeFantasia" name="nomeFantasia" placeholder="Nome Fantasia" value="{{Auth::user()->produtor->nomeFantasia}}">
                        </div>
                        <div class="form-group">
                            <label for="razaoSocial">Razão Social</label>
                            <input type="text" class="form-control" id="razaoSocial" name="razaoSocial" placeholder="Razao Social" value="{{Auth::user()->produtor->razaoSocial}}">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" class="form-control" id="cnpj" data-mask="00.000.000/0000-00" name="cnpj" placeholder="CNPJ" value="{{Auth::user()->produtor->cnpj}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telefoneComercial">Telefone comercial</label>
                                <input type="text" class="form-control" id="telefoneComercial"
                                       placeholder="Telefone" value="{{Auth::user()->produtor->telefone}}" name="telefoneComercial" data-mask="(00) 00000-0000">
                            </div>
                        </div>


                        <label class="my-0 mr-2" style="font-size: 20px">Contas bancárias <i
                                class="fa fa-credit-card"></i></label>
                        <div class="pb-0" id="line"></div>
                        @foreach($contas as $conta)
                        @php $banco = $bancos->where('id', '=', $conta->banco_id)->first() @endphp 
                        <div class="form-row">
                            <div class="form-group  col-md-6">
                                <p style="color: #000000; font-size: 15px">$banco->nome</p>
                                <p style="color: #000000; font-size: 15px; margin-top: -15px">$conta->numero_conta</p>
                            </div>
                            <div class="form-group  col-md-3">
                                <a href="#">Excluir</a>
                            </div>
                            <div class="form-group  col-md-3">
                                <a href="#">Adicionar conta</a>
                            </div>
                        </div>
                        @endforeach

                        @php $cidade = $cidades->where('id', '=', $endereco->cidade_id)->first() @endphp
                        @php $estado = $estados->where('id', '=', $cidade->estado_id)->first() @endphp
                        
                        <label class="my-0 mr-2" style="font-size: 20px">Endereço <i class="fas fa-map-marker-alt"></i></label>
                        <div class="pb-0" id="line"></div>
                        <div class="form-row">
                            <div class="form-group  col-md-6">
                                <p style="color: #000000; font-size: 15px">{{$endereco->rua}}, {{$endereco->bairro}}, {{$endereco->numero}}</p>
                                <p style="color: #000000; font-size: 15px; margin-top: -15px">{{$endereco->numero_cep}}, {{$estado->nome}}, {{$cidade->nome}}</p>
                            </div>
                            <div class="form-group  col-md-6">
                                <a href="#">Alterar</a>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    @include('layouts.footer')

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div
                        class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content">
                            Copyright &copy;<script>document.write(new Date().getFullYear().toString());</script>
                            Todos os direitos reservados | Esse site foi feito com <i class="fa fa-heart"
                                                                                      aria-hidden="true"></i> pela <a
                                href="#" target="_blank">Weiche Technologie</a>
                        </div>
                        <div class="logos ml-sm-auto">
                            <ul class="logos_list">
                                <li><a href="#"><img src="{{asset('images/logos_1.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('images/logos_2.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('images/logos_3.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('images/logos_4.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('css/bootstrap4/popper.js')}}"></script>
<script src="{{asset('css/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('plugins/jquery-plugin-mask/jquery.mask.js')}}"></script>
</body>

</html>

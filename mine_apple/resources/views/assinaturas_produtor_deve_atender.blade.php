<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Mineapple</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mineapple shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/assinaturas_produtor_deve_atender_style.css')}}">
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


    <main>

        <div class="top-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="contact_form_title text-center col-12">Assinaturas</div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="tabela">
                                <thead><!--class="thead-light"-->
                                <tr>
                                    <th scope="col" class="corlinha">ID assinatura</th>
                                    <th scope="col" class="corlinha">Cliente</th>
                                    <th scope="col" class="corlinha">Produto(s)</th>
                                    <th scope="col" class="corlinha">Quantidade</th>
                                    <th scope="col" class="corlinha">Dias de entrega</th>
                                    <th scope="col" class="corlinha">Frequência</th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach($assinaturas as $assinatura)
                                <tr>
                                    @php
                                        $produtos = $assProdutos->where('assinatura_id', '=', $assinatura->id);
                                    @endphp
                                    <th scope="row" id="idAssinatura"><u>{{$assinatura->id}}</u></th>
                                    <td id="cliente">
                                        @php
                                            $compra = \mine_apple\Compra::where('id', '=', $assinatura->compra_id)->first();
                                            $cliente = \mine_apple\Consumidor::where('usuario_id', '=', $compra->consumidor_id)->first();
                                        @endphp
                                        {{$cliente->nome}} {{$cliente->sobrenome}}
                                    </td>
                                    <td id="produtos">
                                        @foreach($produtos as $produto)
                                            @php
                                               $prodInfos = $prodInfo->where('id', '=', $produto->produto_id)->first();
                                            @endphp
                                            {{$prodInfos->nome}}
                                            @if($produto=!end($produtos))
                                                <hr>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td id="quantidade">
                                        @foreach($produtos as $produto)
                                            {{$produto->quantidade}}
                                            @if($produto=!end($produtos))
                                                <hr>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td id="diasEntrega">
                                        @foreach($produtos as $produto)
                                            @if($produto->seg==true)
                                                Segunda.
                                            @endif
                                            @if($produto->ter==true)
                                                Terça.
                                            @endif
                                            @if($produto->qua==true)
                                                Quarta.
                                            @endif
                                            @if($produto->qui==true)
                                                Quinta.
                                            @endif
                                            @if($produto->sex==true)
                                                Sexta.
                                            @endif
                                            @if($produto->sab==true)
                                                Sábado.
                                            @endif
                                            @if($produto->dom==true)
                                                Domingo.
                                            @endif
                                            @if($produto=!end($produtos))
                                                <hr>
                                            @endif
                                        @endforeach

                                    </td>
                                    <td id="frequencia">
                                        @foreach($produtos as $produto)
                                            {{$produto->frequencia}} por semana.
                                            @if($produto=!end($produtos))
                                                <hr>
                                            @endif
                                        @endforeach
                                    </td>
                                    <th scope="row"><a href=""><u>Mais detalhes</u></a></th>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>


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
</body>

</html>

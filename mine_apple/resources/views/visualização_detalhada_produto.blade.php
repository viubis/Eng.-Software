<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Abacaxi</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/product_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/product_responsive.css')}}">

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

    <!-- Single Product -->

    <div class="single_product">
        <div class="container">
            <div class="row">
                <div class="row col-md-6">
                    <div class="row">
                        <!-- Images -->
                        <div class="col-md-4">
                            <ul class="image_list">
                                <li data-image="{{asset($fotos[0]->path)}}"><img src="{{asset($fotos[0]->path)}}" alt=""></li>
                                <li data-image="{{asset($fotos[1]->path)}}"><img src="{{asset($fotos[1]->path)}}" alt=""></li>
                                <li data-image="{{asset($fotos[2]->path)}}"><img src="{{asset($fotos[2]->path)}}" alt=""></li>
                            </ul>
                        </div>

                        <!-- Selected Image -->
                        <div class="col-md-8">
                            <div class="image_selected"><img src="{{asset($fotos[0]->path)}}" alt=""></div>
                        </div>
                    </div>
                    <div class="frete">
                        <div class="row">
                            <div class="col-md-5">
                                <p> Calcule o frete:</p>
                            </div>
                            <div class="col-md-3">
                                <label class="sr-only" for="frete">Frete</label>
                                <input type="text" id="frete" name="frete">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn">Ok</button>
                            </div>
                        </div>
                        <div class="value">Valor: 10,00</div>
                    </div>
                </div>
                <!-- Description -->
                <div class="col-md-4">
                    <div class="product_description">
                        <div class="product_category">{{$categoria->nome}}</div>
                        <div class="product_name">{{$produto->nome}}</div>
                        <div class="product_text"><p>Produzido e entregue por: <br/> {{$produtor->nomeFantasia}}</p></div>
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                                <div class="product_price">{{$produto->preco}}</div>
                                <div class="clearfix" style="z-index: 1000;">

                                    <!-- Product Quantity -->
                                    <div class="product_quantity clearfix">
                                        <span>Quantidade: </span>
                                        <label class="sr-only" for="quantity_input">Qnt input</label>
                                        <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                                    class="fas fa-chevron-up"></i></div>
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                                    class="fas fa-chevron-down"></i></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="button_container">
                                    <button type="button" class="button cart_button b1"><i class="fa fa-shopping-basket fa-2x" style="margin-top: 5px;">
                                        </i>
                                        Adicionar a minha cesta</button>
                                </div>
                                <div class="button_container">
                                    <button type="button" class="button cart_button b2">Comprar</button>
                                </div>
                                <div class="product_rassurance">
                                    <p class="mb-0" style="color: black">Informações sobre o vendedor</p>
                                    <p class="local mb-0" style="color: black"><i class="fa fa-map-marker-alt fa-2x"></i> Localização</p>
                                    <p class="mt-0 mb-0">{{$cidade->nome}}, {{$estado->nome}}</p>
                                    <!-- <div class="row">
                                        <div class="col-md-4 primeiro" align="center">
                                            <i class="fas fa-sort-numeric-up fa-2x"></i><br/>420 assinaturas nos últimos 2 meses
                                        </div>
                                        <div class="col-md-4 primeiro" align="center">
                                            <i class="fas fa-comments fa-2x"></i><br/>Presta um bom atendimento
                                        </div>
                                        <div class="col-md-4" align="center">
                                            <i class="far fa-clock fa-2x"></i><br/>Entrega os produtos com atraso
                                        </div>
                                    </div> -->
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/product_custom.js')}}"></script>
</body>

</html>

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
    <link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">



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

    <div class="container">
        <div class="row">
          <div class="col">

    <!-- Banner -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
         style="width: 100%; height: 100%; overflow: hidden">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/banner_background1.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/banner_background2.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/banner_background3.png')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    </div>
        </div>
    </div>
    <!-- Characteristics -->


    <!-- Deals of the week -->

    <div class="deals_featured">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Deals -->

                    <div class="deals">
                        <div class="deals_title">Ofertas da semana</div>
                        <div class="deals_slider_container">

                            <!-- Deals Slider -->
                            <div class="owl-carousel owl-theme deals_slider">

                                <!-- Deals Item -->
                                <div class="owl-item deals_item">
                                    <div class="deals_image"><img src="{{asset('images/abacaxi.png')}}" alt="" class="img-fluid"></div>
                                    <div class="deals_content">
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_category"><a href="#">Frutas</a></div>
                                        </div>
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_name">Abacaxi
                                            <div class="deals_item_price ml-auto">
                                                <div class="product_price discount">R$ 3,00<span>unid</span></div></div>
                                            </div>
                                        </div>
                                        <div class="available">
                                            <div class="available_line d-flex flex-row justify-content-start">
                                                <div class="available_title">Disponiveis: <span>6</span></div>
                                                <div class="sold_title ml-auto">Vendidos: <span>28</span></div>
                                            </div>
                                            <div class="available_bar"><span style="width:17%"></span></div>
                                        </div>
                                       <!-- <div
                                            class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                            <div class="deals_timer_title_container">
                                                <div class="deals_timer_title">Ande logo</div>
                                                <div class="deals_timer_subtitle">Oferta acaba em:</div>
                                            </div>
                                            <div class="deals_timer_content ml-auto">
                                                <div class="deals_timer_box clearfix" data-target-time="">
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                        <span>horas</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                        <span>mins</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                        <span>segs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>

                                <!-- Deals Item -->
                                <div class="owl-item deals_item">
                                    <div class="deals_image"><img src="{{asset('images/maça.png')}}" class="img-fluid" alt=""></div>
                                    <div class="deals_content">
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_category"><a href="#">Frutas</a></div>
                                        </div>
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_name">Maçã
                                            <div class="deals_item_price ml-auto">
                                                <div class="product_price discount">R$ 5,00<span>Kg</span></div>
                                            </div>
                                            </div>
                                        </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">Disponiveis: <span>6</span></div>
                                                    <div class="sold_title ml-auto">Vendidos: <span>28</span></div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                        <!--   <div
                                               class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                               <div class="deals_timer_title_container">
                                                   <div class="deals_timer_title">Ande logo</div>
                                                   <div class="deals_timer_subtitle">Oferta acaba em:</div>
                                               </div>
                                               <div class="deals_timer_content ml-auto">
                                                   <div class="deals_timer_box clearfix" data-target-time="">
                                                       <div class="deals_timer_unit">
                                                           <div id="deals_timer2_hr" class="deals_timer_hr"></div>
                                                           <span>horas</span>
                                                       </div>
                                                       <div class="deals_timer_unit">
                                                           <div id="deals_timer2_min" class="deals_timer_min"></div>
                                                           <span>mins</span>
                                                       </div>
                                                       <div class="deals_timer_unit">
                                                           <div id="deals_timer2_sec" class="deals_timer_sec"></div>
                                                           <span>segs</span>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>-->
                                    </div>
                                </div>

                                <!-- Deals Item -->
                                <div class="owl-item deals_item">
                                    <div class="deals_image"><img src="{{asset('images/laranja-laranja.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="deals_content">
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_category"><a href="#">Frutas</a></div>
                                        </div>
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_name">Laranja
                                                <div class="deals_item_price ml-auto">
                                                    <div class="product_price discount">R$ 5,00<span>Kg</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="available">
                                            <div class="available_line d-flex flex-row justify-content-start">
                                                <div class="available_title">Disponiveis <span>6</span></div>
                                                <div class="sold_title ml-auto">Vendidos: <span>28</span></div>
                                            </div>
                                            <div class="available_bar"><span style="width:17%"></span></div>
                                        </div>
                                      <!--  <div
                                            class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                            <div class="deals_timer_title_container">
                                                <div class="deals_timer_title">Ande logo</div>
                                                <div class="deals_timer_subtitle">Oferta acaba em:</div>
                                            </div>
                                            <div class="deals_timer_content ml-auto">
                                                <div class="deals_timer_box clearfix" data-target-time="">
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer3_hr" class="deals_timer_hr"></div>
                                                        <span>horas</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer3_min" class="deals_timer_min"></div>
                                                        <span>mins</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer3_sec" class="deals_timer_sec"></div>
                                                        <span>segs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="deals_slider_nav_container">
                            <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i>
                            </div>
                            <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Featured -->
                    <div class="featured">
                        <div class="tabbed_container">
                            <div class="tabs">
                                <ul class="clearfix">
                                    <li class="active">Ofertas</li>
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>

                            <!-- Product Panel -->
                            <div class="product_panel panel active">
                                <div class="featured_slider slider">

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/banana.jpg')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">R$ 7,00<span>duzia</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">Banana</a></div>
                                                </div>
                                                <form method="post" action="/adicionar_carrinho">
                                                    @csrf
                                                    <?php $item = \mine_apple\Produto::where('id', '=', '35');

                                                    ?>
                                                <div class="product_extras">
                                                    <button class="product_cart_button" value="$item">Adicionar ao Carrinho</button>
                                                </div>
                                                </form>
                                            </div>

                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">novo</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/cenoura1.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">R$ 3,00<span>Kg</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">Cenoura</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button active">Adicionar ao carrinho
                                                    </button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">novo</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/pera.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">R$ 1,00<span>unid.</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">Pêra</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">novo</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/abobora.jpg')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">R$ 5,00<span>unid.</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">Abóbora</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">novo</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/batata-inglesa.jpg')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">R$ 3,00<span>Kg</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">Batata inglesa</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">novo</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/chuchu.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">R$ 2,00<span>Kg</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">Chuchu</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">novo</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/pimentao.jpg')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">R$ 1,00<span>unid.</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">Pimentão Vermelho</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">novo</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/tomate.jpg')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">R$ 4,00<span>Kg</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">Tomate</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">novo</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">R$</div>
                                                <div class="product_name">
                                                    <div><a href="#">Exemplo 1</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>

                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">novo</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">R$</div>
                                                <div class="product_name">
                                                    <div><a href="#">Exemplo 2</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">R$</div>
                                                <div class="product_name">
                                                    <div><a href="#">Exemplo 3</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">R$</div>
                                                <div class="product_name">
                                                    <div><a href="#">Exemplo 4</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">R$</div>
                                                <div class="product_name">
                                                    <div><a href="#">Exemplo 5</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">R$</div>
                                                <div class="product_name">
                                                    <div><a href="#">Exemplo 6</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">R$</div>
                                                <div class="product_name">
                                                    <div><a href="#">Exemplo 7</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>

                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">R$</div>
                                                <div class="product_name">
                                                    <div><a href="#">Exemplo 7</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Adicionar ao carrinho</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                            <!-- Product Panel -->

                            <div class="product_panel panel">
                                <div class="featured_slider slider">

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_1.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">$225<span>$300</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_2.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Apple iPod shuffle</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button active">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_3.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Sony MDRZX310W</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_4.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">$225<span>$300</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">LUNA Smartphone</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_5.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Canon STM Kit...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_6.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Samsung J330F...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_7.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Lenovo IdeaPad</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_8.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Digitus EDNET...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_1.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_2.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_3.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_4.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_5.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_6.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_7.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_8.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                            <!-- Product Panel -->

                            <div class="product_panel panel">
                                <div class="featured_slider slider">

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_1.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">$225<span>$300</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_2.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Apple iPod shuffle</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button active">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_3.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Sony MDRZX310W</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_4.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price discount">$225<span>$300</span></div>
                                                <div class="product_name">
                                                    <div><a href="#">LUNA Smartphone</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_5.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Canon STM Kit...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_6.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Samsung J330F...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_7.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Lenovo IdeaPad</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_8.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Digitus EDNET...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_1.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_2.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_3.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_4.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_5.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_6.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_7.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div
                                            class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('images/featured_8.png')}}" class="img-fluid" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name">
                                                    <div><a href="#">Huawei MediaPad...</a></div>
                                                </div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Popular Categories -->

    <div class="popular_categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="popular_categories_content">
                        <div class="popular_categories_title">Categorias Populares</div>
                        <div class="popular_categories_slider_nav">
                            <div class="popular_categories_prev popular_categories_nav"><i
                                    class="fas fa-angle-left ml-auto"></i></div>
                            <div class="popular_categories_next popular_categories_nav"><i
                                    class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                        <div class="popular_categories_link"><a href="#">Catálogo completo</a></div>
                    </div>
                </div>

                <!-- Popular Categories Slider -->

                <div class="col-lg-9">
                    <div class="popular_categories_slider_container">
                        <div class="owl-carousel owl-theme popular_categories_slider">

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div
                                    class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><a href="{{url('pesquisa_produtos/2')}}"><img src="{{asset('images/popular_1.png')}}" class="img-fluid"
                                                                             alt=""></a></div>
                                    <div class="popular_category_text">Frutas</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><a href="{{url('pesquisa_produtos/3')}}"><img src="{{asset('images/popular_2.png')}} "
                                                                             class="img-fluid" alt=""></a></div>
                                    <div class="popular_category_text">Legumes</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><a href="{{url('pesquisa_produtos/6')}}"><img src="{{asset('images/popular_3.png')}}"
                                                                             class="img-fluid" alt=""></a></div>
                                    <div class="popular_category_text">Tubérculos</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><a href="pesquisa_produtos/4"><img src="{{asset('images/popular_4.png')}}"
                                                                             class="img-fluid" alt=""></a></div>
                                    <div class="popular_category_text">Leguminosas</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div
                                    class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><a href="{{url('pesquisa_produtos/1')}}"><img src="{{asset('images/popular_5.png')}}"
                                                                             class="img-fluid" alt=""></a></div>
                                    <div class="popular_category_text">Cereais</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->


    <!-- Hot New Arrivals -->


    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Promoções</div>
                            <ul class="clearfix">
                                <li class="active">Top 12</li>
                                <!--<li>Frutas</li>
                                <li>Legumes</li>
                                <li>Verduras</li>
                                <li>Raízes</li>
                                <li>Cereais</li>-->
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <div class="bestsellers_panel panel active">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/abacate.png')}}"
                                                                            alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Fruta</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Abacate</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 2,50<span>Kg</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/morango.png')}}"
                                                                            alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Fruta</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Morango</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 8,99<span>bandeja</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>
                                        </div>



                                    </div>
                                    <div class="bestsellers_fav"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/uva-verde.jpg')}}"
                                                                            alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Fruta</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Uva Verde</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 3,00<span>Kg</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">novo</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/banana.jpg')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Fruta</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Banana</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 7,00<span>duzia</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">novo</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/abobora.jpg')}}"
                                                                            alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Legume</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Abóbora</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 5,00<span>unid</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">novo</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/couve-flor.jpg')}}"
                                                                            alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Hortaliça</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Couve-Flor</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 6,00<span>unid</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/chuchu.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Verdura</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Chuchu</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 2,00<span>Kg</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/amora.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Fruta</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Amora</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 10,00<span>Kg</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">novo</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/berinjela.png')}}"
                                                                            alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Legume</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Berinjela</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 3,99<span>Kg</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">novo</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/beterraba.png')}}"
                                                                            alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Raiz</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Beterraba</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 4,99<span>Kg</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/brocolis.jpg')}}"
                                                                            alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Hortaliça</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Brócolis</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 10,00<span>unid</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/inhame.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Raiz</a></div>
                                            <div class="bestsellers_name">
                                                <div><a href="#">Inhame</a></div>
                                            </div>
                                            <div class="product_price discount">R$ 5,00<span>Kg</span></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="bestsellers_panel panel">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/morango.png')}}"
                                                                            alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Frutas</a></div>
                                            <div class="bestsellers_name"><a href="#">Morango</a></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">R$ 8,99<span>bandeja</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_2.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">novo</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_3.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_4.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_5.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_6.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_1.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_2.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_3.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_4.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_5.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_6.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="bestsellers_panel panel">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_1.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_2.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_3.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_4.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_5.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_6.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_1.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_2.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_3.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_4.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/best_5.png')}}" alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img src="{{asset('images/abacaxi.png')}}"
                                                                            alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="#">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Recently Viewed -->

    <div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="viewed_title_container">
                        <h3 class="viewed_title">Vistos Recentemente</h3>
                        <div class="viewed_nav_container">
                            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="viewed_slider_container">

                        <!-- Recently Viewed Slider -->

                        <div class="owl-carousel owl-theme viewed_slider">

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{asset('images/banana.jpg')}}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="product_price discount">R$ 7,00<span>duzia</span></div>
                                       <!-- <div class="viewed_price">R$ 7,00<span>duzia</span></div>-->
                                        <div class="viewed_name"><a href="#">Banana</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">novo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{asset('images/abacaxi.png')}}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="product_price discount">R$ 3,00<span>unid</span></div>
                                        <div class="viewed_name"><a href="#">Abacaxi</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">novo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{asset('images/tomate.jpg')}}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="product_price discount">R$ 4,00<span>Kg</span></div>
                                        <div class="viewed_name"><a href="#">Tomate</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">novo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{asset('images/pimentao.jpg')}}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="product_price discount">R$ 1,00<span>unid</span></div>
                                        <div class="viewed_name"><a href="#">Pimentão Vermelho</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">novo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{asset('images/abobora.jpg')}}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="product_price discount">R$ 5,00<span>unid</span></div>
                                        <div class="viewed_name"><a href="#">Abóbora</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">novo</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{asset('images/pera.png')}}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="product_price discount">R$ 1,00<span>unid</span></div>
                                        <div class="viewed_name"><a href="#">Pêra</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">novo</li>
                                    </ul>
                                </div>
                            </div>
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
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
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

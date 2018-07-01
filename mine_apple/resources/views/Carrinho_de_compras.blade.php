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
    <link rel="stylesheet" type="text/css" href="{{asset('css/carrinho_de_compras_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">


    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/icon-144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/icon-114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/icon-72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/icon-16.png')}}">

</head>

<body>
        <div class="top_bar">
    <div class="super_container">
        <!-- Header -->
        <header class="header">
            <!-- Top Bar -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_user">
                                    <div class="user_icon"><img src="{{asset('images/iconUser.png')}}" alt=""></div>
                                    <div><a href="#">Cadastrar</a></div>
                                    <div><a href="#">Login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Main -->
            <div class="header_main">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="col-lg-4 col-sm-3 col-3 order-1 pt-3 pb-0">
                            <div class="logo_container">
                                <div class="logo_icon"><img src="{{asset('images/logoSite2.png')}}" class="img-fluid" alt=""></div>
                            </div>
                        </div>

                        <!-- Search  6 col 12 ord 2 order 3-->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input"
                                               placeholder="Pesquisar produtos..." name="buscarProdutos">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc">Todas as categorias</span>
                                                    <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">Todas as categorias</a></li>
                                                        <li><a class="clc" href="#">Cereais</a></li>
                                                        <li><a class="clc" href="#">Frutas</a></li>
                                                        <li><a class="clc" href="#">Legumes</a></li>
                                                        <li><a class="clc" href="#">Leguminosas</a></li>
                                                        <li><a class="clc" href="#">Raízes</a></li>
                                                        <li><a class="clc" href="#">Tubérculos</a></li>
                                                        <li><a class="clc" href="#">Verduras</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300" value="Submit"><img
                                            src="images/search.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="col-lg-2 col-9 order-lg-3 order-2 text-lg-left text-right pb-0 pt-0">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                                <!-- Cart -->
                                <div class="cart">
                                    <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                        <div class="cart_icon">
                                            <a href="#">
                                                <i class="fa fa-shopping-basket fa-3x" style="color: #000000"></i>
                                            </a>
                                            <div class="cart_count"><span>2</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main_nav_content d-flex flex-row">

                                <!-- Categories Menu -->
                                <div class="cat_menu_container">
                                    <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                        <div class="cat_burger"><span></span><span></span><span></span></div>
                                        <div class="cat_menu_text">Categorias</div>
                                    </div>

                                    <ul class="cat_menu">
                                        <li><a href="#">Cereais <i class="fas fa-chevron-right ml-auto"></i></a></li>
                                        <li><a href="#">Frutas<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">Legumes<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">Leguminosas<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">Raízes<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">Tubérculos<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">Verduras<i class="fas fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Main Nav Menu -->

                                <div class="main_nav_menu ml-auto">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href="{{url("/")}}">Inicio<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="{{url("/sobre")}}">Sobre<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="{{url("/fale_conosco")}}">Fale Conosco<i class="fas fa-chevron-down"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Menu Trigger -->

                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                        <div class="menu_burger">
                                            <div class="menu_trigger_text">menu</div>
                                            <div class="cat_burger menu_burger_inner">
                                            <span></span><span></span><span></span></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Menu -->

            <div class="page_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="page_menu_content">
                                <div class="page_menu_search">
                                    <form action="#">
                                        <input type="search" required="required" class="page_menu_search_input"
                                           placeholder="Pesquisar produtos..." name="buscarProdutos">
                                    </form>
                                </div>
                                <ul class="page_menu_nav">
                                    <li class="page_menu_item">
                                        <a href="{{url("/")}}">Inicio<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item">
                                        <a href="{{url("/sobre")}}">Sobre<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item">
                                        <a href="{{url("fale_conosco")}}">Fale Conosco<i class="fa fa-angle-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>


<div class="top-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <h1 class="h1 page-title" data-reactid="30">Carrinho de compras</h1>
                <div class="pb-0 line"></div>
            </div>
        </div>
    </div>
</div>


<div class="containerInfosProdutos">
    <div class="container">
        <div class="row backColor">
            <div class="col-sm-4">
                <div class="subcontainerProduto1">
                    <div class="imagem">
                        <img src="{{asset('images/banana.jpg')}}" style="float:left; height: 200px; width: 200px">
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="subcontainerProduto2 ">
                    <form>
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nomeProd1"> Nome Produto </label>
                                    <input type="text" class="form-control" id="nomeProd1"
                                           placeholder="Nome do produto" name="nomeProd1" disabled>
                                </div>

                                <div class="form-group col-md-">
                                    <label for="quantidadeProd1">Quantidade </label>
                                    <input type="number" step="0" min="1" max="999" name="qntProd1"
                                           placeholder="Valor..."
                                           class="form-first-name form-control" id="quantidadeProd1">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="valorProd1">Preço</label>
                                    <input type="number" min="0.1" max="999" name="valorProd1"
                                           class="form-control" id="valorProd1"
                                           placeholder="R$ 10,00" disabled>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="tipoEmbalagemProd1">Pacote</label>
                                    <input type="text" name="tipoEmbalagemProd1" class="form-control"
                                           id="tipoEmbalagemProd1" placeholder="duzia" disabled>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="pb-0 line"></div>
    </div>
</div>

<div class="containerInfosProdutos">
    <div class="container">
        <div class="row backColor">
            <div class="col-sm-4">
                <div class="subcontainerProduto1">
                    <div class="imagem">
                        <img src="{{asset('images/abacaxi.png')}}" style="float:left; height: 200px; width: 200px">
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="subcontainerProduto2 ">
                    <form>
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nomeprod2"> Nome Produto </label>
                                    <input type="text" class="form-control" id="nomeprod2"
                                           placeholder="Nome do produto" name="nomeprod2" disabled>
                                </div>

                                <div class="form-group col-md-">
                                    <label for="quantidadeProd2">Quantidade </label>
                                    <input type="number" step="0" min="1" max="999" name="qntProd2"
                                           placeholder="Valor..."
                                           class="form-first-name form-control" id="quantidadeProd2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="valorProd2">Preço</label>
                                    <input type="number" min="0.1" max="999" name="valorProd2"
                                           class="form-control" id="valorProd2"
                                           placeholder=" R$ 10,00" disabled>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="tipoEmbalagemProd2">Pacote</label>
                                    <input type="text" name="tipoEmbalagemProd2" class="form-control"
                                           id="tipoEmbalagemProd2" placeholder="duzia" disabled>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="pb-0 line"></div>
    </div>
</div>


<div class="containerInfosProdutos">
    <div class="form-row espac2">
        <div class="card w-50" style="margin-left:+100px">
            <div class="card-body">
                <h4 class="card-title">Calcule o frete:</h4>
                <div class="pb-0 line"></div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="CEP">CEP </label>
                        <input type="text"
                               placeholder="CEP"
                               class="form-first-name form-control" id="CEP" name="cep">

                    </div>
                    <button type="submit" style="height: 30px;">Calcular</button>
                </div>
                <label>Valor do frete: </label>
                <label>R$ 00,00</label>
            </div>

        </div>


    </div>

    <div class="form-row espac2">


        <div class="card w-50" style="margin-left:+100px">
            <div class="card-body">
                <h4 class="card-title">Resumo da compra:</h4>
                <div class="pb-0 line"></div>
                <div class="form-row" id="espac1">
                    <div class="form-group col-md-6">
                        <label for="subTotal">Sub-total: </label>
                        <input type="text"
                               placeholder="valor"
                               class="form-first-name form-control" id="subTotal" name="subTotal" disabled>
                        <label for="frete">Frete: </label>
                        <input type="text" placeholder="valor" class="form-first-name form-control" id="frete" name="frete" disabled>

                    </div>
                </div>
                <label style="font-size: 20px">Total: </label>
                <label>&nbsp; R$ 00,00</label>
            </div>

        </div>


    </div>

    <br/><br/>

    <div class="col-md-12 mb-3" align="center">
        <button type="submit" class="btn btn-primary">Finalizar</button>
    </div>

</div>


<!-- Footer -->

<footer class="footer">
    <div class="container">
        <div class="row" id="linha">

            <div class="col-lg-3 footer_col">
                <div class="footer_column footer_contact">
                    <div class="logo_container">
                        <div class="logo"><a href="#">Mineapple</a></div>
                    </div>
                    <div class="footer_title">Tem uma dúvida? Mande-nos um email!</div>
                    <div class="footer_phone">mineapple@gmail.com</div>
                    <div class="footer_contact_text">
                        <p>Feira de Santana</p>
                        <p>Bahia, BR</p>
                    </div>
                    <div class="footer_social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="footer_column">
                    <div class="footer_title">Serviços</div>
                    <ul class="footer_list">
                        <li><a href="#">Minha conta</a></li>
                        <li><a href="#">Pedidos</a></li>
                        <li><a href="#">Lista de Desejos</a></li>
                        <li><a href="#">Atendimento ao cliente</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>

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
                            <li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
                            <li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
                            <li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
                            <li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Mineapple</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mineapple shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pesquisa_de_produtos_style.css')}}">
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
                                        <div class="cart_count"><span>0</span></div>
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
                                    <a href="{{url('/')}}">Inicio<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="{{url('/sobre')}}">Sobre<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="{{url('/fale_conosco')}}">Fale Conosco<i class="fa fa-angle-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>


   <div class="top-content">
       <div class="container">
           <div class="row">
               <div class="col-lg-12 ">
                   <!--<div class="contact_form_title">Detalhes da Assinatura</div>-->
                   <h1 class="h1 page-title" data-reactid="38">Todos os produtos</h1>
                   <div class="pb-0" id="line"></div>
               </div>
           </div>
       </div>
   </div>


       @foreach($produtos as $produto)
       <div class="containerInfosProdutos">
            <div class="container">
                <div class="row" id="backColor">
                    <div class="col-sm-4">
                        <div class="subcontainerProduto1">
                            <div class="imagem">
                                <img src="images/abacaxi.png" height="200" width="200" style="float:left">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="subcontainerProduto2 ">
                            <form role="form" method="post" action="/adicionar_carrinho">
                                <fieldset>
                                    @csrf
                                    <div class="form-row">

                                        <input type="hidden" name="id" value="{{$produto->id}}">

                                        <div class="form-group col-md-6">
                                            <label for="nomeProd2">Nome do Produto </label>
                                            <input type="text" class="form-control" 
                                                   value="{{$produto->nome}}" name="nome" id="nomeProd2" readonly>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="descricaoProd2">Descrição </label>
                                            <input type="text" id="descricaoProd2" class="form-control" value="{{$produto->descricao}}" name="descricao" readonly>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="quantidade">Quantidade</label>
                                            <input type="number" name="quantidade"
                                                   class="form-control" 
                                                   placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-row" id="espac1">
                                        <div class="form-group col-md-6">
                                            <label for="valorProd2">Preço</label>
                                            <input type="number" min="0.1" max="999"
                                                   class="form-control" id="number"
                                                   value="{{$produto->valor}}" name="preco" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tipoEmbalagemProd2">Embalagem</label>
                                            <input type="text" name="embalagem" class="form-control"
                                                    placeholder="{{DB::table('embalagem')
            ->join('produto', 'embalagem.id', '=', 'produto.embalagem_id')
            ->select('tipo')
            ->get() }}" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <button class="btn btn-primary" type="submit">Adicionar ao carrinho</button>
                                            
                                        </div>
                                    </div>

                                </fieldset>
                                
                            </form>
                        </div>
                    </div>
                    <div class="pb-0" id="line"></div>
                </div>
            </div>
            @endforeach
       <center>
            <!-- <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary">Mostrar mais</button>
            </div> -->

        </center>
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
<script src="{{asset('js/script_tela_pesquisa_produtos.js')}}"></script>



</body>

</html>

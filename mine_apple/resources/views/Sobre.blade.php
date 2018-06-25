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
    <link rel="stylesheet" type="text/css" href="{{asset('css/detalhes_compra.css')}}">
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

        <div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-4 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo_icon"><img src="{{asset('images/logoSite.png')}}" class="img-fluid" alt=""></div>

                        </div>
                    </div>
                    <!-- Wishlist -->
                    <div class="col-lg-8 col-3 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <!-- Icone usuário logado -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon">
                                        <i class="fa fa-user-circle fa-4x" style="color: #08c8b0 "></i>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="#">Login</a></div>
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
                                    <li><a href="#">Inicio<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="blog.html">Sobre<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="#">Fale Conosco<i class="fas fa-chevron-down"></i></a></li>
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
                                           placeholder="Pesquisar produtos...">
                                </form>
                            </div>
                            <ul class="page_menu_nav">

                                <li class="page_menu_item">
                                    <a href="#">Inicio<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Produtos<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Sobre<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Fale Conosco<i class="fa fa-angle-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!--<section>-->
    <div class="top-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="contact_form_title">RC Business Enterprises</div>
                        <div  class="pb-0" id="line"> </div>
                        <div>
                            <p class="text-justify">A RC business Enterprises, líder em desenvolvimento de aplicações inovadoras para computadores, investiu no desenvolvimento dessa plataforma visando atingir tanto o público que deseja ter sua residência abastecida com produtos orgânicos frescos quanto os produtores rurais, expandindo o  raio de venda do seu produto.</p>
                            <p class="text-justify">A era da informatização cresce diariamente, e informatizar um setor que antes era dependente de um cliente ir para o local de vendas para adquirir o produto significa facilitar e aumentar as vendas, além de cortar o maior gasto que os clientes tem: deslocamento e tempo.</p>
                            <p class="text-justify">Com isso, o Mineapple foi criada, como ferramenta para bater os objetivos citados anteriormente.  Na plataforma você poderá ter aceso a centenas de produtos da região, e criar sua assinatura, para receber na sua casa na frequência que desejar, além de ter opções de débito automático para não precisar se preocupar mais com pagamentos.</p>
                            <p class="text-justify">Para mais informações, sobre RC Business Enterpreses ou sobre MIneApple, acesse o site da empresa, ou entre na aba “fale conosco”.</p>
                            <p class="text-justify">Tenha uma boa e saudável compra!</p>
                            <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;www.rcbusinesse.com.br </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
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
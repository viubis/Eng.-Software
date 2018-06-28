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
    <link rel="stylesheet" type="text/css" href="{{asset('css/gerenciamento_usuario.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">

    <<!-- Favicon and touch icons -->
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

        <!-- Header Main -->

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
                                        <div class="cart_text"><a href="#">Bem-vindo</a></div>
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


                            <!-- Main Nav Menu -->

                            <div class="main_nav_menu ml-auto">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="#">Gerenciamento de sistema<i class="fas fa-chevron-down"
                                                                               id="meusdados"></i></a>
                                    </li>
                                    <li><a href="#">Gerenciamento de usuário<i class="fas fa-chevron-down"
                                                                               id="resumoconta"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Menu Trigger -->

                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">Menu</div>
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
                                    <a href="#">Gerenciamento de sistema<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Gerenciamento de usuário<i class="fa fa-angle-down"></i></a>
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
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_title">Gerenciamento de usuário</div>
                    <form>
                        <div class="form-row">
                            <label class="sr-only" for="selecionarProdutor">Selecione um produtor... </label>
                            <select class="form-control" id="selecionarProdutor" style="margin-bottom: 20px">
                                <option disabled selected> Selecione um produtor...</option>
                            </select>
                        </div>

                        <div class="form-group" align="right" style="margin-top: -14px">
                            <a href="#">Ver todos</a>
                        </div>

                        <label class="my-0 mr-2" style="font-size: 20px">Usuário <i
                                class="fa fa-at"></i>produtor</label>

                        <div class="pb-0" id="line"></div>

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <i class="fa fa-user-circle fa-8x"></i>
                            </div>
                            <div class="form-group col-md-10">
                                <div class="row">
                                    <div class="form-group col-md-3" style="margin-right: -20px">
                                        <label for="staticNome" class="col-form-label">Nome fantasia</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="text" readonly class="form-control-plaintext"
                                               id="staticNomeFantasia" name="nomeFantasia"
                                               placeholder="Nome fantasia" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3" style="margin-right: -20px">
                                        <label for="staticCNPJ" class="col-form-label">CNPJ</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="text" readonly class="form-control-plaintext" id="staticCNPJ"
                                               placeholder="CNPJ" disabled name="cnpj">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3" style="margin-right: -30px">
                                        <label for="listaProdutos" class="col-form-label">Lista de produtos</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <select multiple class="form-control" size="2" id="listaProdutos">
                                            <option disabled>Produto 1</option>
                                            <option disabled>Produto 2</option>
                                            <option disabled>Produto 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3" style="margin-right: -5px">
                                        <label for="listaProdutos" class="col-form-label">Histórico de
                                            avaliações</label>
                                    </div>
                                    <div class="form-group col-md-5" style="margin-top: 10px;">
                                        <div class="row" style="margin-bottom: 10px">
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="far fa-star" style="color: yellow; margin-right: 5px"></i>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px">
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="far fa-star" style="color: yellow; margin-right: 5px"></i>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px">
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="fas fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <i class="far fa-star" style="color: yellow; margin-right: 5px"></i>
                                            <div class="row" align="right" style="margin-top: 15px">
                                                <a href="#">Ver todos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input id="userBloqueado" name="userBloqueado" type="checkbox" value="nao">
                                <label for="userBloqueado">Acesso negado a plataforma</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md-10">
                                <label class="my-0 mr-2" style="font-size: 20px">Categoria </label>
                            </div>
                            <div class="form-group  col-md-2" align="right">
                                <a href="#">Atualizar</a>
                            </div>
                        </div>
                        <div class="pb-0" id="line" style="margin-top: -15px"></div>
                        <div class="form-row">
                            <div class="form-group  col-md-6">
                                <p style="color: #000000; font-size: 15px">Atual: produtor</p>
                            </div>
                            <div class="form-group  col-md-3">
                                <a href="#">Alterar para produtor</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--</section>-->

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

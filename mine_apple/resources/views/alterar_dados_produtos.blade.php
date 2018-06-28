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
    <link rel="stylesheet" type="text/css" href="{{asset('css/cadastro_produtos.css')}}">
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
                                        <img src="{{asset('images/iconUser.png')}}" class="img-fluid" alt="">
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
                                    <li><a href="#">Meus Dados<i class="fas fa-chevron-down" id="meusdados"></i></a>
                                    </li>
                                    <li><a href="#">Resumo da Conta<i class="fas fa-chevron-down" id="resumoconta"></i></a>
                                    </li>
                                    <li><a href="#">Meus Produtos<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="#">Assinaturas<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="#">Reputação<i class="fas fa-chevron-down"></i></a></li>
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
                                    <a href="#">Meus Dados<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Resumo da Conta<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Meus Produtos<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Assinaturas<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Reputação<i class="fa fa-angle-down"></i></a>
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
        <!--  <div class="inner-bg">-->
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Alterar informações do produto</div>
                        <form role="form" action="" method="post" class="registration-form">
                            <fieldset>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <form method="POST" enctype="multipart/form-data">
                                            <label for="form-control">Adicione uma imagem do seu produto:</label>
                                            <input type="file" name="path" accept="image/*" class="form-control">

                                        </form>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="my-1 mr-2" for="categorias">Categoria </label>
                                        <select class="custom-select my-1 mr-sm-2" name="nomeCategoria" id="categorias">
                                            <option value="Cereais">Cereais</option>
                                            <option value="Frutas">Frutas</option>
                                            <option value="Legumes">Legumes</option>
                                            <option value="Leguminosas">Leguminosas</option>
                                            <option value="Raízes">Raízes</option>
                                            <option value="Tubérculos">Tubérculos</option>
                                            <option value="Verduras">Verduras</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="my-1 mr-2" for="Unidade">Tipo de embalagem </label>
                                        <select class="custom-select my-1 mr-sm-2" name="tipoEmbalagem" id="Unidade">
                                            <option value="Cereais">Unidade</option>
                                            <option value="Frutas">Caixa</option>
                                            <option value="Legumes">Litro</option>
                                            <option value="Leguminosas">Quilo</option>
                                            <option value="Leguminosas">Dúzia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="sr-only" for="nome">Nome</label>
                                        <input type="text" name="nome" placeholder="Nome do Produto..."
                                               class="form-first-name form-control" id="nome">
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label class="sr-only" for="qtd">Quantidade produzida por dia</label>
                                        <input type="number" min="1" max="999" name="maxPorDia"
                                               placeholder="Quantidade produzida por dia..."
                                               class="form-first-name form-control" id="qtd">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="sr-only" for="qtdmin">Quantidade mínima por assinatura</label>
                                        <input type="number" min="1" max="999" name="minPorAssinatura"
                                               placeholder="Quantidade mínima de produtos por assinatura..."
                                               class="form-first-name form-control" id="qtdmin">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="sr-only" for="frete">Valor máximo de frete</label>
                                        <input type="number" step="0.01" min="0.01" max="999.00" name="freteMax"
                                               placeholder="Valor máximo de frete..."
                                               class="form-first-name form-control" id="frete">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label class="sr-only" for="valor">Valor</label>
                                        <input type="number" step="0.01" min="0.01" max="999.00" name="valor"
                                               placeholder="Valor..."
                                               class="form-first-name form-control" id="valor">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" id="comment" name="descricao"
                                                      placeholder="Descrição do produto... "></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row" type="ent">
                                    <div class="col-md-12 mb-3">
                                        <label class="my-1 mr-2" for="diasEntrega">Dias para entrega</label>
                                    </div>
                                </div>
                                <div class="form-row" type="row1">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="segunda"
                                                       value="option1" required name="seg">
                                                <label class="form-check-label" type="lab1" for="segunda">
                                                    Segunda-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="terca"
                                                       value="terca" name="ter" required>
                                                <label class="form-check-label" type="lab1" for="terca">
                                                    Terça-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="quarta"
                                                       value="quarta" name="qua" required>
                                                <label class="form-check-label" type="lab1" for="quarta">
                                                    Quarta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="quinta"
                                                       value="quinta" name="qui" required>
                                                <label class="form-check-label" type="lab1" for="quinta">
                                                    Quinta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sexta"
                                                       value="sexta" name="sex" required>
                                                <label class="form-check-label" type="lab1" for="sexta">
                                                    Sexta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sabado"
                                                       value="sabado" name="sab" required>
                                                <label class="form-check-label" type="lab1" for="sabado">
                                                    Sábado
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="domingo"
                                                       value="sabado" name="dom" required>
                                                <label class="form-check-label" type="lab1" for="domingo">
                                                    Domingo
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-next">Alterar</button>
                                </div>
                            </fieldset>
                        </form>
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

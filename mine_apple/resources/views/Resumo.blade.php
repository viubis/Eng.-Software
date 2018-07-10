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
    <link rel="stylesheet" type="text/css" href="{{asset('css/reputacao_style.css')}}">
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

                            <!-- <div class="menu_contact">
                                 <div class="menu_contact_item">
                                     <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>
                                     +38 068 005 3570
                                 </div>
                                 <div class="menu_contact_item">
                                     <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div>
                                     <a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                             </div>-->
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
                    <div class="contact_form_title">Resumo da Conta</div>
                    <!--div  class="pb-0" id="line"></div-->
                    <div class="form-group">
                    <form>
                        <fieldset>
                           <!-- <div class="form-row">
                                <div class="col-md-1 mb-3">
                                    <label class="linhaassinaturas" type="nomenumero" for="inputnumero">Número</label>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <input type="text" class="form-control" placeholder="número">
                                </div>
                                <div class="col-md-1 offset-1 mb-3">
                                    <label class="linhaassinaturas" type="nomenumero" for="inputcliente">Cliente </label>
                                </div>
                                <div class="col-md-7 mb-3">
                                    <input type="text" class="form-control" placeholder="nome do cliente">
                                </div>
                            </div>
                            <div  class="pb-0" id="linha"></div>-->

                            <div class="form-row" id="espac2">

                                    <label class="Pagamentos" style="font-size: 25px"> Pagamentos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Ver todos</u></a>   </label>
                                    <div  class="pb-0" id="line"> </div>
                                    <label class="Pagamentos" style="font-size: 15px">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>1 Em Analise</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>2 Pendentes</u></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>0 Aprovados</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </label>

                                    <div class="col-lg-10 offset-lg-1">
                                    <div class="form-group col-md-4">
                                    <!--ul class="star_reputacao">
                                            <div class="starsreputacao">
                                                <div class="row">
                                                    <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li> </div>
                                                    <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>
                                                    <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>
                                                    <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>
                                                    <div class="col"> <li><a href="#"><img src="images/star0.png" alt=""></a></li></div>

                                            </div>
                                    </div-->

                            </div>
                            <br /><br />


                                </ul>

                            </div>

                            <div class="form-row" id="espac2">

                                    <label class="Recebimentos" style="font-size: 25px"> Recebimentos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Ver todos</u></a>   </label>
                                    <div  class="pb-0" id="line"> </div>
                                    <label class="Recebimentos" style="font-size: 15px">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>5 Em Analise</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>3 Pendentes</u></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>1 Aprovados</u></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </label>

                                    <div class="col-lg-10 offset-lg-1">
                                    <div class="form-group col-md-4">
                                    <!--ul class="star_reputacao">
                                            <div class="starsreputacao">
                                                <div class="row">
                                                    <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li> </div>
                                                    <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>
                                                    <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>
                                                    <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>
                                                    <div class="col"> <li><a href="#"><img src="images/star0.png" alt=""></a></li></div>

                                            </div>
                                    </div-->

                            </div>
                            <br /><br />


                                </ul>

                            </div>
                            <div class="form-row" id="espac2">

                                    <label class="Saldo" style="font-size: 25px"> Saldo no Mineapple  <a href="#" data-toggle="tooltip" title="Tranfira os valores obtidos aqui para sua conta principal. Você ainda tem direiro a uma transferência grátis.Após isso,pagará R$0,50 por transação">?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>

                                        <script>
                                                $(document).ready(function(){
                                                    $('[data-toggle="tooltip"]').tooltip();
                                                });
                                                </script>
                                    <div  class="pb-0" id="line"> </div>

                                    <div class="card w-50">
                                            <div class="card-body">
                                              <h4 class="card-title">Disponivel          R$500,00</h4>
                                              <div  class="pb-0" id="line"> </div>
                                              <p class="card-text"><input type="text" class="form-control" id="valor" name="valorDisponivel" placeholder="Valor">
                                              </p>
                                              <div  class="pb-0" id="line"> </div>
                                              <h4>Conta Bancaria</h4>
                                              <p>Banco do Basil S.A</p>
                                              <p>0443,Feira de Santana <p>0078524</p> </p>

                                              <a href="#" class="btn btn-primary">Transferir</a>
                                            </div>
                                          </div>

                                    <div class="col-lg-10 offset-lg-1">
                                    <div class="form-group col-md-4">
                                    <ul class="ajuda">
                                            <div class="ajudaInfo">
                                                <div class="row">



                                            </div>
                                    </div-->

                            </div>
                            <br /><br />


                                </ul>

                            </div>

                            <!--div class="container">
                                <label class="Avaliacao" style="font-size: 19px">Avaliações:</label>
                            </div>
                                <div class="container">
                                <div class="form-group col-md-4">
                                <ul class="star_reputacao">
                                            <div class="starsreputacao">
                                                <div class="row">
                                                    <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li> </div>
                                                    <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>
                                                    <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>
                                                    <div class="col"> <li><a href="#"><img src="images/star0.png" alt=""></a></li></div>
                                                    <div class="col"> <li><a href="#"><img src="images/star0.png" alt=""></a></li></div>

                                            </div>
                                    </div>
                                </div>
                            </div>
                            <label for="nomeCliente">Nome do cliente</label>
                            <div class="form-group">
                                    <input type="text" class="form-control" id="nomeCliente" placeholder="Nome cliente">
                             </div>
                             <label for="assinatura">Assinatura:</label>
                             <div class="form-group">
                                    <input type="text" class="form-control" id="produtos" placeholder="Produtos selecionados">
                             </div>
                            </div>

                             <div class="container">
                                <div class="form-group col-md-4">
                                 <ul class="star_reputacao">
                                        <div class="starsreputacao">
                                            <div class="row">
                                                <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li> </div>
                                                <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>
                                                <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>
                                                <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>
                                                <div class="col"> <li><a href="#"><img src="images/star1.png" alt=""></a></li></div>

                                            </div>
                                     </div>
                                    </div>
                            </div>
                            <label for="nomeCliente">Nome do cliente</label>
                            <div class="form-group">
                                    <input type="text" class="form-control" id="nomeCliente" placeholder="Nome cliente">
                             </div>
                             <label for="assinatura">Assinatura:</label>
                             <div class="form-group">
                                    <input type="text" class="form-control" id="produtos" placeholder="Produtos selecionados">
                             </div>
                            </div>


                        </fieldset>









                       <!--     <div class="form-group col-md-2">
                                <label for="inputNome">Cliente</label>
                            </div>
                            <div class="form-group col-md-5">
                                <input type="email" class="form-control" id="nomecliente" placeholder="nome do cliente">
                            </div>-->

                    </form>
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

                    <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
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

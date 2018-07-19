<header class="header">
    <!-- Top Bar -->
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="top_bar_content ml-auto">
                        <div class="top_bar_user">
                            @guest
                                <div class="user_icon"><i style="color: #08c8b0;" class="fa fa-user-circle fa-2x"></i></div>
                                <div><a href="{{url('/login')}}">&nbsp Cadastre-se ou acesse a sua conta clicando aqui</a></div>
                            @else
                            <!-- Icone usuário logado -->
                                <div class="top_bar_user">
                                    <div class="row">
                                        <div class="col-md-1 mt-3">
                                            <i style="color: #08c8b0;" class="fa fa-user-circle fa-2x"></i>
                                        </div>
                                        <div class="col-md-4">
                                                <a style="font-size: 13px" href="{{url("")}}">{{Auth::user()->consumidor->nome}} <span
                                                    ></span></a>
                                        </div>
                                        <div class="col-md-1">
                                                <a style="font-size: 13px;border: none" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            @endguest
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


                <div class="col-lg-4 col-xs-12 col-sm-4 pt-3 text-center clearfix ">
                    <div class="logo_container  ">
                        <div class="logo_icon text-center"><a href="{{url("/")}}"><img src="{{asset('images/logoSite2.png')}}" alt=""></a></div>
                    </div>
                </div>

                <!-- Search  6 col 12 ord 2 order 3-->
                <div class="col-lg-5 col-sm-6 text-lg-left ">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form role="form" method="post" action="{{route('pesquisa')}}" class="header_search_form clearfix">
                                    @csrf
                                    <input type="search" required="required" class="header_search_input"
                                           placeholder="Pesquisar produtos..." name="busca">
                                    <div class="custom_dropdown">
                                        <div class="custom_dropdown_list">
                                                    <span
                                                        class="custom_dropdown_placeholder clc">Categorias</span>
                                            <i class="fas fa-chevron-down"></i>
                                            <ul class="custom_list clc">
                                                <li><a class="clc" href="{{url("/pesquisa_produtos")}}">Todas</a></li>
                                                <li><a class="clc" href="{{url("/pesquisa_produtos/1")}}">Cereais</a></li>
                                                <li><a class="clc" href="{{url("/pesquisa_produtos/2")}}">Frutas</a></li>
                                                <li><a class="clc" href="{{url("/pesquisa_produtos/3")}}">Legumes</a></li>
                                                <li><a class="clc" href="{{url("/pesquisa_produtos/4")}}">Leguminosas</a></li>
                                                <li><a class="clc" href="{{url("/pesquisa_produtos/5")}}">Raízes</a></li>
                                                <li><a class="clc" href="{{url("/pesquisa_produtos/6")}}">Tubérculos</a></li>
                                                <li><a class="clc" href="{{url("/pesquisa_produtos/7")}}">Verduras</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" class="header_search_button trans_300" value="Submit">
                                        <img
                                            src="{{asset('images/search.png')}}" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wishlist -->
                <div class="col-lg-2  col-sm-1 col-9 order-lg-3 order-2 text-lg-left text-right pb-0 pt-0">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        <!-- Cart -->
                        <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon">
                                    <a href="{{url('/carrinho_de_compras')}}">
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
                            <div
                                class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                <div class="cat_burger"><span></span><span></span><span></span></div>
                                <div class="cat_menu_text">Categorias</div>
                            </div>

                            <ul class="cat_menu">
                                <li><a href="{{url("/pesquisa_produtos/1")}}">Cereais <i class="fas fa-chevron-right ml-auto"></i></a></li>
                                <li><a href="{{url("/pesquisa_produtos/2")}}">Frutas<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="{{url("/pesquisa_produtos/3")}}">Legumes<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="{{url("/pesquisa_produtos/4")}}">Leguminosas<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="{{url("/pesquisa_produtos/5")}}">Raízes<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="{{url("/pesquisa_produtos/6")}}">Tubérculos<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="{{url("/pesquisa_produtos/7")}}">Verduras<i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </div>

                        <!-- Main Nav Menu -->

                        <div class="main_nav_menu ml-auto">
                            <ul class="standard_dropdown main_nav_dropdown">
                                <li><a href="{{url("/")}}">Inicio<i class="fas fa-chevron-down"></i></a></li>
                                <li><a href="{{url("/sobre")}}">Sobre<i class="fas fa-chevron-down"></i></a>
                                </li>
                                <li><a href="{{url("/fale_conosco")}}">Fale Conosco<i
                                            class="fas fa-chevron-down"></i></a></li>
                            </ul>
                        </div>

                        <!-- Menu Trigger -->

                        <div class="menu_trigger_container ml-auto">
                            <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                <div class="menu_burger">
                                    <div class="menu_trigger_text"></div>
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
                                <a href="{{url("fale_conosco")}}">Fale Conosco<i
                                        class="fa fa-angle-down"></i></a>
                            </li>
                            <li class="page_menu_item">
                                <a href="{{url('/carrinho_de_compras')}}">Carrinho<i
                                            class="fa fa-angle-down"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<header class="header">
    <!-- Top Bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                     <div class="col d-flex flex-row">
                        <div class="top_bar_content col-12 text-right">
                            <div class="top_bar_user col-12">
                                @guest
                                    <div class="user_icon"><i style="color: #08c8b0;" class="fa fa-user-circle fa-2x"></i></div>
                                    <div><a href="{{url('/login')}}">&nbsp Cadastre-se ou acesse a sua conta clicando aqui</a></div>
                                @else
                                <!-- Icone usuário logado -->
                                    <div class="top_bar_user col-12">
                                        <div class="row col-12">
                                            <div class="">
                                                <i style="color: #08c8b0;" class="fa fa-user-circle fa-2x"></i>
                                            </div>
                                            <div class="">
                                                <a style="font-size: 13px" href="{{url("")}}">{{Auth::user()->produtor->nomeFantasia}} <span
                                                    ></span></a>
                                            </div>
                                            <div class="">
                                                <a class="dropdown-item" style="font-size: 13px;border: none" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                    <div class="col-lg-12 col-xs-12 col-sm-12 pt-3 text-center clearfix ">
                        <div class="logo_container  ">
                            <div class="logo_icon text-center"><img src="{{asset('images/logoSite2.png')}}" alt=""></div>
                        </div>
                    </div>

                    <!-- Search  6 col 12 ord 2 order 3-->
                    <div class="col-lg-1 col-sm-1 text-lg-left ">
                                <!--<input type="search" required="required" class="header_search_input"
                                               placeholder="Pesquisar produtos..." name="busca">-->
                        <span class="custom_dropdown_placeholder "></span>
                        <ul class="custom_list "></ul>
                    </div>

                </div>
            </div>
        </div>



    <!-- Wishlist -->
                  <!--  <div class="col-lg-8 col-3 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <!-- Icone usuário logado -->
                           <!--  <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon">
                                            <i class="fa fa-user-circle fa-4x" style="color: #08c8b0 "></i>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="#">Bem Vindo!<br/></a>
                                    </div>
                                     </div>
                                </div>
                            </div> --
                        </div>
                    </div>
                </div>
             </div>
        </div>-->


        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main_nav_content d-flex flex-row">


                            <!-- Main Nav Menu -->

                            <div class="main_nav_menu ml-auto">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="{{url('/dados_cadastrais')}}">Meus Dados<i class="fas fa-chevron-down" id="meusdados"></i></a>
                                    </li>
                                    <li><a href="{{url('/resumo/conta')}}">Resumo da Conta<i class="fas fa-chevron-down" id="resumoconta"></i></a>
                                    </li>
                                    <li><a href="{{url('/meusProdutos')}}">Meus Produtos<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="{{url('/assinaturas')}}">Assinaturas<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="{{url('/produtor/reputacao')}}">Reputação<i class="fas fa-chevron-down"></i></a></li>
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
                                    <a href="{{url('/dados_cadastrais')}}">Meus Dados<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="{{url('/resumo/conta')}}">Resumo da Conta<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="{{url('/meusProdutos')}}">Meus Produtos<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="{{url('/assinaturas')}}">Assinaturas<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="{{url('/produtor/reputacao')}}">Reputação<i class="fa fa-angle-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


 </header>

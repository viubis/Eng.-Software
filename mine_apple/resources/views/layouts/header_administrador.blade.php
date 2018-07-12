<header class="header">
    <!-- Top Bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                     <div class="col d-flex flex-row">
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_user">
                                @guest
                                    <div class="user_icon mr-2 pr-2"><i style="color: #08c8b0;" class="fa fa-user-circle fa-2x"></i></div>
                                    <div><a href="{{url('/login')}}">Cadastre-se ou acesse a sua conta clicando aqui</a></div>
                                @else
                                <!-- Icone usuário logado -->
                                    <div class="top_bar_user">
                                        <div class="row">
                                            <div class="col-md-1 mt-3">
                                                <i style="color: #08c8b0;" class="fa fa-user-circle fa-2x"></i>
                                            </div>
                                            <div class="col-md-4">
                                                <a style="font-size: 13px" href="#">{{Auth::user()->administrador->nome}} <span
                                                    ></span></a>
                                            </div>
                                            <div class="col-md-1">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
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
                    <div class="col-lg-4 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo_icon"><img src="{{asset('images/logoSite2.png')}}" class="img-fluid" alt=""></div>
                        </div>
                    </div>


                    <!-- Wishlist -->
                    <div class="col-lg-8 col-3 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <!-- Icone usuário logado -->
                            <!-- <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon">
                                        <i class="fa fa-user-circle fa-4x" style="color: #08c8b0 "></i>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="#">Bem-vindo</a></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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
                                    <li><a href="{{url('/gerenciamento/sistema')}}">Gerenciamento de Sistema<i class="fas fa-chevron-down"
                                                                               ></i></a>
                                    </li>
                                    <li><a href="{{url('/gerenciamento/produtor')}}">Gerenciamento de Produtor<i class="fas fa-chevron-down"
                                                                               ></i></a>
                                    </li>
                                    <li><a href="{{url('/gerenciamento/consumidor')}}">Gerenciamento de Consumidor<i class="fas fa-chevron-down"
                                            ></i></a>
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
                                    <a href="{{url('/gerenciamento/sistema')}}">Gerenciamento de Sistema<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="{{url('/gerenciamento/produtor')}}">Gerenciamento de Produtor<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="{{url('/gerenciamento/consumidor')}}">Gerenciamento de Consumidor<i class="fa fa-angle-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>

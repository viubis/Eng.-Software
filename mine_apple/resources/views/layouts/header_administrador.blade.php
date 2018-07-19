<header class="header">
    <!-- Top Bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                     <div class="col d-flex flex-row">
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_user col-xs-12 ">
                                @guest
                                    <div class="user_icon mr-2 pr-2"><i style="color: #08c8b0;" class="fa fa-user-circle fa-2x"></i></div>
                                    <div><a href="{{url('/login')}}">&nbsp Cadastre-se ou acesse a sua conta clicando aqui</a></div>
                                @else
                                <!-- Icone usuário logado -->
                                    <div class="top_bar_user">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <i style="color: #08c8b0;" class="fa fa-user-circle fa-2x"></i>
                                            </div>
                                            <div class="col-md-4">
                                                <a style="font-size: 13px" href="{{url("")}}">{{Auth::user()->administrador->nome}} <span
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
                   <div class="col-lg-12 col-xs-12 col-sm-12 pt-3 text-center clearfix ">
                        <div class="logo_container  ">
                            <div class="logo_icon text-center"><a href="{{url("/")}}"><img src="{{asset('images/logoSite2.png')}}" alt=""></a></div>
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



        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col " id="menu">
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

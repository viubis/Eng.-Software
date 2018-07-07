   <header class="header">
            <!-- Top Bar -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_user">
                                    <div class="user_icon"><img src="{{asset('images/iconUser.png')}}" alt=""></div>
                                    <div><a href="{{url("/login")}}">Cadastrar</a></div>
                                    <div><a href="{{url("/login")}}">Login</a></div>
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
                                <div class="logo_icon ml-5 mt-1"><img src="{{asset('images/logoSite2.png')}}"
                                  class="img-fluid"
                                  alt=""></div>
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
                                                    <span
                                                    class="custom_dropdown_placeholder clc">Todas as categorias</span>
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
                                            <button type="submit" class="header_search_button trans_300" value="Submit">
                                                <img
                                                src="{{asset('images/search.png')}}" alt=""></button>
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
                                                <a href="{{url("/carrinho")}}">
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
                                        <div
                                        class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
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
                                                <a href="{{url("fale_conosco")}}">Fale Conosco<i
                                                    class="fa fa-angle-down"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                   

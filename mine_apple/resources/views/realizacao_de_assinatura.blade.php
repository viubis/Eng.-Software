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
    <link rel="stylesheet" type="text/css" href="{{asset('css/realizacao_de_assinatura_style.css')}}">
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
                                           placeholder="Pesquisar produtos..." name="BuscarProdutos">
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
                                    <a href="{{url("/fale_conosco")}}">Fale Conosco<i class="fa fa-angle-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!--<section>-->


   <!-- <div class="top-content">
            <div class="container">
                <h1 class="h1 page-title" data-reactid="38">Frutas</h1>
                <div class="pb-0" id="line"></div>
                <div class="row">
                    <div class="contact_form_title"></div>


                </div>

                    <div class= "containerProduto">

                        <img src="images/banana.jpg" height="200" width="200" style="float:left">
                        <div class="form-group col-md-6">
                            <label for="nomeProduto">Nome produto</label>
                            <input type="text" class="form-control" id="nomeProduto"
                            placeholder="Nome produto">
                        </div>

                        <div class="form-group col-md-6">
                        <div class="form-group">
                                <label for="Descrição">Descrição</label>
                                <input type="text" class="form-control" id="descricaoProduto"
                                placeholder="Pequena descrição do produto">
                        </div>
                        </div>
                        <div class="form-row" >
                        <div class="form-group col-md-2">
                        <div class="form-group">
                                <label for="Preço">Preço</label>
                                <input type="text" class="form-control" id="precoProduto"
                                placeholder="R$ 10,00">
                        </div>
                        </div>
                        <div class="form-group col-md-2">
                                <div class="form-group">
                                        <label for="Pacote">Pacote</label>
                                        <input type="text" class="form-control" id="pacoteProduto"
                                        placeholder="duzia">
                                </div>
                                </div>
                        </div>
                    </div>
                <center>
                    <button type="submit" class="btn btn-primary">Mostrar mais</button>
                </center>
            </div>


        </div>

        </body>-->

   <div class="top-content">
       <div class="container">
           <div class="row">
               <div class="col-lg-12 ">
                   <!--<div class="contact_form_title">Detalhes da Assinatura</div>-->
                   <h1 class="h1 page-title" data-reactid="30">Definição de assinatura</h1>
                   <div class="pb-0" id="line"></div>
               </div>
           </div>
       </div>
   </div>


   <div class="containerInfosProdutos">
        @foreach($itens as $item)
       <div class="container">
           <div class="row" id="backColor">
               <div class="col-sm-4">
                   <div class="subcontainerProduto1">
                       <div class="imagem">
                           <img src="{{asset('images/abacaxi.png')}}" height="200" width="200" style="float:left">
                       </div>
                   </div>
               </div>
               <div class="col-sm-8">
                   <div class="subcontainerProduto2 ">
                       <form>
                           <fieldset>
                               <div class="form-row">
                                   <div class="form-group col-md-6">
                                       <label for="nomeProd1"> Nome do Produto </label>
                                       <input type="text" class="form-control" id="nomeProd1"
                                              placeholder="{{$item->name}}" disabled name="nomeProd1">
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="freqProd1">Frequencia de entrega </label>
                                          <select multiple class="form-control" size="2" id="freqProd1" name="freqProd1">
                                                <option disabled>Produto 1</option>
                                                <option disabled>Produto 2</option>
                                                <option disabled>Produto 3</option>
                                        </select>

                                   </div>
                                   <!-- <div class="form-group col-md-">
                                        <label for="qntProd1">Quantidade </label>
                                        <input type="number" step="0" min="1" max="999" name="qntProd1"
                                        placeholder="Valor..."
                                        class="form-first-name form-control" id="qntProd1">
                                    </div> -->
                               </div>
                               <div class="form-row" id="espac1">
                                   <div class="form-group col-md-6">
                                       <label for="valorProd1">Preço</label>
                                       <input type="number" min="0.1" max="999" name="valorProd1"
                                              class="form-control" id="valorProd1"
                                              placeholder="{{$item->price}} " disabled>
                                   </div>
                                   @php $produto = $produtos->where('id', '=', $item->id)->first() @endphp
                                   @php $embalagem = $embalagens->where('id', '=', $produto->embalagem_id)->first() @endphp
                                   <div class="form-group col-md-6">
                                       <label for="tipoEmbalagemProd1">Pacote</label>
                                       <input type="text" name="tipoEmbalagemProd1" class="form-control"
                                              id="tipoEmbalagemProd1" placeholder="{{$embalagem->tipo}}" disabled>
                                   </div>
                               </div>

                               <div class="form-row" type="ent">
                                <div class="col-md-12 mb-3">
                                    <label class="my-1 mr-2" for="diasEntrega">Dias de entrega</label>
                                </div>
                            </div>
                            <div class="form-row" type="row1">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="segunda"
                                                   value="segunda" name="segunda" disabled>
                                            <label class="form-check-label" type="lab1" for="segunda" style="margin-left:-22px;margin-right:+20px">
                                                Segunda-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="terca"
                                                   value="terca" name="terca" disabled>
                                            <label class="form-check-label" type="lab1" for="terca" style="margin-left:-22px;margin-right:+20px">
                                                Terça-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="quarta"
                                                   value="quarta" name="quarta" disabled>
                                            <label class="form-check-label" type="lab1" for="quarta" style="margin-left:-22px;margin-right:+20px">
                                                Quarta-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="quinta"
                                                   value="option4" name="quinta" disabled>
                                            <label class="form-check-label" type="lab1" for="quinta" style="margin-left:-22px;margin-right:+20px">
                                                Quinta-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="sexta"
                                                   value="option5" name="sexta" disabled>
                                            <label class="form-check-label" type="lab1" for="sexta" style="margin-left:-22px;margin-right:+20px">
                                                Sexta-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="sabado"
                                                   value="option6" name="sabado" disabled>
                                            <label class="form-check-label" type="lab1" for="sabado" style="margin-left:-22px;margin-right:+20px">
                                                Sábado
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           </fieldset>
                       </form>
                   </div>
               </div>
               <div class="pb-0" id="line"></div>
           </div>
       </div>
   </div>
   @endforeach

   <div class="containerInfosProdutos">
   <div class="form-row" id="espac2">


    @php $consumidor_enderecos_atuais =  $consumidor_enderecos->where('consumidor_id', '=', Auth::user()->id) @endphp
    <div class="card w-50" style="margin-left:+100px">
            <div class="card-body">
              <h4 class="card-title">Endereço de entrega:</h4>
              <div  class="pb-0" id="line"> </div>
              <div class="form-group col-md-12">
                <label for="listaEndereco">Meus endereços </label>
                   <select multiple class="form-control" size="2" id="listaEndereco">
                        @foreach($consumidor_enderecos_atuais as $i)
                        @php $endereco = $enderecos->where('id', '=', $i->endereco_id)->first()@endphp

                        @php $cidade = $cidades->where('id','=', $endereco->cidade_id)->first() @endphp

                        @php $estado = $estados->where('id', '=', $cidade->estado_id)->first() @endphp
                         <option >{{$endereco->rua}}, {{$endereco->bairro}}, {{$endereco->numero}}, {{$cidade->nome}}, {{$estado->nome}}.</option>
                        @endforeach
                 </select>

            </div>

            <!-- <a href="http://www.seulink.com.br">Adicionar endereço</a> -->
            </div>
            <div class="card-body">
                <h4 class="card-title">Cartões:</h4>
                <div  class="pb-0" id="line"> </div>
                <div class="form-group col-md-12">
                  <label for="listaCartao">Meus cartões </label>
                     <select multiple class="form-control" size="2" id="listaCartao">
                            @foreach($cartoes as $cartao)
                           <option >VISA terminado em 544.</option>
                           @endforeach
                     </select>

                </div>
              <div class="form-group col-md-5">
                <label for="codSeguranca">Código de segurança </label>
                <input type="text"
                placeholder="Valor..."
                class="form-first-name form-control" name="codSeguranca" id="codSeguranca">
            </div>
              <!-- <A href="http://www.seulink.com.br" title="Pequena Descrição">Adicionar cartão</A> -->
              </div>
          </div>



</div>


    <div class="col-md-12 mb-3">
        <button type="submit" class="btn btn-primary">Finalizar</button>
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
<script src="{{asset('js/script_realizacao_de_assinatura.js')}}"></script>



</body>

</html>

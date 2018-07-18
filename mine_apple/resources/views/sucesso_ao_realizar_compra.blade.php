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
    <link rel="stylesheet" type="text/css" href="{{asset('css/sucesso_ao_realizar_compra_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/header_style.css')}}">
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
    @if(Auth::check())
        @if(Auth::user()->consumidor != null)
            @include('layouts.header_consumidor')
        @elseif(Auth::user()->produtor != null)
            @include('layouts.header_produtor')
        @elseif(Auth::user()->administrador != null)
            @include('layouts.header_administrador')
        @endif
    @else

        @include('layouts.header_usuario')
    @endif

    <main>
        <section>
            <div class="top-content">
                <div class="container">
                    <div class="row">
                        <div class="confimacao col-md-10 offset-lg-1 row">
                            <div class="col-md-6">
                                <img src="images/sucesso2.png" width="80" name="imgCheckMark" >
                                <label class="obrigado">Obrigado por escolher a Mineapple </label>
                            </div>

                            <div class="col-md-4 offset-lg-2 row">
                                <div class="col-md-9">
                                    <label class="obrigado2">Número do pedido:</label>
                                </div>
                                <div class="col-md-2">
                                    <label class="numPedido">01</label>
                                </div>
                            </div>
                            <div class=" confirm-env col-md-4">
                                <label >Confirmação do pedido enviada para:</label>
                            </div>
                            <div class="email col-md-4">
                                <label>fulano@email.com </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="top-content">
                <div class="container">
                    <div class="row">
                        <div class="container-titulo col-md-10 offset-lg-1">
                            <div class="col-md-12">
                                <h3 class="resumo">Resumo da sua compra</h3>
                            </div>
                        </div>
                        <div class="container-titulo col-md-10 offset-lg-1">
                            <div class="col-md-12">
                                <table class="table" id="tabela">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Produto</th>
                                        <th scope="col">Produzido por</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Preço</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="images/imagemProduto.png" width="100" height="100"></td>
                                        <td>Abacaxi</td>
                                        <td>Verduras & Cia</td>
                                        <td>0</td>
                                        <td>R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/imagemProduto.png" width="100" height="100"></td>
                                        <td>Banana</td>
                                        <td>FreshFruits</td>
                                        <td>0</td>
                                        <td>R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/imagemProduto.png" width="100" height="100"></td>
                                        <td>Laranja</td>
                                        <td>Verduras & Cia</td>
                                        <td>0</td>
                                        <td>R$ 0,00</td>
                                    </tr>
                                    </tbody>
                                    <thead >
                                        <tr class="espaco">
                                            <th class="frete">FRETE</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th>R$ 0,00</th>
                                        </tr>
                                    </thead>

                                    <thead>
                                    <tr class="espaco">
                                        <th class="frete">TOTAL</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th>R$ 0,00</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>

                            <form>
                                <fieldset class="endereco">
                                    <label class="my-0 mr-2" style="font-size: 20px" id="end">Endereço de entrega <i
                                            class="fas fa-map-marker-alt"></i></label>
                                    <div class="pb-0" id="line"></div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <p style="color: #000000; font-size: 15px">Nome da rua, bairro, número</p>
                                            <p style="color: #000000; font-size: 15px; margin-top: -15px">Cep, estado, cidade</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <a href="#">Retornar ao site</a>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>







    </main>

@include('layouts.footer')

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

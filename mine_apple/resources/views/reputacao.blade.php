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

  <!--   </header> -->
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


    <!--<section>-->


    <div class="top-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2">
                    <div class="contact_form_title">Minha reputação</div>
                    <div  class="pb-0" id="line"></div>
                    <div class="form-group">
                    <form>
                        <fieldset>
                            <div class="form-row" id="espac2">
                                <label class="Avaliacao" style="font-size: 19px">Avaliação média com base nos clientes:</label>
                                <div class="form-group col-md-12 offset-md-0 col-lg-5 offset-lg-0 ">
                                    <div>
                                        <div class="star_reputacao">
                                            <a href="#"><img src="{{asset('images/star1.png')}}" alt=""></a>
                                            <a href="#"><img src="{{asset('images/star1.png')}}" alt=""></a>
                                            <a href="#"><img src="{{asset('images/star1.png')}}" alt=""></a>
                                            <a href="#"><img src="{{asset('images/star0.png')}}" alt=""></a>
                                            <a href="#"><img src="{{asset('images/star0.png')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <label class="Avaliacao" style="font-size: 19px">Avaliações:</label>
                            </div>
                            <section class="format-section">
                                    <div class="container espacamento">
                                        <div class="form-group col-md-8 col-lg-6">
                                            <div>
                                                <div class="star_reputacao">
                                                    <a href="#"><img src="{{asset('images/star1.png')}}" alt=""></a>
                                                    <a href="#"><img src="{{asset('images/star1.png')}}" alt=""></a>
                                                    <a href="#"><img src="{{asset('images/star1.png')}}" alt=""></a>
                                                    <a href="#"><img src="{{asset('images/star0.png')}}" alt=""></a>
                                                    <a href="#"><img src="{{asset('images/star0.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="dataAvaliacao" name="dataAvaliacao" placeholder="Data de avaliação"  disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-10 col-lg-10">
                                        <label for="nomeCliente">Nome do cliente</label>
                                        <div class="form-group">
                                                <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" placeholder="Nome cliente"  disabled="disabled">
                                         </div>
                                         <label for="assinatura">Assinatura:</label>
                                         <div class="form-group">
                                                <input type="text" class="form-control" name="produtosSelecionados" id="produtosSelecionados" placeholder="Produtos selecionados"  disabled="disabled">
                                         </div>
                                    </div>
                            </section>
                            <section class="format-section">
                                 <div class="container espacamento">
                                    <div class="form-group col-md-8 col-lg-6">
                                        <div>
                                            <div class="star_reputacao">
                                                <a href="#"><img src="{{asset('images/star1.png')}}" alt=""></a>
                                                <a href="#"><img src="{{asset('images/star1.png')}}" alt=""></a>
                                                <a href="#"><img src="{{asset('images/star1.png')}}" alt=""></a>
                                                <a href="#"><img src="{{asset('images/star0.png')}}" alt=""></a>
                                                <a href="#"><img src="{{asset('images/star0.png')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="dataAvaliacao2" name="dataAvaliacao2" placeholder="Data de avaliação"  disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-10">
                                    <label for="nomeCliente">Nome do cliente</label>
                                    <div class="form-group">
                                            <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" placeholder="Nome cliente" disabled="disabled">
                                     </div>
                                     <label for="assinatura">Assinatura:</label>
                                     <div class="form-group">
                                            <input type="text" class="form-control"  name="produtosSelecionados2" id="produtosSelecionados2" placeholder="Produtos selecionados"  disabled="disabled">
                                     </div>
                                </div>
                            </section>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>




    @include('layouts.footer')

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            Todos os direitos reservados | Esse site foi feito com <i class="fa fa-heart"
                                                                                      aria-hidden="true"></i> pela <a
                                href="#" target="_blank">Weiche Technologie</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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

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
                <div class="col-lg-8 offset-lg-2">
                    <div class="contact_form_title">Resumo da Conta</div>
                    <div class="form-group">
                        <form>
                            <fieldset>
                                <div class="form-row">
                                    <div class="alinhamentosub col-12">
                                        <label class="fonte25P col-8 ">Pagamentos</label>
                                        <a href="" class="fonte25V col-3 text-right"><u>Ver todos</u></a>
                                    </div>

                                    <div  class="pb-0" id="line"> </div>
                                    <div class="col-12 text-center" style="font-size: 15px;padding-top:10px;margin-bottom: 60px">
                                            <a class="col-sm-4" href=""><u>1 Em Analise</u></a>
                                            <a class="col-sm-4 offset-1" href=""><u>2 Pendentes</u></a>
                                            <a class="col-sm-4 offset-1" href=""><u>0 Aprovados</u></a>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="alinhamentosub col-12">
                                        <label class="fonte25P col-8">Recebimentos</label>
                                        <a href="" class="fonte25V col-3 text-right"><u>Ver todos</u></a>
                                    </div>
                                    <div  class="pb-0" id="line"> </div>
                                    <div class="col-12 text-center" style="font-size: 15px;padding-top:10px;margin-bottom: 120px">
                                        <a class="col-sm-4" href=""><u>5 Em Analise</u></a>
                                        <a class="col-sm-4 offset-sm-1" href=""><u>3 Pendentes</u></a>
                                        <a class="col-sm-4 offset-sm-1" href=""><u>1 Aprovados</u></a>
                                    </div>
                                </div>

                                <div class="form-row" id="espac2">
                                    <label class="Saldo" style="font-size: 25px"> Saldo no Mineapple  <a href="#" data-toggle="tooltip" title="Tranfira os valores obtidos aqui para sua conta principal. Você ainda tem direito a uma transferência grátis.Após isso,pagará R$0,50 por transação.">?</a></label>
                                    <script>
                                        $(document).ready(function(){
                                            $('[data-toggle="tooltip"]').tooltip();
                                        });
                                    </script>
                                    <div  class="pb-0" id="line"> </div>

                                    <div class="card w-50">
                                        <div class="card-body">
                                            <h4 class="card-title">Disponivel R$500,00</h4>
                                            <div  class="pb-0" id="line"> </div>
                                            <p class="card-text"><input type="text" class="form-control" id="valor" name="valorDisponivel" placeholder="Valor"></p>
                                            <div  class="pb-0" id="line"> </div>
                                            <h4>Conta Bancaria</h4>
                                            <p>Banco do Basil S.A</p>
                                            <p>0443,Feira de Santana <p>0078524</p> </p>

                                            <a href="#" type="submit" class="btn btn-secondary">Transferir</a>
                                        </div>
                                    </div>
                                </div>
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

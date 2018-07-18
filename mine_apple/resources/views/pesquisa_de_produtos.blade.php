<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Mineapple</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mineapple shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pesquisa_de_produtos_style.css')}}">
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

    <div class="top-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_title pt-3" style="font-size: 30px;">
                        @if (isset($cat)) {{$cat->nome}}
                        @elseif(isset($busca)) {{'Produtos encontrados na busca por '.$busca}}
                        @else {{'Todos Produtos'}}
                        @endif</div>
                    <div class="pb-3" id="line"></div>

                @if(count($produtos)!=0)
                    @foreach($produtos as $produto)
                        @php
                            $foto = $fotos->where('produto_id', '=', $produto->id)->first();
                        @endphp
                        <div class="col-md-3 pt-0 pb-0 pl-0 pr-0" style="float: left;">
                            <form role="form" method="post" action="/adicionar_carrinho">
                                <fieldset>
                                    @csrf
                                    <div class="form-row">
                                        <input type="hidden" name="id" value="{{$produto->id}}">
                                        <input type="hidden" name="nome" value="{{$produto->nome}}">
                                        <input type="hidden" name="preco" value="{{$produto->valor}}">
                                        <input type="hidden" name="embalagem" value="{{$produto->embalagem_id}}">
                                        <div class="col-md-10">
                                            <article class="col-item" style="width: 100%; overflow: hidden">
                                                <div class="photo"
                                                     style="height: 140px;width: 100%; overflow: hidden;">
                                                    <div class="options-cart-round">
                                                        <button class="btn btn-secondary" type="submit"
                                                                title="Adicionar ao carrinho">
                                                            <span class="fa fa-shopping-basket"></span>
                                                        </button>
                                                    </div>
                                                    <a href="#">
                                                        <img src="{{asset($foto->path)}}" class="img-fluid"
                                                             alt="Product Image">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price-details col-lg-12">
                                                            @php
                                                                $produtor = \mine_apple\Produtor::where('usuario_id', '=', $produto->produtor_id)->first();
                                                            @endphp
                                                            <p class="details">Vendedor: {{$produtor->nomeFantasia}}</p>
                                                            <h1>{{$produto->nome}}</h1>
                                                            <span class="price-new">R${{$produto->valor}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    @endforeach
                @else
                        <div class="container">
                            <div class="jumbotron">
                                <div class="text-center"><i class="far fa-frown fa-5x" style="color: #08c8b0;"></i></div>
                                <h1 class="text-center">Poxa vida!</h1>
                                <h1 class="text-center" style="font-size: 13px"> Infelizmente não encontramos
                                @if(isset($busca))
                                    o produto que você solicitou.
                                @else
                                    produtos na categoria que você escolheu.
                                @endif
                                </h1>


                                <p class="text-center">Tente buscar de uma forma diferente, ou volte mais tarde.
                                    <br/>
                                    Pode ser que ele seja cadastrado a venda por outro produtor!
                                </p>
                                <p class="text-center"><a class="btn btn-primary" style="background-color: #08c8b0; border: none;" href="{{url("/")}}"><i class="fa fa-home"></i>
                                        Continuar comprando</a></p>
                            </div>
                        </div>
                @endif
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

                    <div
                        class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content">
                            Copyright &copy;<script>document.write(new Date().getFullYear().toString());</script>
                            Todos os direitos reservados | Esse site foi feito com <i class="fa fa-heart"
                                                                                      aria-hidden="true"></i> pela
                            <a
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
<script src="{{asset('js/pesquisa_img.js')}}"></script>
<script src="{{asset('js/script_tela_pesquisa_produtos.js')}}"></script>


</body>

</html>

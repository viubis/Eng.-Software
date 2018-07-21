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
    <link rel="stylesheet" type="text/css" href="{{asset('css/produtos_cadastrados_style.css')}}">
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

        <div class="top-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 ">
                        <div class="contact_form_title text-center col-12">Minhas compras</div>
                    @if(count($compras)>0)
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="tabela">
                                <thead><!--class="thead-light"-->
                                <tr>
                                    <th scope="col" class="corlinha">Número da compra</th>
                                    <th scope="col" class="corlinha">Data</th>
                                    <th scope="col" class="corlinha">Produtos</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $nCompra = 1; @endphp
                                @foreach($compras as $compra)
                                    <tr>
                                        <td id="nCompra">
                                            0{{$nCompra}}
                                            @php $nCompra++; @endphp
                                        </td>
                                        <td id="Data">
                                            {{$compra->data}} às {{$compra->hora}}
                                        </td>
                                        <td id="Produtos">
                                            @php
                                                $assinaturas = \mine_apple\Assinatura::where('compra_id', '=', $compra->id)->get();
                                            @endphp

                                            @foreach($assinaturas as $assinatura)
                                                @php
                                                    $assinaturaProdutos = \mine_apple\Assinatura_Produto::where('assinatura_id', '=', $assinatura->id)->get();
                                                @endphp
                                                @foreach($assinaturaProdutos as $assinaturaProduto)
                                                    @php
                                                        $produto = \mine_apple\Produto::where('id', '=', $assinaturaProduto->produto_id)->first();
                                                    @endphp
                                                    {{$produto->nome}}
                                                    @if($assinaturaProduto=!end($assinaturaProdutos))
                                                        <hr>
                                                    @endif
                                                @endforeach

                                            @endforeach
                                        </td>
                                        <th scope="row"><a href="{{url('/minhasCompras/detalhesCompras/'.$compra->id)}}"><u>Detalhes</u></a></th>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                            <div class="container">
                                <div class="jumbotron">
                                    <div class="text-center"><i class="far fa-frown fa-5x" style="color: #08c8b0;"></i></div>
                                    <h1 class="text-center">Poxa vida!</h1>
                                    <h1 class="text-center" style="font-size: 13px"> Parece que você ainda não fez nenhuma compra. </h1>


                                    <p class="text-center">Tente comprar algo e voltar novamente.</p>
                                    <p class="text-center"><a class="btn btn-primary" style="background-color: #08c8b0; border: none;" href="{{url("/")}}"><i class="fa fa-home"></i>
                                            Fazer compras</a></p>
                                </div>
                            </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>




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
                            Copyright &copy;<script>document.write(new Date().getFullYear().toString());</script>
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

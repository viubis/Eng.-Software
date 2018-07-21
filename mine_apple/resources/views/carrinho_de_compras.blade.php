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
    <link rel="stylesheet" type="text/css" href="{{asset('css/carrinho_de_compras_style.css')}}">
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
                    <h1 class="h1 page-title pt-3" data-reactid="30">Carrinho de compras</h1>
                    <div class="pb-0 line"></div>
                @if(count($itens)!=0)
                    <!-- ========================= SECTION CONTENT ========================= -->
                        <section class="section-content bg padding-y border-top">
                            <div class="row">
                                <main class="col-sm-9">
                                        <div class="card">
                                            <table class="table table-hover shopping-cart-wrap">
                                                <thead class="text-muted">
                                                <tr>
                                                    <th scope="col">Produto</th>
                                                    <th scope="col" width="120">Quantidade</th>
                                                    <th scope="col" width="120">Valor</th>
                                                    <th scope="col" class="text-right" width="150"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($itens as $item)
                                                    <form action="{{route('remover_carrinho')}}" method="post">
                                                        @csrf
                                                        <tr>
                                                            <input type="hidden" name="id" value="{{$item->id}}">
                                                            @php
                                                                $foto = \mine_apple\Foto::where('produto_id', '=', $item->id)->first();
                                                            @endphp
                                                            <td>
                                                                <figure class="media">
                                                                    <div class="img-wrap"
                                                                         style="float:left; height: 150px; width: 150px">
                                                                        <img src="{{asset($foto->path)}}"
                                                                             class="img-thumbnail img-sm"
                                                                        >
                                                                    </div>
                                                                    <figcaption class="media-body pl-2">
                                                                        <h3 class="title text-truncate">{{$item->name}}</h3>
                                                                        <dl class="dlist-inline small">
                                                                            @php
                                                                                $produto = \mine_apple\Produto::where('id','=',$item->id)->first();
                                                                                $produtor = \mine_apple\Produtor::where('usuario_id', '=', $produto->produtor_id)->first();
                                                                            @endphp
                                                                            <dt>Produtor: {{$produtor->nomeFantasia}}</dt>
                                                                            <dd>Cep: {{$produtor->endereco->numero_cep}}</dd>
                                                                        </dl>
                                                                    </figcaption>
                                                                </figure>
                                                            </td>
                                                            <td>
                                                                <label class="sr-only" for="quantidade">Quantidade</label>
                                                                <input type="number" class="ml-3" id="quantidade"
                                                                       placeholder="1" min="1" style="width: 50px" value="{{$item->qty}}">
                                                            </td>
                                                            <td>
                                                                @php
                                                                    $embalagem = \mine_apple\Embalagem::where('id', '=', $item->options->embalagem)->first();
                                                                @endphp
                                                                <div class="price-wrap">
                                                                    <h4 class="price">R$ {{number_format($item->price, 2, ',', '.')}}</h4>
                                                                    <small class="text-muted">(por {{$embalagem->tipo}})
                                                                    </small>
                                                                </div> <!-- price-wrap .// -->
                                                            </td>
                                                            <td class="text-right">
                                                                <button class="btn-sm btn-primary mt-0"
                                                                        style="background-color: rgba(0,0,0,0); border: none;
                                                        color: #0d82d3;"
                                                                        type="submit">Remover produto
                                                                </button>
                                                                {{--<a href="" class="btn btn-outline-danger"> × Remover</a>--}}
                                                            </td>
                                                        </tr>
                                                    </form>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div> <!-- card.// -->
                                </main> <!-- col.// -->
                                <aside class="col-sm-3" style="background-color:#f0f0f0;">
                                    <h4 class="pt-3">Resumo da compra</h4>
                                    <hr>
                                    <dl class="dlist-align">
                                        <dt>Sub-total</dt>
                                        <dd class="text-right">R$ {{number_format($subtotal, 2, ',', '.')}}</dd>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Frete:</dt>
                                        <dd class="text-right">R$ {{number_format($frete, 2, ',', '.')}}</dd>
                                    </dl>
                                    <dl class="dlist-align h4">
                                        <dt>Total:</dt>
                                        <dd class="text-right"><strong>R$ {{number_format($total, 2, ',', '.')}}</strong></dd>
                                    </dl>
                                </aside> <!-- col.// -->
                            </div>

                        </section>
                        <!-- ========================= SECTION CONTENT END// ========================= -->
                        <div class="pt-3">
                            <div class="card w-auto col-md-4 pl-0 pr-0">
                                <div class="card-body">
                                    <h4 class="card-title">Calcule o frete:</h4>
                                    <div class="pb-0 line"></div>
                                    <form action="{{route('atualizar_carrinho')}}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-9">
                                                <label class="sr-only" for="CEP">CEP </label>
                                                <input type="text" placeholder="Informe o seu cep..."
                                                       class="form-first-name form-control" id="CEP" name="cep" data-mask="00000000" style="color: #000000" required>
                                            </div>
                                            <div class="form-group col-md-1" align="center">
                                                <button type="submit" class="btn-sm btn-primary mt-1"
                                                        style="background-color: #08c8b0; border: none;">Calcular
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3" align="center">
                            <form action="{{url('/realizacao_assinatura')}}" method="get">
                                <input type="hidden" name="frete" value="{{$frete}}">
                                <button type="submit" class="btn btn-primary" href="{{url('/realizacao_assinatura')}}">
                                    Finalizar
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="container">
                            <div class="jumbotron">
                                <div class="text-center"><i class="far fa-frown fa-5x" style="color: #08c8b0;"></i></div>
                                <h1 class="text-center">Poxa vida!</h1>
                                <h1 class="text-center" style="font-size: 13px"> Parece que você ainda não adicionou nenhum produto ao
                                seu carrinho. </h1>


                                <p class="text-center">Tente adicionar algo e voltar novamente.</p>
                                <p class="text-center"><a class="btn btn-primary" style="background-color: #08c8b0; border: none;" href="{{url("/")}}"><i class="fa fa-home"></i>
                                        Continuar comprando</a></p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

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
<script src="{{asset('plugins/jquery-plugin-mask/jquery.mask.js')}}"></script>

</body>

</html>

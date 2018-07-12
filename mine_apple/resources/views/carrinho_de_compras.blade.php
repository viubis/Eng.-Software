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
                    <div class="col-lg-12 mt-3 ">
                        <h1 class="h1 page-title" data-reactid="30">Carrinho de compras</h1>
                        <div class="pb-0 line"></div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row pl-5">
        <div class="col-md-6">
            @foreach($itens as $item)
                <div class="containerInfosProdutos">
                    <div class="container">
                        <div class="row backColor">
                            <div class="col-sm-5">
                                <div class="imagem">
                                    @php
                                        $foto = \mine_apple\Foto::where('produto_id', '=', $item->id)->first();
                                    @endphp
                                    <img src="{{asset($foto->path)}}" style="float:left; height: 150px; width: 150px">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <form action="/remover_carrinho" method="post">
                                    @csrf
                                    <fieldset>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nomeProd1"> Nome Produto </label>
                                                <input type="text" style="border: none;" class="form-control" id="nomeProd1"
                                                       value="{{$item->name}}" name="nome" readonly>
                                            </div>

                                            <div class="form-group col-md-">
                                                 <label for="quantidadeProd1">Quantidade </label>
                                                <input type="number" step="0" min="1" max="999" name="quantidade"
                                                       value="{{$item->qty}}"
                                                       class="form-first-name form-control" id="quantidadeProd1" readonly>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="valorProd1">Preço</label>
                                                <input type="number" style="border: none;" min="0.1" max="999" name="preco"
                                                       class="form-control" id="valorProd1"
                                                       value="{{$item->price}}" readonly>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="tipoEmbalagemProd1">Pacote</label>
                                                @php
                                                    $embalagem = \mine_apple\Embalagem::where('id', '=', $item->options->embalagem)->first();
                                                @endphp
                                                <input type="text" style="border: none;" name="pacote" class="form-control"
                                                    readonly id="tipoEmbalagemProd1" value="{{$embalagem->tipo}}">
                                            </div>
                                            <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                            <div class="pt-5">
                                                <button class="btn-sm btn-primary mt-4"
                                                        style="background-color: rgba(0,0,0,0); border: none;
                                                        color: #0d82d3;"
                                                        type="submit">Remover produto</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    <div class="pb-0 line"></div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-6">
            <div class="form-row espac2 mt-xl-5" >
                <div class="card w-50" style="margin-left:+100px">
                    <div class="card-body" style="background-color: #f0f0f0">
                        <h4 class="card-title">Resumo da compra:</h4>
                        <div class="pb-0 line"></div>
                        <div class="form-row" id="espac1">
                            <div class="form-group col-md-6">
                                <label for="subTotal">Sub-total: </label>
                                <input type="text"
                                       value="{{$subtotal}}" style="border: none;"
                                       class="form-first-name form-control" id="subTotal" name="subTotal" readonly>
                                <label for="frete">Frete: </label>
                                <input type="text" placeholder="Valor" style="border: none;" class="form-first-name form-control" id="frete"
                                       name="frete" readonly="">
                            </div>
                        </div>
                        <label style="font-size: 20px">Total: </label>
                        <label class="ml-1">R$ 00,00</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="containerInfosProdutos mt-4">
        <div class="form-row espac2">
            <div class="card w-25" style="margin-left:+100px">
                <div class="card-body">
                    <h4 class="card-title">Calcule o frete:</h4>
                    <div class="pb-0 line"></div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="CEP">CEP </label>
                            <input type="text"
                                   class="form-first-name form-control" id="CEP" name="cep">

                        </div>
                        <div class="form-group col-md-1 mt-2" align="center">
                            <button type="submit" class="btn-sm btn-primary mt-4"
                                    style="background-color: #08c8b0; border: none;">Calcular
                            </button>
                        </div>
                    </div>
                    <label>Valor do frete: </label>
                    <label class="ml-1">R$ 00,00</label>
                </div>
            </div>
        </div>
        <br/><br/>
        <div class="col-md-12 mb-3" align="center">
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

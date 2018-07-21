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
    <link rel="stylesheet" type="text/css" href="{{asset('css/detalhes_compra.css')}}">
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

    <!--<section>-->
    <div class="top-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="contact_form_title">Detalhes da compra nº 0{{$idCompra}}</div>
        @php
            $assinaturas = \mine_apple\Assinatura::where('compra_id', '=', $compra->id)->get();
            $numAssinatura = 1;
        @endphp
        @foreach($assinaturas as $assinatura)
                    <div style="font-size: 20px;">Assinatura nº 0{{$numAssinatura}}</div>
                    @php $numAssinatura++;  @endphp
                    <form>
                        <fieldset>
                            <div class="form-row" id="espac">
                                <div class="form-group col-md-1">
                                    <h4>Estado:</h4>
                                </div>
                                @if($assinatura->status==1)
                                    <div class="form-group col-md-2" style="margin-top: -25px;">
                                        <div class="anil_nepal">
                                            <label class="switch_1 switch-left-right_1">
                                                <input class="switch-input_1" type="checkbox" name="estado">
                                                <span class="switch-label_1" data-on="Inativa" data-off="Ativa"></span> <span
                                                    class="switch-handle_1"></span> </label>
                                        </div>
                                    </div>
                                @else
                                    <div class="form-group col-md-2" style="margin-top: -25px;">
                                        <div class="anil_nepal">
                                            <label class="switch switch-left-right">
                                                <input class="switch-input" type="checkbox" name="estado">
                                                <span class="switch-label" data-on="Inativa" data-off="Ativa"></span> <span
                                                    class="switch-handle"></span> </label>
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group col-md-3">
                                    <h4>Adesão: {{$compra->data}} às {{$compra->hora}} </h4>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @php
        $assinaturaProdutos = \mine_apple\Assinatura_Produto::where('assinatura_id', '=', $assinatura->id)->get();
    @endphp
    @foreach($assinaturaProdutos as $assinaturaProduto)
        @php
            $produto = \mine_apple\Produto::where('id', '=', $assinaturaProduto->produto_id)->first();
            $foto = \mine_apple\Foto::where('produto_id', '=', $produto->id)->first();
            $embalagem = \mine_apple\Embalagem::where('id', '=', $produto->embalagem_id)->first();
            $produtor = \mine_apple\Produtor::where('usuario_id', '=', $produto->produtor_id)->first();
        @endphp
    <div class="containerInfosProdutos">
        <div class="container">
            <div class="row" id="backColor">
                <div class="col-sm-4">
                    <div class="subcontainerProduto1">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            </div>
                        </div>
                        <div class="imagem">
                            <div style="height: 300px; width: 300px;overflow: hidden">
                                <img src="{{asset($foto->path)}}" class="img-thumbnail img-sm" alt="Responsive image"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="subcontainerProduto2 ">
                        <form>
                            <fieldset>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nomeprod1">Produto </label>
                                        <input type="text" style="background: #FFFFFF" class="form-control" id="nomeprod1" name="nomeprod{{$produto->id}}"
                                               value="{{$produto->nome}}" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tipoEmbalagemProd1">Tipo de embalagem </label>

                                        <input type="text" class="form-control" value="{{$embalagem->tipo}}"
                                               disabled style="background: #FFFFFF" name="tipoEmbalagemProd{{$produto->id}}" id="tipoEmbalagemProd1">
                                    </div>
                                </div>
                                <div class="form-row" id="espac1">
                                    <div class="form-group col-md-6">
                                        <label for="freq">Frequência de entrega </label>
                                        <input type="text" style="background: #FFFFFF" min="1" max="999"
                                               value="{{$assinaturaProduto->frequencia}} vez(es) por semana"
                                               name="frequenciaEntregaProd{{$produto->id}}"
                                               class="form-control" id="freq" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="quantProd1">Quantidade</label>
                                        <input type="text" style="background: #FFFFFF" min="1" max="999" name="qntProd1" class="form-control"
                                               id="quantProd1" value="{{$assinaturaProduto->quantidade}}" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="vendedor">Produtor</label>
                                        <input type="text" name="nomeVendedor"
                                               value="{{$produtor->nomeFantasia}}" style="background: #FFFFFF"
                                               class="form-first-name form-control" id="vendedor" disabled>
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="valorProd1">Valor</label>
                                        <input type="number" step="0.01" min="0.01" max="999.00" name="valorProd1"
                                               value="{{$produto->valor}}" style="background: #FFFFFF"
                                               class="form-first-name form-control" id="valor" disabled>
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
                                                @if($assinaturaProduto->seg==1)
                                                    <input class="form-check-input" type="checkbox" id="segunda"
                                                       value="segunda" checked disabled name="segunda">
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="segunda"
                                                           value="segunda" disabled name="segunda">
                                                @endif
                                                <label class="form-check-label" type="lab1" for="segunda">
                                                    Segunda-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($assinaturaProduto->ter==1)
                                                    <input class="form-check-input" checked type="checkbox" id="terca"
                                                       value="terca" disabled name="terca">
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="terca"
                                                           value="terca" disabled name="terca">
                                                @endif
                                                <label class="form-check-label" type="lab1" for="terca">
                                                    Terça-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($assinaturaProduto->qua==1)
                                                    <input class="form-check-input" type="checkbox" id="quarta"
                                                       value="quarta" checked disabled name="quarta">
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="quarta"
                                                           value="quarta" disabled name="quarta">
                                                @endif
                                                <label class="form-check-label" type="lab1" for="quarta">
                                                    Quarta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($assinaturaProduto->qui==1)
                                                    <input class="form-check-input" checked type="checkbox" id="quinta"
                                                       value="quinta" disabled name="quinta">
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="quinta"
                                                           value="quinta" disabled name="quinta">
                                                @endif
                                                <label class="form-check-label" type="lab1" for="quinta">
                                                    Quinta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($assinaturaProduto->sex==1)
                                                    <input class="form-check-input" type="checkbox" checked id="sexta"
                                                           value="sexta" disabled name="sexta">
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="sexta"
                                                           value="sexta" disabled name="sexta">
                                                @endif
                                                <label class="form-check-label" type="lab1" for="sexta">
                                                    Sexta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($assinaturaProduto->sab==1)
                                                    <input class="form-check-input" type="checkbox" id="sabado"
                                                       value="sabado" checked disabled name="sabado">
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="sabado"
                                                           value="sabado" disabled name="sabado">
                                                @endif
                                                <label class="form-check-label" type="lab1" for="sabado">
                                                    Sábado
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($assinaturaProduto->dom==1)
                                                    <input class="form-check-input" type="checkbox" id="domingo"
                                                       value="domingo" checked disabled name="domingo">
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="domingo"
                                                           value="domingo"  disabled name="domingo">
                                                @endif
                                                <label class="form-check-label" type="lab1" for="domingo">
                                                    Domingo
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
    @endforeach
@endforeach
            <div class="col-lg-12">
                <form>
                    <fieldset class="endereco">

                        <label class="my-0 mr-2" style="font-size: 20px">Total <i class="fa fa-calculator"></i> </label>
                        <div class="pb-0" id="line"></div>
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="frete">Frete</label>
                                <input type="number" step="0.01" min="0.01" max="999.00" name="frete"
                                       placeholder="R$ {{number_format($compra->frete, 2, ',', '.')}}" style="background: #FFFFFF"
                                       class="form-first-name form-control" id="frete" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="valorTotal">Valor Total</label>
                                <input type="number" step="0.01" min="0.01" max="999.00" name="valorTotal"
                                       placeholder="R$ {{number_format($compra->valor, 2, ',', '.')}}"
                                       class="form-first-name form-control" id="valorTotal" disabled>
                            </div>
                        </div>

                        @php
                            $consEnd = \mine_apple\ConsumidorEndereco::where('id', '=', $compra->consumidor_endereco_id)->first();
                            $endereco = \mine_apple\Endereco::where('id', '=', $consEnd->endereco_id)->first();
                            $cidade = \mine_apple\Cidade::where('id', '=', $endereco->cidade_id)->first();
                            $estado = \mine_apple\Estado::where('id', '=', $cidade->estado_id)->first();
                        @endphp
                        <label class="my-0 mr-2" style="font-size: 20px" id="end">Endereço de entrega <i
                                class="fas fa-map-marker-alt"></i></label>
                        <div class="pb-0" id="line"></div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <p style="color: #000000; font-size: 15px">{{$endereco->rua}}, {{$endereco->bairro}}, {{$endereco->numero}},
                                {{$endereco->complemento}}</p>
                                <p style="color: #000000; font-size: 15px; margin-top: -15px">{{$endereco->numero_cep}}, {{$estado->nome}}, {{$cidade->nome}}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <a href="{{url('/minhascompras')}}">Voltar</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
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

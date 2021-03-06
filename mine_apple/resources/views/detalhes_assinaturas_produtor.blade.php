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
    <link rel="stylesheet" type="text/css" href="{{asset('css/detalhes_assinaturas_produtor_style.css')}}">
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
                    <div class="contact_form_title">Detalhes da Assinatura</div>
                    <form>
                        <fieldset>
                            <div class="form-row" id="espac">
                                <div class="form-group col-md-3">
                                    <label for="nomeprod">Número da assinatura </label>
                                    <input type="number" min="1" max="999" name="numeroAssinatura" class="form-control" id="numero"
                                           placeholder="Número" disabled>
                                </div>
                                <div class="form-group col-md-7">
                                    <label for="freq">Cliente</label>
                                    <input type="text" class="form-control" id="nomeCliente"
                                           placeholder="Nome do Cliente" name="nomeCliente" disabled>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="containerInfosProdutos">
        <div class="container">
            <div class="row" id="backColor">
                <div class="col-sm-4">
                    <div class="subcontainerProduto1">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="texto">
                                    <input type="text" class="form-control" id="numprod" name="numprod" placeholder="Nº produto"
                                           disabled>
                                </div>
                            </div>
                        </div>
                        <div class="imagem">
                            <div class="imagemProduto"><img src="{{asset('images/imagemProduto.png')}}" alt="Responsive image"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="subcontainerProduto2 ">
                        <form>
                            <fieldset>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nomeprod">Produto </label>
                                        <input type="text" class="form-control" id="nomeprod1"
                                               placeholder="Nome do produto" name="nomeprod1" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tipoEmbalagemProd1">Tipo de embalagem </label>
                                        <input type="text" class="form-control" placeholder="Tipo de embalagem"
                                               disabled id="tipoEmbalagemProd1" name="tipoEmbalagemProd1">
                                    </div>
                                </div>
                                <div class="form-row" id="espac1">
                                    <div class="form-group col-md-6">
                                        <label for="freq">Frequência de entrega </label>
                                        <input type="number" min="1" max="999" name="frequenciaEntregaProd1"
                                               class="form-control" id="freq"
                                               placeholder="Frequência de entrega por semana" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="quant">Quantidade</label>
                                        <input type="number" min="1" max="999" name="qntProd1" class="form-control"
                                               id="quant" placeholder="Quantidade" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="valorProd1">Valor</label>
                                        <input type="number" step="0.01" min="0.01" max="999.00" name="valorProd1"
                                               placeholder="Valor"
                                               class="form-first-name form-control" id="valorProd1" disabled>
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
                                                       value="option1" disabled name="segunda">
                                                <label class="form-check-label" type="lab1" for="segunda">
                                                    Segunda-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="terca" id="terca"
                                                       value="option2" disabled>
                                                <label class="form-check-label" type="lab1" for="terca">
                                                    Terça-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="quarta" id="quarta"
                                                       value="option3" disabled>
                                                <label class="form-check-label" type="lab1" for="quarta">
                                                    Quarta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="quinta" id="quinta"
                                                       value="option4" disabled>
                                                <label class="form-check-label" type="lab1" for="quinta">
                                                    Quinta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="sexta" id="sexta"
                                                       value="option5" disabled>
                                                <label class="form-check-label" type="lab1" for="sexta">
                                                    Sexta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="sabado" id="sabado"
                                                       value="option6" disabled>
                                                <label class="form-check-label" type="lab1" for="sabado">
                                                    Sábado
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="domingo" id="domingo"
                                                       value="option6" disabled>
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

            <div class="col-lg-12">
                <form>
                    <fieldset class="endereco">

                        <label class="my-0 mr-2" style="font-size: 20px">Total <i class="fa fa-calculator"></i> </label>
                        <div class="pb-0" id="line"></div>
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="frete">Frete</label>
                                <input type="number" step="0.01" min="0.01" max="999.00" name="frete"
                                       placeholder="Frete"
                                       class="form-first-name form-control" id="frete" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="valorTotal">Valor Total</label>
                                <input type="number" step="0.01" min="0.01" max="999.00" name="valorTotal"
                                       placeholder="Valor Total"
                                       class="form-first-name form-control" id="valorTotal" disabled>
                            </div>
                        </div>

                        <label class="my-0 mr-2" style="font-size: 20px" id="end">Endereço <i
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
                                <a href="#">Voltar</a>
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

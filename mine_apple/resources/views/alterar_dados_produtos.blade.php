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
    <link rel="stylesheet" type="text/css" href="{{asset('css/cadastro_produtos.css')}}">
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
        <!--  <div class="inner-bg">-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2" style="box-shadow: 1px 1px 5px 0 #d6d6d6; padding: 20px">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Alterar informações do produto</div>
                        <form role="form" action="{{route('alterarProdutos')}}" method="post" class="registration-form">
                            @csrf
                            <fieldset>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <form method="POST" enctype="multipart/form-data">
                                            @php
                                                $fotos = \mine_apple\Foto::where('produto_id', '=', $produto->id)->get();
                                            @endphp
                                            <label for="form-control">Imagens do seu produto:</label>
                                            <div class="row pb-3">
                                                @foreach($fotos as $foto)
                                                <div class="col-md-3" style="height: 150px; width: 150px;overflow: hidden">
                                                    <img src="{{asset($foto->path)}}"
                                                         class="img-thumbnail img-sm">
                                                </div>
                                                @endforeach
                                            </div>
                                            {{--<input type="file" name="path" accept="image/*" class="form-control">--}}
                                        </form>
                                    </div>
                                </div>

                                <div class="form-row">
                                    @php
                                        $categoria = \mine_apple\Categoria::where('id', '=', $produto->categoria_id)->first();
                                    @endphp
                                    <div class="col-md-6 mb-3">
                                        <label class="my-1 mr-2" for="categorias">Categoria </label>
                                        <select class="custom-select my-1 mr-sm-2" name="categoria_id" id="categorias">
                                            @if($categoria->nome=='Cereais')
                                                <option value="1" selected>Cereais</option>
                                                <option value="2">Frutas</option>
                                                <option value="3">Legumes</option>
                                                <option value="4">Leguminosas</option>
                                                <option value="5">Raízes</option>
                                                <option value="6">Tubérculos</option>
                                                <option value="7">Verduras</option>
                                            @elseif($categoria->nome=='Frutas')
                                                <option value="1">Cereais</option>
                                                <option value="2" selected>Frutas</option>
                                                <option value="3">Legumes</option>
                                                <option value="4">Leguminosas</option>
                                                <option value="5">Raízes</option>
                                                <option value="6">Tubérculos</option>
                                                <option value="7">Verduras</option>
                                            @elseif($categoria->nome=='Legumes')
                                                <option value="1">Cereais</option>
                                                <option value="2">Frutas</option>
                                                <option value="3" selected>Legumes</option>
                                                <option value="4">Leguminosas</option>
                                                <option value="5">Raízes</option>
                                                <option value="6">Tubérculos</option>
                                                <option value="7">Verduras</option>
                                            @elseif($categoria->nome=='Leguminosas')
                                                <option value="1">Cereais</option>
                                                <option value="2">Frutas</option>
                                                <option value="3">Legumes</option>
                                                <option value="4" selected>Leguminosas</option>
                                                <option value="5">Raízes</option>
                                                <option value="6">Tubérculos</option>
                                                <option value="7">Verduras</option>
                                            @elseif($categoria->nome=='Raízes')
                                                <option value="1">Cereais</option>
                                                <option value="2">Frutas</option>
                                                <option value="3">Legumes</option>
                                                <option value="4">Leguminosas</option>
                                                <option value="5" selected>Raízes</option>
                                                <option value="6">Tubérculos</option>
                                                <option value="7">Verduras</option>
                                            @elseif($categoria->nome=='Tubérculos')
                                                <option value="1">Cereais</option>
                                                <option value="2">Frutas</option>
                                                <option value="3">Legumes</option>
                                                <option value="4">Leguminosas</option>
                                                <option value="5">Raízes</option>
                                                <option value="6" selected>Tubérculos</option>
                                                <option value="7">Verduras</option>
                                            @elseif($categoria->nome=='Verduras')
                                                <option value="1">Cereais</option>
                                                <option value="2">Frutas</option>
                                                <option value="3">Legumes</option>
                                                <option value="4">Leguminosas</option>
                                                <option value="5">Raízes</option>
                                                <option value="6">Tubérculos</option>
                                                <option value="7" selected>Verduras</option>
                                            @endif
                                        </select>
                                    </div>

                                    @php
                                        $embalagem = \mine_apple\Embalagem::where('id', '=', $produto->embalagem_id)->first();
                                    @endphp
                                    <div class="col-md-6 mb-3">
                                        <label class="my-1 mr-2" for="Unidade">Tipo de embalagem </label>
                                        <select class="custom-select my-1 mr-sm-2" name="embalagem_id" id="Unidade">
                                            @if($embalagem->tipo=='Unidade')
                                                <option value="1" selected>Unidade</option>
                                                <option value="2">Caixa</option>
                                                <option value="3">Litro</option>
                                                <option value="4">Quilo</option>
                                                <option value="5">Dúzia</option>
                                            @elseif($embalagem->tipo=='Caixa')
                                                <option value="1">Unidade</option>
                                                <option value="2" selected>Caixa</option>
                                                <option value="3">Litro</option>
                                                <option value="4">Quilo</option>
                                                <option value="5">Dúzia</option>
                                            @elseif($embalagem->tipo=='Litro')
                                                <option value="1">Unidade</option>
                                                <option value="2">Caixa</option>
                                                <option value="3" selected>Litro</option>
                                                <option value="4">Quilo</option>
                                                <option value="5">Dúzia</option>
                                            @elseif($embalagem->tipo=='Quilo')
                                                <option value="1">Unidade</option>
                                                <option value="2">Caixa</option>
                                                <option value="3">Litro</option>
                                                <option value="4" selected>Quilo</option>
                                                <option value="5">Dúzia</option>
                                            @elseif($embalagem->tipo=='Dúzia')
                                                <option value="1">Unidade</option>
                                                <option value="2">Caixa</option>
                                                <option value="3">Litro</option>
                                                <option value="4">Quilo</option>
                                                <option value="5" selected>Dúzia</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" value="{{$produto->id}}" name="id">
                                <input type="hidden" value="{{$produto->produtor_id}}" name="produtor_id">

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="" for="nome">Nome</label>
                                        <input type="text" name="nome" placeholder="Nome do Produto..."
                                               class="form-first-name form-control" id="nome" value="{{$produto->nome}}">
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label class="" for="qtd">Quantidade produzida por dia</label>
                                        <input type="number" min="1" max="999" name="maxPorDia"
                                               placeholder="Quantidade produzida por dia..."
                                               value="{{$produto->maxPorDia}}"
                                               class="form-first-name form-control" id="qtd">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="" for="qtdmin">Quantidade mínima por assinatura</label>
                                        <input type="number" min="1" max="999" name="minPorAssinatura"
                                               placeholder="Quantidade mínima de produtos por assinatura..."
                                               value="{{$produto->minPorAssinatura}}"
                                               class="form-first-name form-control" id="qtdmin">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="" for="frete">Valor máximo de frete (R$)</label>
                                        <input type="number" step="0.01" min="0.01" max="999.00" name="freteMax"
                                               placeholder="Valor máximo de frete..."
                                               value="{{$produto->freteMax}}"
                                               class="form-first-name form-control" id="frete">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label class="" for="valor">Valor (R$)</label>
                                        <input type="number" step="0.01" min="0.01" max="999.00" name="valor"
                                               placeholder="Valor..."
                                               value="{{$produto->valor}}"
                                               class="form-first-name form-control" id="valor">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label class="" for="descricao">Descrição</label>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" id="comment" name="descricao"
                                                      placeholder="Descrição do produto... ">{{$produto->descricao}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row" type="ent">
                                    <div class="col-md-12 mb-3">
                                        <label class="my-1 mr-2" for="diasEntrega">Dias para entrega</label>
                                    </div>
                                </div>
                                <div class="form-row" type="row1">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                @if($produto->seg==1)
                                                    <input class="form-check-input" type="checkbox" id="checkboxSegunda"
                                                           value="true" checked name="entrega[seg]">
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="checkboxSegunda"
                                                    value="true" name="entrega[seg]">
                                                @endif
                                                <label class="form-check-label" type="lab1" for="checkboxSegunda">
                                                    Segunda-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($produto->ter==1)
                                                    <input class="form-check-input" type="checkbox" id="checkboxTerca"
                                                           value="true" checked name="entrega[ter]" >
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="checkboxTerca"
                                                           value="true" name="entrega[ter]" >
                                                @endif
                                                <label class="form-check-label" type="lab1" for="checkboxTerca">
                                                    Terça-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($produto->qua==1)
                                                    <input class="form-check-input" type="checkbox" id="checkboxQuarta"
                                                           value="true" checked name="entrega[qua]" >
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="checkboxQuarta"
                                                           value="true" name="entrega[qua]" >
                                                @endif
                                                <label class="form-check-label" type="lab1" for="checkboxQuarta">
                                                    Quarta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($produto->qui==1)
                                                    <input class="form-check-input" type="checkbox" id="checkboxQuinta"
                                                           value="true" checked name="entrega[qui]" >
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="checkboxQuinta"
                                                           value="true" name="entrega[qui]" >
                                                @endif
                                                <label class="form-check-label" type="lab1" for="checkboxQuinta">
                                                    Quinta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($produto->sex==1)
                                                    <input class="form-check-input" type="checkbox" id="checkboxSexta"
                                                           value="true" checked name="entrega[sex]" >
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="checkboxSexta"
                                                           value="true" name="entrega[sex]" >
                                                @endif
                                                <label class="form-check-label" type="lab1" for="checkboxSexta">
                                                    Sexta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($produto->sab==1)
                                                    <input class="form-check-input" type="checkbox" id="checkboxSabado"
                                                           value="true" checked name="entrega[sab]" >
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="checkboxSabado"
                                                           value="true" name="entrega[sab]" >
                                                @endif
                                                <label class="form-check-label" type="lab1" for="checkboxSabado">
                                                    Sábado
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                @if($produto->dom==1)
                                                    <input class="form-check-input" type="checkbox" id="checkboxDomingo"
                                                           value="true" checked name="entrega[dom]" >
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="checkboxDomingo"
                                                           value="true" name="entrega[dom]" >
                                                @endif
                                                <label class="form-check-label" type="lab1" for="checkboxDomingo">
                                                    Domingo
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-next">Alterar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
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
</body>

</html>

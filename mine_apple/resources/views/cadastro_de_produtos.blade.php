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
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">

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
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Cadastro de Produto</div>
                        <form role="form" action="{{route('produto.cadastrar')}}" method="post" enctype="multipart/form-data" class="registration-form">
                            @csrf

                            <fieldset>
                                <div class="form-row item" id="formulario">
                                    <div class="col-md-12 mb-3">
                                        <label for="form-control">Adicione imagens do seu produto:</label>
                                        <input id="item" type="file" style="margin-bottom: 10px" name="imagem" accept="image/*" class="form-control">
                                    </div>
                                </div>
                                <input style="font-size: 15px; margin-bottom: 20px; margin-top: -10px" type="button" class="btn-circle" id="novaImg" value="Nova imagem"/>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="my-1 mr-2" for="categorias">Categoria </label>
                                        <select name="categoria" class="custom-select my-1 mr-sm-2" id="categorias">
                                            <option value="Cereais">Cereais</option>
                                            <option value="Frutas">Frutas</option>
                                            <option value="Legumes">Legumes</option>
                                            <option value="Leguminosas">Leguminosas</option>
                                            <option value="Raízes">Raízes</option>
                                            <option value="Tubérculos">Tubérculos</option>
                                            <option value="Verduras">Verduras</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="my-1 mr-2" for="Unidade">Tipo de embalagem </label>
                                        <select name="embalagem" class="custom-select my-1 mr-sm-2" id="Unidade">
                                            <option value="Unidade">Unidade</option>
                                            <option value="Caixa">Caixa</option>
                                            <option value="Litro">Litro</option>
                                            <option value="Quilo">Quilo</option>
                                            <option value="Dúzia">Dúzia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="sr-only" for="nome">Nome</label>
                                        <input type="text" placeholder="Nome do Produto..."
                                               class="form-control" name="nome">
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label class="sr-only" for="qtd">Quantidade produzida por dia</label>
                                        <input type="number" min="1"
                                               placeholder="Quantidade produzida por dia..."
                                               class="form-control" name="maxPorDia">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="sr-only" for="qtdmin">Quantidade mínima por assinatura</label>
                                        <input type="number" min="1"
                                               placeholder="Quantidade mínima de produtos por assinatura..."
                                               class="form-control" name="minPorAssinatura">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="sr-only" for="frete">Valor máximo de frete</label>
                                        <input type="number" step="0.1" min="0"
                                               placeholder="Valor máximo de frete..."
                                               class="form-control" name="freteMax">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label class="sr-only" for="valor">Valor</label>
                                        <input type="number" step="0.01" min="0.0"
                                               placeholder="Valor..."
                                               class="form-control" name="valor">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <textarea class="form-control" name="descricao" rows="5" id="comment" placeholder="Descrição do produto... "></textarea>
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

                                                <input class="form-check-input" type="checkbox" name="entrega[seg]"
                                                       value="true" id="checkboxSegunda">
                                                <label class="form-check-label" type="lab1" for="checkboxSegunda">
                                                    Segunda-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="entrega[ter]"
                                                       value="true" id="checkboxTerca">
                                                <label class="form-check-label" type="lab1" for="checkboxTerca">
                                                    Terça-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="entrega[qua]"
                                                       value="true" id="checkboxQuarta">
                                                <label class="form-check-label" type="lab1" for="checkboxQuarta">
                                                    Quarta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="entrega[qui]"
                                                       value="true" id="checkboxQuinta">
                                                <label class="form-check-label" type="lab1" for="checkboxQuinta">
                                                    Quinta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="entrega[sex]"
                                                       value="true" id="checkboxSexta">
                                                <label class="form-check-label" type="lab1" for="checkboxSexta">
                                                    Sexta-feira
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="entrega[sab]"
                                                       value="true" id="checkboxSabado">
                                                <label class="form-check-label" type="lab1" for="checkboxSabado">
                                                    Sábado
                                                </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="entrega[dom]"
                                                       value="true" id="checkboxDomingo">
                                                <label class="form-check-label" type="lab1" for="checkboxDomingo">
                                                    Domingo
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-next">Cadastrar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
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
<script src="{{asset('js/adicaoImagensDinamicamente.js')}}"></script>
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

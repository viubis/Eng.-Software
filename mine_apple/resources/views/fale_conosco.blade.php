<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Fale conosco</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fale_conosco_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fale_conosco_responsive.css')}}">

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

    <!-- Contact Info -->

    <div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div
                        class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="phone"><i class="fa fa-mobile-alt fa-3x" style="color: #08c8b0"></i></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Telefone</div>
                                <div class="contact_info_text">+55 075 1234 5678</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="email"><i class="far fa-envelope fa-3x" style="color: #08c8b0"></i></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Email</div>
                                <div class="contact_info_text">mineapple.organicstore@gmail.com</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="mapMarker"><i class="fa fa-map-marker-alt fa-3x" style="color: #08c8b0"></i>
                            </div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Endereço</div>
                                <div class="contact_info_text">Rua Itamar de Carvalho, 271, Feira de Santana, Bahia,
                                    BR
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Fale conosco</div>

                        <form action="{{route('enviarMensagem')}}" id="contact_form" method="POST">
                            @csrf
                            <div
                                class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                <input type="text" id="contact_form_name" class="contact_form_name input_field"
                                       placeholder="Seu nome" required="required" name="nome"
                                       data-error="É obrigatório informar seu nome.">
                                <input type="email" id="contact_form_email" class="contact_form_email input_field"
                                       placeholder="Seu email" required="required" name="email"
                                       data-error="É obrigatório informar seu email.">
                                <input type="tel" id="contact_form_phone" class="contact_form_phone input_field"
                                       placeholder="Seu número de telefone" name="telefone">
                            </div>
                            <div class="contact_form_text">
                                <textarea id="mensagem" class="text_field contact_form_message"
                                          name="mensagem" rows="4" placeholder="Mensagem" required="required"
                                          data-error="Por favor, escreva-nos uma mensagem."></textarea>
                            </div>
                            <div class="contact_form_button">
                                <button type="submit" class="button contact_submit_button">Enviar mensagem</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

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
                            <li><a href="#">Sobre</a></li>
                            <li><a href="#">Fale conosco</a></li>
                            <li><a href="#">Dúvidas frequentes</a></li>
                            <li><a href="#">Termos e condições</a></li>

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
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            Todos os direitos reservados | Esse site foi feito com <i class="fa fa-heart"
                                                                                      aria-hidden="true"></i> pela <a
                                href="#" target="_blank">Weiche Technologie</a>
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
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{asset('js/contact_custom.js')}}"></script>
</body>

</html>

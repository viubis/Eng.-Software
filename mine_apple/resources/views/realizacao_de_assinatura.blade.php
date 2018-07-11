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
    <link rel="stylesheet" type="text/css" href="{{asset('css/realizacao_de_assinatura_style.css')}}">
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


   <!-- <div class="top-content">
            <div class="container">
                <h1 class="h1 page-title" data-reactid="38">Frutas</h1>
                <div class="pb-0" id="line"></div>
                <div class="row">
                    <div class="contact_form_title"></div>


                </div>

                    <div class= "containerProduto">

                        <img src="images/banana.jpg" height="200" width="200" style="float:left">
                        <div class="form-group col-md-6">
                            <label for="nomeProduto">Nome produto</label>
                            <input type="text" class="form-control" id="nomeProduto"
                            placeholder="Nome produto">
                        </div>

                        <div class="form-group col-md-6">
                        <div class="form-group">
                                <label for="Descrição">Descrição</label>
                                <input type="text" class="form-control" id="descricaoProduto"
                                placeholder="Pequena descrição do produto">
                        </div>
                        </div>
                        <div class="form-row" >
                        <div class="form-group col-md-2">
                        <div class="form-group">
                                <label for="Preço">Preço</label>
                                <input type="text" class="form-control" id="precoProduto"
                                placeholder="R$ 10,00">
                        </div>
                        </div>
                        <div class="form-group col-md-2">
                                <div class="form-group">
                                        <label for="Pacote">Pacote</label>
                                        <input type="text" class="form-control" id="pacoteProduto"
                                        placeholder="duzia">
                                </div>
                                </div>
                        </div>
                    </div>
                <center>
                    <button type="submit" class="btn btn-primary">Mostrar mais</button>
                </center>
            </div>


        </div>

        </body>-->

   <div class="top-content">
       <div class="container">
           <div class="row">
               <div class="col-lg-12 ">
                   <!--<div class="contact_form_title">Detalhes da Assinatura</div>-->
                   <h1 class="h1 page-title" data-reactid="30">Definição de assinatura</h1>
                   <div class="pb-0" id="line"></div>
               </div>
           </div>
       </div>
   </div>


   <div class="containerInfosProdutos">
       <div class="container">
           <div class="row" id="backColor">
               <div class="col-sm-4">
                   <div class="subcontainerProduto1">
                       <div class="imagem">
                           <img src="{{asset('images/abacaxi.png')}}" height="200" width="200" style="float:left">
                       </div>
                   </div>
               </div>
               <div class="col-sm-8">
                   <div class="subcontainerProduto2 ">
                       <form>
                           <fieldset>
                               <div class="form-row">
                                   <div class="form-group col-md-6">
                                       <label for="nomeProd1"> Nome Produto </label>
                                       <input type="text" class="form-control" id="nomeProd1"
                                              placeholder="Nome do produto" disabled name="nomeProd1">
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="freqProd1">Frequencia de entrega </label>
                                          <select multiple class="form-control" size="2" id="freqProd1" name="freqProd1">
                                                <option disabled>Produto 1</option>
                                                <option disabled>Produto 2</option>
                                                <option disabled>Produto 3</option>
                                        </select>

                                   </div>
                                   <div class="form-group col-md-">
                                        <label for="qntProd1">Quantidade </label>
                                        <input type="number" step="0" min="1" max="999" name="qntProd1"
                                        placeholder="Valor..."
                                        class="form-first-name form-control" id="qntProd1">
                                    </div>
                               </div>
                               <div class="form-row" id="espac1">
                                   <div class="form-group col-md-6">
                                       <label for="valorProd1">Preço</label>
                                       <input type="number" min="0.1" max="999" name="valorProd1"
                                              class="form-control" id="valorProd1"
                                              placeholder=" R$ 10,00" disabled>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="tipoEmbalagemProd1">Pacote</label>
                                       <input type="text" name="tipoEmbalagemProd1" class="form-control"
                                              id="tipoEmbalagemProd1" placeholder="duzia" disabled>
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
                                                   value="segunda" name="segunda" disabled>
                                            <label class="form-check-label" type="lab1" for="segunda" style="margin-left:-22px;margin-right:+20px">
                                                Segunda-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="terca"
                                                   value="terca" name="terca" disabled>
                                            <label class="form-check-label" type="lab1" for="terca" style="margin-left:-22px;margin-right:+20px">
                                                Terça-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="quarta"
                                                   value="quarta" name="quarta" disabled>
                                            <label class="form-check-label" type="lab1" for="quarta" style="margin-left:-22px;margin-right:+20px">
                                                Quarta-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="quinta"
                                                   value="option4" name="quinta" disabled>
                                            <label class="form-check-label" type="lab1" for="quinta" style="margin-left:-22px;margin-right:+20px">
                                                Quinta-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="sexta"
                                                   value="option5" name="sexta" disabled>
                                            <label class="form-check-label" type="lab1" for="sexta" style="margin-left:-22px;margin-right:+20px">
                                                Sexta-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="sabado"
                                                   value="option6" name="sabado" disabled>
                                            <label class="form-check-label" type="lab1" for="sabado" style="margin-left:-22px;margin-right:+20px">
                                                Sábado
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           </fieldset>
                       </form>
                   </div>
               </div>
               <div class="pb-0" id="line"></div>
           </div>
       </div>


       <div class="containerInfosProdutos">
        <div class="container">
            <div class="row" id="backColor">
                <div class="col-sm-4">
                    <div class="subcontainerProduto1">
                        <div class="imagem">
                            <img src="{{asset('images/abacaxi.png')}}" height="200" width="200" style="float:left">
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="subcontainerProduto2 ">
                        <form>
                            <fieldset>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nomeprod2"> Nome Produto </label>
                                        <input type="text" class="form-control" id="nomeprod1"
                                               placeholder="Nome do produto" disabled name="nomeprod2">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="freqEntregaProd2">Frequencia de entrega </label>
                                           <select multiple class="form-control" size="2" id="freqEntregaProd2">
                                                 <option disabled>Produto 1</option>
                                                 <option disabled>Produto 2</option>
                                                 <option disabled>Produto 3</option>
                                         </select>

                                    </div>
                                    <div class="form-group col-md-">
                                         <label for="qntProd2">Quantidade </label>
                                         <input type="number" step="0" min="1" max="999" name="qntProd2"
                                         placeholder="Valor..."
                                         class="form-first-name form-control" id="qntProd2">
                                     </div>
                                </div>
                                <div class="form-row" id="espac1">
                                    <div class="form-group col-md-6">
                                        <label for="valorProd2">Preço</label>
                                        <input type="number" min="0.1" max="999" name="valorProd2"
                                               class="form-control" id="valorProd2"
                                               placeholder=" R$ 10,00" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tipoEmbalagemProd2">Pacote</label>
                                        <input type="text" name="tipoEmbalagemProd2" class="form-control"
                                               id="tipoEmbalagemProd2" placeholder="unidade" disabled>
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
                                                    value="segunda" name="segunda" disabled>
                                             <label class="form-check-label" type="lab1" for="segunda" style="margin-left:-22px;margin-right:+20px">
                                                 Segunda-feira
                                             </label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="checkbox" id="terca"
                                                    value="terca" name="terca" disabled>
                                             <label class="form-check-label" type="lab1" for="terca" style="margin-left:-22px;margin-right:+20px">
                                                 Terça-feira
                                             </label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="checkbox" id="quarta"
                                                    value="quarta" name="quarta" disabled>
                                             <label class="form-check-label" type="lab1" for="quarta" style="margin-left:-22px;margin-right:+20px">
                                                 Quarta-feira
                                             </label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="checkbox" id="quinta"
                                                    value="quinta" name="quinta" disabled>
                                             <label class="form-check-label" type="lab1" for="quinta" style="margin-left:-22px;margin-right:+20px">
                                                 Quinta-feira
                                             </label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="checkbox" id="sexta"
                                                    value="sexta" name="sexta" disabled>
                                             <label class="form-check-label" type="lab1" for="sexta" style="margin-left:-22px;margin-right:+20px">
                                                 Sexta-feira
                                             </label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="checkbox" id="sabado"
                                                    value="sabado" name="sabado" disabled>
                                             <label class="form-check-label" type="lab1" for="sabado" style="margin-left:-22px;margin-right:+20px">
                                                 Sábado
                                             </label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="checkbox" id="domingo"
                                                    value="domingo" name="domingo" disabled>
                                             <label class="form-check-label" type="lab1" for="domingo" style="margin-left:-22px;margin-right:+20px">
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
                <div class="pb-0" id="line"></div>
            </div>
        </div>
       </div>
   </div>

   <div class="containerInfosProdutos">
   <div class="form-row" id="espac2">



    <div class="card w-50" style="margin-left:+100px">
            <div class="card-body">
              <h4 class="card-title">Endereço de entrega:</h4>
              <div  class="pb-0" id="line"> </div>
              <div class="form-group col-md-12">
                <label for="listaEndereco">Meus endereços </label>
                   <select multiple class="form-control" size="2" id="listaEndereco">
                         <option >Rua A, Feira 6, 43, Feira de Santana, Bahia.</option>
                         <option >Rua B, Feira 6, 56, Feira de Santana, Bahia.</option>
                 </select>

            </div>

            <a href="http://www.seulink.com.br" title="Pequena Descrição">Adicionar endereço</a>
            </div>
            <div class="card-body">
                <h4 class="card-title">Cartões:</h4>
                <div  class="pb-0" id="line"> </div>
                <div class="form-group col-md-12">
                  <label for="listaCartao">Meus cartões </label>
                     <select multiple class="form-control" size="2" id="listaCartao">
                           <option >VISA terminado em 544.</option>
                           <option >Master terminado em 322.</option>
                     </select>

                </div>
              <div class="form-group col-md-5">
                <label for="codSeguranca">Código de segurança </label>
                <input type="text"
                placeholder="Valor..."
                class="form-first-name form-control" name="codSeguranca" id="codSeguranca">
            </div>
              <A href="http://www.seulink.com.br" title="Pequena Descrição">Adicionar cartão</A>
              </div>
          </div>



</div>


    <div class="col-md-12 mb-3">
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

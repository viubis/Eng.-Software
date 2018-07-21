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
               <div class="col-md-6 offset-md-3 col-xs-8 " style="margin-top:20px;margin-bottom: 20px;padding-bottom: 20px;background-color: rgba(252,252,252,0.8)">
                   <form role="form" method="post" action="{{url('/realizacao_assinatura')}}">
                   <!--<div class="contact_form_title">Detalhes da Assinatura</div>-->
                   <h3 class="h2 page-title text-center" data-reactid="30" style="margin-top:15px">Definição de assinatura</h3>
                   <div class="pb-1 col-md-8 offset-md-2 col-xs-6" id="line"></div>



        @foreach($itens as $item)
           <div class="row" id="backColor">
               <div class="col-md-3">
                   <div class="subcontainerProduto1">
                    @php $foto = $fotos->where('produto_id', '=', $item->id)->first();@endphp
                       <div class="imagem">
                           <img src="{{asset($foto->path)}}" height="200" width="200" style="float:left">
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="subcontainerProduto2 ">
                           <fieldset>
                            @csrf
                               <div class="form-row">
                                   <div class="form-group col-md-6">
                                       <label for="nomeProd1"> Nome do Produto </label>
                                       <input type="text" class="form-control" id="nomeProd1"
                                              placeholder="{{$item->name}}" disabled name="nomeProd1">
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="freqProd1">Frequencia de entrega </label>
                                          <select multiple class="form-control" size="2" id="freqProd" name="freqProd{{$item->id}}">
                                             @for($i = 1; $i < 5; $i++)
                                                <option value="{{$i}}">{{$i}} vez por semana</option>
                                            @endfor
                                        </select>

                                   </div>
                               </div>
                               <div class="form-row" id="espac1">
                                   <div class="form-group col-md-6">
                                       <label for="valorProd1">Preço</label>
                                       <input type="number" min="0.1" max="999" name="valorProd1"
                                              class="form-control" id="valorProd1"
                                              placeholder="{{$item->price}} " disabled>
                                   </div>
                                   @php $produto = $produtos->where('id', '=', $item->id)->first() @endphp
                                   @php $embalagem = $embalagens->where('id', '=', $produto->embalagem_id)->first() @endphp
                                   <div class="form-group col-md-6">
                                       <label for="tipoEmbalagemProd1">Pacote</label>
                                       <input type="text" name="tipoEmbalagemProd1" class="form-control"
                                              id="tipoEmbalagemProd1" placeholder="{{$embalagem->tipo}}" disabled>
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
                                            <input class="form-check-input" type="checkbox"
                                                   @php  $vetor = 'entrega'.$item->id @endphp
                                                   value="true" id="segunda" name="{{$vetor}}[seg]" >
                                            <label class="form-check-label" type="lab1" for="segunda" style="margin-left:-22px;margin-right:+20px">
                                                Segunda-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                   value="true" id="terca" name="{{$vetor}}[ter]" >
                                            <label class="form-check-label" for="terca" type="lab1" style="margin-left:-22px;margin-right:+20px">
                                                Terça-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                   value="true" id="quarta" name="{{$vetor}}[qua]" >
                                            <label class="form-check-label" for="quarta" type="lab1" style="margin-left:-22px;margin-right:+20px">
                                                Quarta-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                   value="true" id="quinta" name="{{$vetor}}[qui]" >
                                            <label class="form-check-label" for="quinta" type="lab1" style="margin-left:-22px;margin-right:+20px">
                                                Quinta-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                   value="true" id="sexta" name="{{$vetor}}[sex]" >
                                            <label class="form-check-label" for="sexta" type="lab1" style="margin-left:-22px;margin-right:+20px">
                                                Sexta-feira
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                   value="true" id="sabado" name="{{$vetor}}[sab]" >
                                            <label class="form-check-label" for="sabado" type="lab1" style="margin-left:-22px;margin-right:+20px">
                                                Sábado
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                   value="true" id="domingo" name="{{$vetor}}[dom]" >
                                            <label class="form-check-label" for="domingo" type="lab1" style="margin-left:-22px;margin-right:+20px">
                                                Domingo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           </fieldset>
                   </div>
               </div>
           </div>
               <div class="pb-0" id="line"></div>
   @endforeach


   <div class="form-row">
    @php $consumidor_enderecos_atuais =  $consumidor_enderecos->where('consumidor_id', '=', Auth::user()->id) @endphp

       <div class="card col-md-12 ">
        <div class="card-body">
            <h4 class="card-title">Endereço de entrega:</h4>
            <div class="pb-0" id="line"> </div>
            <div class="form-group col-md-12 col-xs-8">
                <label for="listaEndereco">Meus endereços </label>
                <select multiple class="form-control" size="2" id="listaEndereco" name="idEndereco">
                @foreach($consumidor_enderecos_atuais as $i)
                    @php $endereco = $enderecos->where('id', '=', $i->endereco_id)->first()@endphp

                    @php $cidade = $cidades->where('id','=', $endereco->cidade_id)->first() @endphp

                    @php $estado = $estados->where('id', '=', $cidade->estado_id)->first() @endphp
                      <option value="{{$endereco->id}}">{{$endereco->rua}}, {{$endereco->bairro}}, {{$endereco->numero}}, {{$cidade->nome}}, {{$estado->nome}}.</option>
                    @endforeach
                </select>
            </div>
            <a style="margin-left:10px" href="{{url('/consumidor/cadastrar_endereco')}}">Adicionar endereço</a>
        </div>
    </div>
    <div class="card col-md-12" style="margin-top: 40px;">
        <div class="card-body">
            <h4 class="card-title">Cartões:</h4>
            <div  class="pb-0" id="line"></div>
            <div class="form-group col-md-12">
                <label for="listaCartao">Meus cartões</label>
                <select multiple class="form-control" size="2" id="listaCartao">
                    @foreach($cartoes as $cartao)
                        <option >VISA terminado em {{substr($cartao->numero, -3)}}.</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-5">
                <label for="codSeguranca">Código de segurança </label>
                <input type="text" placeholder="Valor..."
                    class="form-first-name form-control" name="codSeguranca" id="codSeguranca">
            </div>
            <a style="margin-left:10px" href="{{url('/consumidor/adicionar_cartao')}}">Adicionar cartão</a>
        </div>
    </div>
  </div>
   <div class="pt-3 text-center">
       <button type="submit" class="btn btn-primary">Finalizar</button>
   </div>
</form>
</div>
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
<script src="{{asset('js/script_realizacao_de_assinatura.js')}}"></script>



</body>

</html>

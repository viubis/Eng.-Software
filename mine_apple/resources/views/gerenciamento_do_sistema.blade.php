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
    <link rel="stylesheet" type="text/css" href="{{asset('css/gerenciamento_usuario.css')}}">
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
                        <div class="contact_form_title">Gerenciamento do Sistema</div>

                        <div class="form-row">
                            <div >Relatórios Gerenciais</div>
                            <div  class="pb-0" id="line"> </div>
                        </div>
                        <div class="row" align="center">
                            <div class="form-group col-md-4 pl-xl-5 pr-0" align="right">
                                <label for="listaRelatorio" class="pl-xl-5">Tipo de Relatório: </label>
                            </div>
                            <div class="form-group col-md-3 pl-0">
                                <select multiple class="form-control" size="2" id="listaRelatorio" onchange="location = this.value;" >
                                    <option value="/relatorio/geral">Relatório Cadastros</option>
                                    <option>Relatório 2</option>
                                    <option>Relatório 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2 pl-0 pt-4">
                                <button type="button" class="btn btn-primary">Gerar Relatório</button>
                            </div>
                        </div>

                        <div class="form-row">
                            <div >Backup</div>
                            <div  class="pb-0" id="line"> </div>
                        </div>

                        <div class="row" align="center">
                            <div class="form-group col-md-4 pl-xl-5 pr-0" align="right">
                                <label for="frequencia" class="pl-xl-5">Frequência: </label>
                            </div>
                            <div class="form-group col-md-3 pl-0">
                                <select multiple class="form-control" size="2" id="frequencia" >
                                    <option>Uma vez por semana</option>
                                    <option>Uma vez por mês</option>
                                    <option>Uma vez por ano</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" align="center">
                            <div class="form-group col-md-4 pl-xl-5 pr-0" align="right">
                                <label for="horario" class="pl-xl-5">Horário: </label>
                            </div>
                            <div class="form-group col-md-3 pl-0">
                                <input type="text" id="horario">
                            </div>
                            <div class="form-group col-md-2 pl-0">
                                <button type="button" class="btn btn-primary">Definir</button>
                            </div>
                        </div>

                        <div class="form-row">
                            <div >Verificar logs</div>
                            <div  class="pb-0" id="line"> </div>
                        </div>
                        <div class="form-row text-center" align="center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">>Verificar LOGs</button>
                        </div>

                        
                    </div>

                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Logs</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                        
                        
                        <div class="row" align="center">
                            <!-- <div class="form-group col-md-4 pl-xl-5 pr-0" align="right"> -->
                                
                                <table class="table">
                                  <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                      <th scope="col">Autor</th>
                                      <th scope="col">Data</th>
                                      <th scope="col">Hora</th>
                                      <th scope="col">Operacao</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>@foreach($logs as $log)
                        @php $operacao = $operacoes->where('id', '=', $log->operacao_id)->first() @endphp
                        @php $usuario = $usuarios->where('id', '=', $log->usuario_id)->first() @endphp
                                  <th scope="row">{{$log->usuario_id}}</th>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$log->data}}</td>
                                  <td>{{$log->hora}}</td>
                                  <td>{{$operacao->nome}}</td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  <!-- </div> -->
              </div>
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
    </div>
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

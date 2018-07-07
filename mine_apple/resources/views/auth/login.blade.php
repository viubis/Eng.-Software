<html lang="pt-br">


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mineapple</title>

<!-- CSS -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href={{asset('css/bootstrap4/bootstrap.min.css')}}>
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
      type='text/css'>
<link rel="stylesheet" href={{asset('css/tela_de_login_style.css')}}>

<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/icon-144.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/icon-114.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/icon-72.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('images/icon-16.png')}}">


<head></head>

<body>
<!-- Top content -->
<div class="top-content">
    <div class="logo_icon"><img src="{{asset('images/logoSite.png')}}" alt=""></div>
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Já é nosso cliente?</h3>
                                <p>Acesse sua conta</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form name="login" method="POST" action="{{ route('login') }}" class="login-form">
                                @csrf
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Email</label>
                                    <input id="email" type="email" name="email" placeholder="Email..."
                                           class="form-email form-control">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input id="password" type="password" name="password" placeholder="Senha..."
                                           class="form-password form-control" minlength="8">
                                    <div style="text-align: right">
                                        <a href="{{ route('password.request') }}"
                                           style="color:#FFFFFF; font-size: 14px">Esqueci
                                            minha senha</a>
                                    </div>
                                </div>
                                <button type="submit" class="btn">Login</button>
                            </form>
                        </div>
                    </div>

                    <div class="social-login">
                        <h3>...ou entre com:</h3>
                        <div class="social-login-buttons">
                            <a class="btn btn-link-2" href="#">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                            <a class="btn btn-link-2" href="#">
                                <i class="fa fa-google-plus"></i> Google +
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-sm-1 middle-border"></div>
                <div class="col-sm-1"></div>

                <div class="col-sm-5">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Novo aqui?</h3>
                                <p>Cadastre-se</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-user-plus"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form name="register" method="POST" action="{{ route('register') }}"
                                  class="registration-form">
                                @csrf
                                <!-- <div class="form-group">
                                    <label class="sr-only" for="name-email">Nome</label>
                                    <input id="name1" type="text" name="name" placeholder="Nome... "
                                           class="form-email form-control">
                                </div> -->
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Email</label>
                                    <input id="email1" type="email" name="email" placeholder="Email... "
                                           class="form-email form-control">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input id="password1" type="password" name="password" placeholder="Senha..."
                                           class="form-password form-control" minlength="8" required>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input id="password1" type="password" name="password_confirmation"
                                           placeholder="Senha..."
                                           class="form-password form-control" minlength="8" required>
                                </div>

                                <button type="submit" class="btn">Cadastrar</button>

                            </form>
                        </div>
                        <div class="social-login">
                            <h3>...ou cadastre-se com:</h3>
                            <div class="social-login-buttons">
                                <a class="btn btn-link-2" href="#">
                                    <i class="fa fa-facebook"></i> Facebook
                                </a>
                                <a class="btn btn-link-2" href="#">
                                    <i class="fa fa-google-plus"></i> Google +
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-lg-3">

                <div
                    class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                    <div class="copyright_content">
                        Copyright &copy;<script>document.write(new Date().getFullYear().toString());</script>
                        Todos os direitos reservados | Esse site foi feito com <i class="fa fa-heart"
                                                                                  aria-hidden="true"></i> pela <a
                            href="#" target="_blank">Weiche Technologie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('css/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('js/script_tela_login.js')}}"></script>


</body>

</html>

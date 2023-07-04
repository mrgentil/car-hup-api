<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CarHub | Connexion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="assets/image/x-icon" href="{{asset('images/model-icon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/font/flaticon.css')}}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div id="preloader" class="preloader">
    <div class='inner'>
        <div class='line1'></div>
        <div class='line2'></div>
        <div class='line3'></div>
    </div>
</div>
<section class="fxt-template-animation fxt-template-layout12" data-bg-image="{{asset('assets/img/figure/bg12-l.jpg')}}">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-lg-8 col-sm-10 col-12 fxt-bg-color">
                <div class="fxt-content">
                    <div class="fxt-header">
                        <a href="{{url('/')}}" class="fxt-logo"><img src="{{asset('images/model-icon.png')}}" alt="Logo"></a>
                        <p>Connectez-vous à votre compte</p>
                    </div>
                    <div class="fxt-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div class="fxt-transformY-50 fxt-transition-delay-1">
                                    <label for="email"></label><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="fxt-transformY-50 fxt-transition-delay-2">
                                    <label for="password"></label><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="fxt-transformY-50 fxt-transition-delay-3">
                                    <div class="fxt-checkbox-area">
                                        <div class="checkbox">
                                            <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember">Maintenir ma connexion</label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <a class="switcher-text" href="{{ route('password.request') }}">
                                                {{ __('Mot de passe oublié?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="fxt-transformY-50 fxt-transition-delay-4">
                                    <button type="submit" class="fxt-btn-fill">Se connecter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- jquery-->
<script src="{{asset('assets/js/jquery-3.5.0.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Imagesloaded js -->
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- Validator js -->
<script src="{{asset('assets/js/validator.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>

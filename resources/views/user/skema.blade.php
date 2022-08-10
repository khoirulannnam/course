<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>{{ config('app.name') }}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="user/assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="user/assets/css/bootstrap.min.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="user/assets/css/animate.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="user/assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="user/assets/css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="user/assets/css/LineIcons.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="user/assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="user/assets/css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="user/assets/css/responsive.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ '/' }}">
                            {{ config('app.name') }}
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                @if (Route::has('login'))
                                    @auth

                                        <li class="nav-item"><a class="nav-link" href="/{{ 'riwayatkursus' }}">Riwayat Kursus</a></li>

                                    @endauth
                                @endif
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>

    <!--====== HEADER PART ENDS ======-->


    <div class="container mt-5">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active p-5">
                    <form action="" method="POST">
                        @csrf
                        <div class="card p-5">

                            <div class="row">

                                
                                <div class="col-md-6 text-center align-self-center"> <img class="img-fluid"
                                        src="/gambar/{{ $scheme->gambar}} " alt="Skema" width="150px" height="150px">
                                    <div class="row title">
                                    </div>
                                </div>
                                <div class="col-md-6 info">
                                    <div class="row title">
                                        <div class="col">
                                            <h2>{{ $scheme->nama }} - {{ $scheme->waktu }} Hari</h2>
                                        </div>
                                    </div>
                                    <p>{{ $scheme->detail }}</p>
                                </div>
                                

                            </div>
                            <div class="row justify-content-center mt-5">
                                @if (Auth::id())
                                <a href="/{{'daftarkursus'}}" class="btn btn-primary">Daftar</a>
                                @else
                                <a href="/{{'login'}}" class="btn btn-primary">Daftar</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--====== jquery js ======-->
    <script src="user/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="user/assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="user/assets/js/bootstrap.min.js"></script>


    <!--====== Slick js ======-->
    <script src="user/assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="user/assets/js/jquery.magnific-popup.min.js"></script>


    <!--====== nav js ======-->
    <script src="user/assets/js/jquery.nav.js"></script>

    <!--====== Nice Number js ======-->
    <script src="user/assets/js/jquery.nice-number.min.js"></script>

    <!--====== Main js ======-->
    <script src="user/assets/js/main.js"></script>


</body>

</html>

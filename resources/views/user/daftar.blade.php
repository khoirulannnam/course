<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>{{ config('app.name') }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light mt-5">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{ 'riwayatkursus' }}">Riwayat Kursus</a>
                                </li>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="p-4">
            @yield('content')
        </main>
    </div>
    <div class="container">

        @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Daftar Kursus</h4>
                <form action="/daftar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div>
                            <label for="firstName">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="{{ Auth::user()->name }}" value="" required>
                            <div class="invalid-feedback">
                                Nama tidak sesuai.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">NPM</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="npm" name="npm"
                                placeholder="14921184" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                NPM wajib diisi.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="2KA24"
                            required>
                        <div class="invalid-feedback">
                            Kelas wajib diisi.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">KRS</label>
                        <div>
                            <input type="file" style="color:black" name="krs" required="">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Skema Kursus</label>
                        <div>
                            @foreach ($schedule as $schedule)
                           
                            <input type="radio" id="skema" name="skema" value="{{$schedule->nama}} {{$schedule->jadwal}}">
                            <label for="{{$schedule->nama}} {{$schedule->jadwal}}">{{$schedule->nama}} {{$schedule->jadwal}}</label>
                            @endforeach
                        </div>
                        <div class="invalid-feedback">
                            Skema wajib diisi.
                        </div>
                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Proses</button>
                </form>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <script src="form-validation.js"></script>
</body>

</html>

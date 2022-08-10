 <!--====== HEADER PART START ======-->

 <header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{'/'}}">
                        {{ config('app.name') }}
                    </a> <!-- Logo -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="bar-icon"></span>
                        <span class="bar-icon"></span>
                        <span class="bar-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ml-auto">
                            @if (Route::has('login'))
                            @auth

                            <li class="nav-item"><a class="nav-link" href="/{{('riwayatkursus')}}">Riwayat Kursus</a></li>

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
                        </ul> <!-- navbar nav -->
                    </div>
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</header>

<!--====== HEADER PART ENDS ======-->

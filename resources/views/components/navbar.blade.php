<!-- topbar e nav -->
<header id="header">
    <div id="topbar">
        <div class="topbar-left">
            <ul class="st-list socials">
                <li>
                    <a href="#" target=""><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target=""><i class="fab fa-instagram"></i></i></a>
                    <a href="#" target=""><i class="fab fa-google-plus"></i></a>
                </li>
            </ul>
            <ul class="st-list topbar-items">
                <li class="d-none d-lg-block"><a href="" target="">info@xsail.com</a></li>
            </ul>
        </div>
        <div class="topbar-right">
            <ul class="st-list topbar-items">
                <li class="topbar-item link-item d-none d-lg-inline-block">
                    <a href="">(000) 999 - 656 -888</a>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="topbar-item login-item">
                            <a id="trigger-login" data-toggle="modal" data-target="#login">Accedi</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="topbar-item signup-item">
                            <a id="modal-register-form" data-toggle="modal" data-target="#register-form">Registrati</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('partners.create') }}">
                                Pannello di controllo
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    <nav id="navbar" class="navbar navbar-expand-md navbar-dark pl-4 px-5 py-3 w-100 position-fixed">
        <a id="navbarLogo" class="navbar-brand" href="{{ route('home') }}">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02"
            aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                @foreach ($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('public.announcements.category', [$category->name, $category->id]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach

            </ul>
            <ul class="navbar-nav ml-md-auto align-items-md-center">
                <li class="nav-item py-2 py-md-0">
                    <a href="#" class="btn btn-home">Registra la tua attività</a>
                </li>
                <li class="nav-item py-2 py-md-0">
                    <a href="#" class="text-decoration-none text-light">
                        <i class="fas fa-shopping-cart fa-2x"></i>
                    </a>
                </li>
                <li class="nav-item py-2 py-md-0">
                    <a id="t-search" href="#" class="text-decoration-none text-light" data-toggle="modal"
                        data-target="#modal-search">
                        <i class="fas fa-search fa-2x"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

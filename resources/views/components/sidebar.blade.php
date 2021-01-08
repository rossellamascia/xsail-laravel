<div class="col-md-2 bg-sidebar vh-100">
    <div class="logo border-bottom p-3">
    <a id="navbarLogo" class="navbar-brand" href="{{route('home')}}">LOGO</a>
    </div>
    <div class="foto-utente d-flex p-3 border-bottom">
        <div class="left">
            <img class="img-fluid rounded-pill" src="media/persona.jpg" width="60px" alt="">
        </div>
        <div class="pl-3 pt-2">
            <span class="font-weight-bold text-white">{{Auth::user()->name}}</span>
            <span class="p-0 m-0 d-block text-white">Membro dal {{Auth::user()->created_at->format('Y')}}</span>
        </div>
    </div>
    <div class="sidebar-menu text-white py-3 border-bottom">
        <div class="pl-2">
            <p>
                <i class="fas fa-user-cog  pb-3 pr-3"></i>
                <a class="text-white" href="#">Impostazioni Account</a>
            </p>
            <p>
                <i class="fas fa-plus pr-2 pb-3"></i>
                <a class="text-white" href="{{ route('partners.create') }}">Aggiungi Nuovo Annuncio</a>
            </p>
            <p>
                <i class="fal fa-edit pb-3 pr-3"></i>
                {{-- <a class="text-white" href="{{route('partners.edit')}}">Modifica Annuncio</a> --}}
            </p>
            <p>
                @if (Auth::user()->is_revisor)
                            <i class="fas fa-cogs pb-3"></i>
                            <a class="text-white" href="{{ route('revisor.home') }}">
                                Revisione Annuncio
                                <span
                                    class="badge badge-pill badge-warning">{{ \App\Models\Announcement::ToBeRevisionedCount() }}</span>
                            </a>
                @endif
                
            </p>

        </div>
    </div>
    <div class="exit mt-4 pl-2">
        <i class="fal fa-sign-out fa-2x text-white pr-2"></i>
        <a class="text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Esci</a>


        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>

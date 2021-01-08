<x-layout>
    @if ($announcement)


        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card border-0 wrapper w-100 h-100 bg-trasperent">
                        <img src="https://picsum.photos/100" class="card-img-top rounded-lg" alt="...">
                        <div class="card-body wrapper">
                            <h4 class="font-weight-light">{{ $announcement->id }}</h4>
                            <h4 class="font-weight-bolder">{{ $announcement->title }}</h4>
                            <p>Id Utente : {{ $announcement->user->id }}</p>
                            <p>Nome Utente : {{ $announcement->user->name }}</p>
                            <p>Email Utente : {{ $announcement->user->email }}</p>
                            <i class="fal fa-map-marker-alt"></i><span class="posizione">location</span>
                            <div class="pt-3 recensione">
                                <span>3.7/5 </span><span><i class="fal fa-dot-circle"></i></span><span> 3
                                    Recensioni</span>
                            </div>
                            <div class="pt-2">
                                <i class="fas fa-bolt text-accent"></i><span class="lead">{{ $announcement->price }} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('revisor.reject', $announcement->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Rigetta</button>
                    </form>
                </div>
                <div class="col-md-6 text-right">
                    <form action="{{ route('revisor.accept', $announcement->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Accetta</button>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="containe my-5 py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-4">
                    <h3>Non ci sono annunci da revisionare</h3>
                </div>
            </div>
        </div>
    @endif
</x-layout>

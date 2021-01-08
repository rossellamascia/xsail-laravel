<x-layout>
    <x-slot name="title">Home</x-slot>
    @if (session('message'))
        <div class="container my-5 ">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- above the fold -->
    <div class="img-top-home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-white">
                    <h1 class="font-weight-light display-4">#Bookyouracitivities</h1>
                    <x-header />
                </div>
            </div>
        </div>
    </div>
    <!-- card iniziali -->
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-12 col-md-12 mt-4">
                <div class="wrapper rounded">
                    <div class="card bg-dark text-white bg-card-offerte border-0 shadow">
                        <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                            <div class="btn-top rounded ml-5 mt-5">Offerte Speciali</div>
                            <h4 class="title-off h2 ml-5 mt-5">Offerte speciali</h4>
                            <p class="des-off ml-5 mt-5">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. <br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#" class="btn btn-off text-white ml-5">Scopri di più</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ultimi 6 annunci --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-12 my-5">
                <h3 class="text-center text-uppercase">Gli ultimi annunci inseriti</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($announcements as $announcement)
                <div class="col-12 col-md-4 my-3">
                    <div class="card border-0 wrapper w-100 h-100 bg-trasperent">
                        <div class="wish-list">
                            <i class="fas fa-heart fa-2x"></i>
                        </div>
                        <div class="featured">
                            <div class="btn-featured rounded-right">In primo piano</div>
                        </div>

                        <img src="https://picsum.photos/100" class="card-img-top rounded-lg" alt="...">

                        <div class="card-body wrapper">
                            <a href="{{ route('announcements.show', compact('announcement')) }}">
                                <h4 class="font-weight-bolder text-main">{{ $announcement->title }}</h4>
                            </a>
                            <p class="mt-2"><i class="fal fa-map-marker-alt"></i><span class="posizione"></span></p>
                            <p class="mt-4">
                                <a
                                    href="{{ route('public.announcements.category', [$announcement->category->name, $announcement->category->id]) }}"><span
                                        class="bg-main rounded-right text-white px-2 py-2">{{ $announcement->category->name }}</span></a>
                            </p>
                            <div class="pt-3 recensione">
                                <span>3.7/5 </span><span><i class="fal fa-dot-circle"></i></span><span> 3
                                    Recensioni</span>
                                <p class="card-text">{{ $announcement->created_at->format('d/m/Y') }} -
                                    {{ $announcement->user->name }}
                                </p>

                            </div>
                            <div class="pt-2"></i>
                                <p class="h3">€{{ $announcement->price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>

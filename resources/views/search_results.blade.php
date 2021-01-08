<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Risultati di ricerca per : {{ $q }}</h1>
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

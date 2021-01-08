<x-layout>

    <x-slot name="title">Stabilimenti</x-slot>
    <!-- above the fold -->
    <div class="img-top-categorie">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-white">
                    <h1 class="font-weight-light display-5 text-uppercase">{{ $category->name }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3 border rounded">

                <div class="stickyFilter">
                    <div class="pt-4">
                        <div class="line-left">
                            <h4>Cerca Stabilimenti</h4>
                        </div>
                    </div>

                    <form>
                        <div class="input-group my-4">
                            <span class="input-group-prepend input-group-text bg-transparent border-0"
                                id="inputGroup-sizing-default">
                                <i class="fal fa-map-marker-alt fa-1x"></i>
                            </span>
                            <input type="text" class="form-control border-0" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" placeholder="cerca la città">

                        </div>
                        <p class="h6">Filtro prodotto</p>
                        <div class="form-group">
                            <input type="range" class="form-control-range" id="formControlRange">
                        </div>
                        <p class="h6">Caratteristiche</p>
                        {{-- @foreach ($features as $feature)
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="{{ $feature['name'] }}">
                                <label class="custom-control-label"
                                    for="{{ $feature['name'] }}">{{ $feature['name'] }}</label>
                            </div>
                        @endforeach --}}

                    </form>
                </div>

            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-12">
                        <h3> {{ count($announcements) }} categoria trovati </h3>
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
                                    <p class="mt-2"><i class="fal fa-map-marker-alt"></i><span class="posizione"></span>
                                    </p>
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
        </div>
    </div>
    </div>

</x-layout>

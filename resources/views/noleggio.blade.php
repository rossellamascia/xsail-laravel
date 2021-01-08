<x-layout>
    <!-- above the fold -->
    <div class="img-top-categorie">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-white">
                    <h1 class="font-weight-light display-5 text-uppercase">{{Route::currentRouteName()}}</h1>
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
                            <h4>Cerca {{Route::currentRouteName()}}</h4>
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
                        @foreach ($features as $feature)
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="{{$feature['name']}}">
                            <label class="custom-control-label" for="{{$feature['name']}}">{{$feature['name']}}</label>
                            </div>
                        @endforeach

                    </form>
                </div>

            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-12">
                        <h3>{{count($excursions)}} categoria trovati </h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($excursions as $excursion)
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <x-card name="{{ $excursion['name'] }}" location="{{ $excursion['location'] }}"
                                description="{{ $excursion['description'] }}" img="{{ $excursion['img'] }}" price="{{ $excursion['price'] }}" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
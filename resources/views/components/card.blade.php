<div class="card border-0 wrapper w-100 h-100 bg-trasperent">
    <div class="wish-list">
        <i class="fas fa-heart fa-2x"></i>
    </div>
    <div class="featured">
        <div class="btn-featured rounded-right">In primo piano</div>
    </div>
    <a href="{{ route('establishments.show', ['establishment' => $id]) }}" class="text-decoration-none text-main">
        <img src="https://picsum.photos/100" class="card-img-top rounded-lg" alt="...">
        <div class="card-body wrapper">
            <h4 class="font-weight-bolder">{{ $name }}</h4>
    </a>

    <i class="fal fa-map-marker-alt"></i><span class="posizione">
        {{ $location }}</span>
    <div class="pt-3 recensione">
        <span>3.7/5 </span><span><i class="fal fa-dot-circle"></i></span><span> 3 Recensioni</span>
    </div>
    <div class="pt-2">
        <i class="fas fa-bolt text-accent"></i><span class="lead"> {{ $price }}</span>
    </div>
</div>
</div>
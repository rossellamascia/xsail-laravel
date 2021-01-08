    <!--footer-->
    <footer class="bg-main">
        <div class="container-fluid">
            <div class="row p-5">
                <div class="col-12 col-md-4 mb-4">
                    <h4 class="text-white">Hai bisogno di aiuto?</h4>
                    <div class="line-top"></div>
                    <div class="mt-3 line-left">
                        <p class="mb-1 text-secondary">Chiamaci</p>
                        <a class="h2 text-white" href="tel:+390884708345">0884 708345</a>
                    </div>

                    <div class="mt-3 line-left">
                        <p class="mb-1 text-secondary">Scrivici</p>
                        <a class="h2 text-white" href="mailto:info@presto.it">info@presto.it</a>
                    </div>
                    <div class="mt-3 line-left">
                        <p class="mb-2 text-secondary">Seguici</p>
                        <a href="http://"><span class="pr-4"><i
                                    class="fab fa-facebook-f text-white fa-2x"></i></span></a>
                        <a href="http://"><span class="pr-4"><i
                                    class="fab fa-instagram text-white fa-2x"></i></span></a>
                        <a href="http://"><span class="pr-4"><i class="fab fa-twitter text-white fa-2x"></i></span></a>
                    </div>

                </div>
                <div class="col-12 col-md-4 mb-4">
                    <h4 class="text-white">Categorie</h4>
                    <div class="line-top"></div>
                    @foreach ($categories as $category)
                        <p class="mt-3 h6">
                            <a class="text-white text-capitalize"
                                href="{{ route('public.announcements.category', [$category->name, $category->id]) }}">{{ $category->name }}</a>
                        </p>
                    @endforeach


                </div>
                <div class="col-12 col-md-4 mb-4">
                    <h4 class="text-white">Titolo</h4>
                    <div class="line-top"></div>

                </div>
            </div>
            <hr class="bg-white">
            <div class="row">
                <div class="col-12">
                    <p class="text-white pl-5">Copyright Rossella Mascia</p>
                </div>
            </div>
        </div>
    </footer>

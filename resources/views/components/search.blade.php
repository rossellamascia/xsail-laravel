<!-- ricerca -->
<div class="modal fade" id="modal-search" tabindex="-1" aria-labelledby="modal-search" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="container modal-content bg-transparent border-0">
            <div class="row pt-3">
                <div class="col-12">
                    <form action="{{ route('search') }}" method="GET">
                        <div class="input-group mb-3 border-bottom-orange">
                            <span class="input-group-prepend input-group-text bg-transparent border-0 text-main"
                                id="inputGroup-sizing-default">
                                <i class="fa fa-search"></i>
                            </span>
                            <input id="f-search" type="text" name="q" class="form-control border-0 bg-transparent "
                                aria-label="Default" aria-describedby="inputGroup-sizing-default"
                                placeholder="Cerca...">
                            <span class="input-group-prepend input-group-text bg-transparent border-0 text-main"
                                id="inputGroup-sizing-default">
                                <button type="submit" class="btn" ><i class="fa fa-chevron-right"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

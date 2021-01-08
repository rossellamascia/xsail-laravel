<!-- Inizio Escursioni -->
<div class="row bg-white rounded">
    <div class="col-12 col-md-3 py-2 border-right">
        <label for="exampleInputEmail1" class="text-main">Destinazioni</label>
        <div class="input-group">
            <span class="input-group-prepend input-group-text bg-transparent border-0 pl-0"
                id="inputGroup-sizing-default"><i class="fal fa-map-marker-alt"></i></span>
            <input id="f-email" type="text" class="form-control border-0 p-0" aria-label="Default"
                aria-describedby="inputGroup-sizing-default" placeholder="Dove vuoi andare">
        </div>
    </div>
    <div class="col-12 col-md-3 py-2 border-right">
        <!-- inserire calendario check in - out -->
        <div>
            <label for="exampleInputEmail1" class="text-main">Check in - out</label>
            <div class="input-group">
                <span class="input-group-prepend input-group-text bg-transparent border-0 pl-0"
                    id="inputGroup-sizing-default"><i class="fal fa-calendar-plus"></i></span>
                <input type="datetime" class="form-control border-0 p-0" name="daterange" />
            </div>
        </div>
    </div>
    <div class="col-12 col-md-3 py-2 ">
        <label class="text-main" for="exampleFormControlSelect1">Persone</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle bg-transparent border-0 text-main" type="button"
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">

                </a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-3 px-0">
        <button type="submit" class="btn btn-primary h-100 w-100 rounded-0 text-uppercase">cerca</button>
    </div>
</div>

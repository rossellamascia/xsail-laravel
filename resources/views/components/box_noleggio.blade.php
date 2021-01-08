<!-- Inizio Noleggio -->
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
        <!-- inserire calendario check in - out  e orario-->
        <div>
            <label for="exampleInputEmail1" class="text-main">Check in - out</label>
            <div class="input-group">
                <span class="input-group-prepend input-group-text bg-transparent border-0 pl-0"
                    id="inputGroup-sizing-default"><i class="fal fa-calendar-plus"></i></span>
                <input type="text" class="form-control border-0 p-0" name="datetimes" />
            </div>
        </div>
    </div>
    <div class="col-12 col-md-3 py-2 ">
        <label for="exampleInputEmail1" class="text-main">Giornata</label>
        <div class="input-group">
            <span class="input-group-prepend input-group-text bg-transparent border-0 pl-0"
                id="inputGroup-sizing-default"><i class="fal fa-calendar-plus"></i></span>
            <select class="custom-select border-0 p-0" id="inputGroupSelect01">
                <option selected>Seleziona</option>
                <option value="1">Giornata Intera</option>
                <option value="2">Mattina</option>
                <option value="3">Pomeriggio</option>
            </select>
        </div>
    </div>

    <div class="col-12 col-md-3 px-0">
        <button type="submit" class="btn btn-primary h-100 w-100 rounded-0 text-uppercase">cerca</button>
    </div>
</div>

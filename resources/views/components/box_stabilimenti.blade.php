<div class="row bg-white rounded shadow">
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
            <label for="" class="text-main">Check in - out</label>
            <div class="input-group">
                <span class="input-group-prepend input-group-text bg-transparent border-0 pl-0"
                    id="inputGroup-sizing-default"><i class="fal fa-calendar-plus"></i></span>
                <input type="datetime" class="form-control border-0 p-0" name="daterange" />
            </div>
        </div>
    </div>
    <div class="col-12 col-md-2 py-2 border-right">
        <label class="text-main" for="exampleFormControlSelect1">Persone</label>
        <div class="input-group">
            <span class="input-group-prepend input-group-text bg-transparent border-0 pl-0"
                id="inputGroup-sizing-default"><i class="fal fa-user-friends"></i></span>
            <div class="dropdown">
                <button class="btn dropdown-toggle bg-transparent border-0 text-main pl-0" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Seleziona
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2" id="stopClose">
                    <label class="text-mainc ml-2 mt-2">Adulti</label>
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default">
                                <i class="fal fa-minus"></i></button>
                        </div>
                        <input type="text" id="myNumber" class="form-control input-number" value="0" />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default"><i class="fal fa-plus"></i></button>
                        </div>
                    </div>
                    <label class="text-mainc ml-2 mt-2">Bambini</label>
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button id="upChildren" class="btn btn-default">
                                <i class="fal fa-minus"></i></button>
                        </div>
                        <input type="text" id="numChildren" class="form-control input-number" value="0" />
                        <div class="input-group-btn">
                            <button id="downChildren" class="btn btn-default"><i class="fal fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-2 py-2">
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
    <div class="col-12 col-md-2 px-0">
        <button type="submit" class="btn btn-primary h-100 w-100 rounded-right text-uppercase">cerca</button>
    </div>
</div>

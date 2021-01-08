<div class="container-fluid">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item px-0">
            <a class="nav-link bg-main active text-white text-uppercase" id="pills-home-tab"
                data-toggle="pill" href="#stabilimenti" role="tab" aria-controls="pills-home"
                aria-selected="true">Stabilimenti</a>
        </li>
        <li class="nav-item px-0">
            <a class="nav-link bg-main text-white text-uppercase" id="pills-profile-tab" data-toggle="pill"
                href="#escursioni" role="tab" aria-controls="pills-profile" aria-selected="false">Escursioni</a>
        </li>
        <li class="nav-item px-0">
            <a class="nav-link bg-main text-white text-uppercase" id="pills-contact-tab" data-toggle="pill" href="#noleggio" role="tab"
                aria-controls="pills-contact" aria-selected="false">noleggio</a>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <!-- Stabilimenti -->
        <div class="tab-pane fade show active" id="stabilimenti" role="tabpanel" aria-labelledby="pills-home-tab">
            <x-box_stabilimenti />
        </div>
        {{-- escursioni --}}
        <div class="tab-pane fade" id="escursioni" role="tabpanel" aria-labelledby="pills-profile-tab">
            <x-box_escursioni />
        </div>
        {{-- noleggio --}}
        <div class="tab-pane fade" id="noleggio" role="tabpanel" aria-labelledby="pills-contact-tab">
            <x-box_noleggio />
        </div>
    </div>
</div>
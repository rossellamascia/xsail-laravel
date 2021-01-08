<!-- registrati -->
<div class="modal fade" id="register-form" tabindex="-1" role="dialog" aria-labelledby="register-form"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="container modal-content p-4 rounded">
            <div class="modal-header px-0 py-0 border-0">
                <h4 class="modal-title text-main" id="exampleModalLabel">Registrati</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row pt-3">
                <div class="col-12">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="input-group mb-3 border rounded">
                            <input type="text" id="name"
                                class="form-control border-0 @error('name') is-invalid @enderror" aria-label="Default"
                                name="name" value="{{ old('name') }}" aria-describedby="inputGroup-sizing-default"
                                placeholder="Username*">
                            <span class="input-group-prepend input-group-text bg-transparent border-0"
                                id="inputGroup-sizing-default"><i class="fal fa-user"></i></span>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3 border rounded">
                            <input type="text" class="form-control border-0" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" placeholder="Nome e Cognome *">
                            <span class="input-group-prepend input-group-text bg-transparent border-0"
                                id="inputGroup-sizing-default"><i class="fal fa-user"></i></span>
                        </div>
                        <div class="input-group mb-3 border rounded">
                            <input type="email" class="form-control border-0 @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required placeholder="Email *">
                            <span class="input-group-prepend input-group-text bg-transparent border-0"
                                id="inputGroup-sizing-default"><i class="fal fa-envelope"></i></span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3 border rounded">
                            <input type="password" class="form-control border-0 @error('password') is-invalid @enderror"
                                id="password" name="password" required placeholder="Password *">
                            <span class="input-group-prepend input-group-text bg-transparent border-0"
                                id="inputGroup-sizing-default"><i class="fal fa-lock"></i></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3 border rounded">
                            <input type="password" class="form-control border-0 @error('password') is-invalid @enderror"
                                id="password-confirm" name="password_confirmation" required
                                placeholder="Conferma password *">
                            <span class="input-group-prepend input-group-text bg-transparent border-0"
                                id="inputGroup-sizing-default"><i class="fal fa-lock"></i></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Registrati</button>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-3 text-center">
                <div class="col-12">
                    <p>oppure continua con</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 col-md-4">
                    <a class="btn btn-social-f"><i class="fab fa-facebook-f"></i> Facebook</a>
                </div>
                <div class="col-12 col-md-4">
                    <a class="btn btn-social-g"><i class="fab fa-google-plus-g"></i> Google+</a>
                </div>
                <div class="col-12 col-md-4">
                    <a class="btn btn-social-t"><i class="fab fa-twitter"></i> Twitter</a>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12 text-center">
                    Hai già un account? <a href="#" id="login">Accedi</a>
                </div>
            </div>
        </div>
    </div>
</div>

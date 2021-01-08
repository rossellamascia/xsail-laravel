<!-- login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true"
    data-dismiss="modal" data-toggle="modal">
    <div class="modal-dialog" role="document">
        <div class="container modal-content p-4 rounded">
            <div class="modal-header px-0 py-0 border-0">
                <h4 class="modal-title text-main" id="exampleModalLabel">Accedi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row pt-3">
                <div class="col-12">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3 border rounded">
                            <input id="f-email" type="email"
                                class="form-control border-0  @error('email') is-invalid @enderror" aria-label="Default"
                                name="email" value="{{ old('email') }}" placeholder="Email *" required>
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
                                aria-label="Default" aria-describedby="inputGroup-sizing-default"
                                placeholder="Password *" name="password" required>
                            <span class="input-group-prepend input-group-text bg-transparent border-0"
                                id="inputGroup-sizing-default"><i class="fal fa-lock"></i></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Accedi</button>
                        <div class="pt-3">
                            <div class="form-check mb-3 d-inline-block">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="float-right" href="{{ route('password.request') }}">Hai dimanticato la
                                    Password?</a>
                            @endif
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
                    Non hai un account? <a href="#" id="register">Registrati</a>
                </div>
            </div>
        </div>
    </div>
</div>


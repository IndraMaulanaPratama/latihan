<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form wire:submit.prevent="loginUser">

                        {{-- Input Email --}}
                        <div class="mb-3">
                            <label for="email">Alamat Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                wire:model.defer='email' id="email" placeholder="alamat@domain.com">

                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- Input Password --}}
                        <div class="mb-3">
                            <label for="password">Kata Sandi</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                wire:model.defer='password' id="password" placeholder="*********">
                            @error('password')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        {{-- Remember Me --}}
                        <div class="mb-3">
                            <input class="form-check-input" type="checkbox" wire:model.defer='remember'>
                            <label for="remember" class='form-check-label'>Ingat Saya</label>
                        </div>

                        {{-- Button Submit Login --}}
                        <div class="mb-3">
                            <button class="btn btn-primary">Masuk</button>
                        </div>

                        {{-- Link to register form --}}
                        <div class="mb-3">
                            <a href="{{ url('/password/reset') }}">Lupa Password?</a> <br/>
                            <a href="{{ route('register') }}">Belum memiliki akun?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

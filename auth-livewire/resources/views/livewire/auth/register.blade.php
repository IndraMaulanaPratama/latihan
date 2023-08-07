<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form wire:submit.prevent="registerUser">

                        {{-- Input Name --}}
                        <div class="mb-3">
                            <label for="name">Nama Lengkap</label>
                            <input type="name" class="form-control @error('name') is-invalid @enderror"
                                wire:model.defer='name' id="name" placeholder="Koesno Sosrodihardjo">

                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>

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

                        {{-- Input Password Confirmed --}}
                        <div class="mb-3">
                            <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" wire:model.defer='password_confirmation'
                                id="password_confirmation">
                        </div>

                        {{-- Button Submit Login --}}
                        <div class="mb-3">
                            <button class="btn btn-primary">Daftar</button>
                        </div>

                        {{-- Link to register form --}}
                        <div class="mb-3">
                            <a href="{{ route('login') }}">Sudah memiliki akun?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

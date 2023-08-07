<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;
    public $message;

    // Function form validation request
    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }

    public function loginUser()
    {
        // Memanggil function rules
        $this->validate();

        /**
         * Variable yang digunakan untuk menampung percobaan jumlah hit
         * 1. data yang disimpan adalah email dan ip dari pengirim response
         * 2. variable ini dipakai untuk limiter hit login
         * 3. diharapkan untuk meminimalisir percobaan dalam meretas akun
         * 4. limiter akan berfungsi ketika 5x hit (ada di line 42)
         * 5. Ketika limiter berfungsi, user harus menunggu selama 1 menit sebelum login kembali
         */
        $throttleKey = strtolower($this->email) . '|' . request()->ip();

        // Logic fungsi limiter
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) :
            $this->addError('email', __('auth.throttle', ['seconds' => RateLimiter::availableIn($throttleKey)]));
            return null;
        endif;

        // Logic Login app
        if(!Auth::attempt($this->only(['email', 'password']), $this->remember)) :
            RateLimiter::hit($throttleKey);
            $this->addError('email', __('auth.failed'));
            return null;
        else :
            return redirect(RouteServiceProvider::HOME, 200);
        endif;
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app')->section('content');
    }
}

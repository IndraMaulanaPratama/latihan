<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $message;

    // Function Validation Form Request
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ];
    }

    public function registerUser()
    {
        // Memanggil function validation
        $this->validate();

        // Logic Create User Baru
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        // Membuat Session Login menggunakan sanctum
        Auth::login($user, true);

        // Memanggil function verification email
        // event(new Registered($user));
        return redirect('email/verify', 200);

        // return redirect(RouteServiceProvider::HOME, 200);
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app')->section('content');
    }
}

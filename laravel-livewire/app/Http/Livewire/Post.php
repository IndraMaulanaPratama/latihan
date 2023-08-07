<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public function render()
    {
        return view('livewire.post')
        ->extends('layouts.app')
        ->section('component.public.navbar')
        ->section('content');
    }
}

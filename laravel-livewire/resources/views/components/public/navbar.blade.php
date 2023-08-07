@extends('layouts.app')

@push('livewireStyle')
    @livewireStyles
@endpush

@section('navbar')
    <p>hai</p>
    @livewire('component.public.navbar')
@endsection

@push('livewireScript')
    @livewireScripts
@endpush

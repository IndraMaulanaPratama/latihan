<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App - Laravel</title>

    @vite(['resources/css/app.css', 'resources/css/app.css'])
    {{-- @stack('livewireStyle') --}}
    {{-- @livewireStyles --}}
</head>

<body>
    @livewire('component.public.navbar')
    {{-- @livewire('component.public.navbar') --}}
    <div class="divider"></div>

    <div class="container">
        @yield('content')
    </div>

    {{-- @stack('livewireScript') --}}
    {{-- @livewireScripts --}}
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arredare casa con stile</title>
    
    @livewireStyles
    @vite(['resources/css/app.css'])
    {{-- fontwesome --}}
    <script src="https://kit.fontawesome.com/893551a8c5.js" crossorigin="anonymous"></script>
</head>

<body>

    <x-navbar />

    @if (session('access'))
        <div class="alert alert-danger"><i class="fa-solid fa-triangle-exclamation fa-lg"></i> {{ session('access') }}</div>
    @endif
    @if (session('message'))
        <div class="alert alert-success"><i class="fa-solid fa-circle-check fa-lg"></i> {{ session('message') }}</div>
    @endif

    {{ $slot }}

    <x-footer />


    @livewireScripts
    @vite(['resources/js/app.js'])
</body>

</html>

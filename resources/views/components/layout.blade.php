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

<body class="animationFadeWhite">

    <x-navbar />

    {{ $slot }}

    <x-footer />


    @livewireScripts
    @vite(['resources/js/app.js'])
    
</body>

</html>

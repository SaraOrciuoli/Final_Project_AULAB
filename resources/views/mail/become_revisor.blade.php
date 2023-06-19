<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>


    @vite(['resources/css/app.css'])

</head>

<body>

    
    <h1 class="text-acc">Un utente ha richiesto di lavorare con noi</h1>
    <h2>Ecco i suoi dati:</h2>
    <p><span class="text-acc">Nome:</span> {{ $user->name }}</p>
    <p><span class="text-acc">Email:</span> {{ $user->email }}</p>
    <div class="d-flex">
        <p>Clicca qui per renderlo revisore </p>
        <a class=" text-acc ms-2" href="{{ route('make_revisor', compact('user')) }}">Rendi revisore!</a>
    </div>



</body>

</html>
















{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>
    <div>
        
    </div>
</body>
</html> --}}

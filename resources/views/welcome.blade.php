<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="dropdown m-5">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                ¡Probar Bootstrap!
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-menu-item p-2 d-block text-dark text-decoration-none" href="#">Acción 1</a></li>
                <li><a class="dropdown-menu-item p-2 d-block text-dark text-decoration-none" href="#">Acción 2</a></li>
            </ul>
        </div>
    </body>
</html>

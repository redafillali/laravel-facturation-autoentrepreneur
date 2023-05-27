<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Admin Panel</title>
        @vite('resources/css/app.css', 'resources/js/app.js')
        @livewireStyles
    </head>

    <body>
        <div class="container">
            @yield('content')
        </div>
        @livewireScripts
    </body>

</html>

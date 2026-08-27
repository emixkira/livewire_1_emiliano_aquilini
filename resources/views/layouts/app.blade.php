<!DOCTYPE html>

<html lang="it">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'ScreenRate')
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @livewireStyles

</head>

<body>

<x-navbar />


@if (session('success'))

    <div class="container mt-4">

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    </div>

@endif


<main>

    @yield('content')

</main>


<footer class="screen-footer">

    <div class="container text-center">

        <p class="footer-brand mb-1">
            SCREEN<span>RATE</span>
        </p>

        <p class="mb-0">
            Film, serie TV e recensioni.
        </p>

    </div>

</footer>


@livewireScripts

</body>

</html>
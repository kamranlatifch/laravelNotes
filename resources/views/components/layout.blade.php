<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- <link rel="stylesheet" href="/app.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->


</head>

<body class="antialiased ">
    @session('message')
        <div class="success-session">
            {{ session('message') }}
        </div>
    @endsession
    {{ $slot }}
</body>

</html>

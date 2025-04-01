<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel Page')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/game.css') }}">
    <link rel="stylesheet" href="{{ asset('css/account.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    @if (!isset($withoutNavbar)) <!-- Check if $withoutNavbar is not set -->
        @include('partials.navbar') <!-- Include navbar -->
    @endif

    <main>
        @yield('content')
    </main>

    <script>
        function toggleMenu() {
            document.querySelector(".nav-links").classList.toggle("show");
        }

        function register() {
            window.location.href = "Register.html";
        }

        function login() {
            window.location.href = "Login.html";
        }
    </script>

</body>
</html>

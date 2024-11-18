<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Capstone') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link rel="stylesheet" href="{{ asset('build/bootstrap/bootstrap.v5.3.2.min.css') }}">
    <style>
        .jumbotron {
            background-image: url('/images/bg1.jpg.jpg');
            background-size: cover;
            /* Ensures the image covers the entire jumbotron */
            background-position: center;
            /* Centers the image */
            height: 87vh;
            /* Sets a fixed height for the jumbotron */
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            display: flex;
            /* Allows for vertical centering of text */
            justify-content: center;
            /* Centers content horizontally */
            align-items: center;
            /* Centers content vertically */
        }

        .navbar {
            background-color: #3cb371;
        }

        .navbar-brand {
            color: #ffff;
        }

        .nav-link {
            color: #fff;
        }

        .card {
            margin-bottom: 20px;
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-weight: bold;
        }

        .footer {
            background-color: #3cb371;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('layouts.Users.navigation')

    <!-- Main content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('layouts.Users.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

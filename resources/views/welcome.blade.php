<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Offres de stages</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        nav {
            background-color: #0073e6;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #4CAF50;
            cursor : pointer;
        }

        nav a:hover {
            background-color: mediumspringgreen;
            transition: 400ms;
            cursor: pointer;
        }

        .offresbutton {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            border: none;
            background-color: #4CAF50;
            cursor : pointer;
        }

        .offresbutton :hover{
            background-color: mediumspringgreen;
            transition: 400ms;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .offer {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .offer h3 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            color: #2563eb;
        }
    </style>
</head>
<body>
<!-- Barre de navigation -->
@if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @auth
            <a
                href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Dashboard
            </a>
        @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Se connecter
            </a>

            @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Créér un compte
                </a>
            @endif
        @endauth
    </nav>
@endif

<!-- Conteneur centré -->
<div class="container">
    <div class="offer">
        <h3>Les offres de stages</h3>
        <a href="{{'offres.offreindex'}}">
            <button class="offresbutton">Les offres</button>
        </a>
    </div>


</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALLTOP</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-dark mb-2">
            <span class="navbar-brand mb-0 h1 text-light">
                @yield('title')
            </span>
        </nav>
        @yield('content')
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo - @yield('titulo')</title>
</head>
<body>
    @section('header')
        Cabecera de la web (master)
    @show
    <div class="container">
        @yield('content')
    </div>
    @section('footer')
        Pie de la web (master)
    @show
</body>
</html>

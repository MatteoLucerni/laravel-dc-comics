<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics: @yield('title')</title>

    @vite('resources/js/app.js')

    <style>
        html {
            display: none
        }
    </style>
</head>

<body>
    @include('includes.header')
    @include('includes.thumb')
    @yield('main-content')
    @include('includes.jumbo')
    @include('includes.footer')
</body>

</html>

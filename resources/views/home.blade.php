<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1>TEST</h1>
        <ul>
            @forelse ($comics as $comic)
                <li>
                    <h4>{{ $comic['title'] }}</h4>
                </li>
            @empty
            @endforelse
        </ul>
    </div>
</body>

</html>

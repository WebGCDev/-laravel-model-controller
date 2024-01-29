<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>
    @vite('resources/js/app.js')
</head>

<body>
    <main class="d-flex flex-wrap justify-content-center ">
        @foreach ($Movies as $movie)
            <div class="card-body">
                <h3 class="card-titolo">
                    Titolo:
                    <h3>
                        {{ $movie['title'] }}
                    </h3>
                </h3>
                <h1>Titolo in lingua originale:
                    {{ $movie['original_title'] }}
                </h1>
                <h3>
                    Nazionalità di produzione:
                    {{ $movie['nationality'] }}
                </h3>
                <div>
                    <h3>Data produzione:</h3>
                    <h3>{{ $movie['date'] }}</h3>
                </div>
                <div>
                    <h3>Votazione Imbd:</h3>
                    <h3>{{ $movie['vote'] }}</h3>
                </div>
            </div>
            </div>
        @endforeach
    </main>
</body>

</html>

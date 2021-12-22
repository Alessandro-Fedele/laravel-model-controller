<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movielix</title>
    @include("partials.header_scripts")
</head>

<body>
    <header>
        <nav class="navbar bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Movielix
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="py-4 d-flex flex-wrap justify-content-center">
            @foreach ($movies as $movie)
            <div class="card col-3 m-2">
                <div class="card-body">
                    <h5 class="card-text">Titolo: {{$movie->title}}</h5>
                    <h5 class="card-text">Titolo originale: {{$movie->original_title}}</h5>
                    <h5 class="card-text">Nazionalità: {{$movie->nationality}}</h5>
                    <h5 class="card-text">Uscita: {{$movie->date}}</h5>
                    <h5 class="card-text">Voto: {{$movie->vote}}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </main>

</body>

</html>
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
    <div class="container pt-2">
        <div class="row row-cols-2 align-items-end">
            @foreach ($movies as $movie)
            <div class="col d-flex justify-content-center align-items-center pt-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title mt-2">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle text-muted mt-2">{{ $movie->original_title }}</h6>
                        <p class="card-nationality mt-2">{{ $movie->nationality }}</p>
                    </div>
                </div>      
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
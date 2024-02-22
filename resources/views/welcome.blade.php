<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-6 text-center">
                    <h2>Laravel Migration-Seeder</h2>
                    <a href="{{ Route('trains.index') }}"><button class="btn btn-primary mt-3">Show Trains</button></a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>

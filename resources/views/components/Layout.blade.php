<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Séries de TV</title>
</head>

<body>
    <div class="container">
        <h1>Séries de TV</h1>
        <div id="content">
            <button class="btn btn-primary mt-4" onclick="series.verSeries();">Ver Séries</button>
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
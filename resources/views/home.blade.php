<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <ul>
        @foreach ($trains as $train)
            <li>
                <h1>{{$train->azienda}}</h1>
                <h2>Partenza: {{$train->stazione_di_arrivo}}</h2>
                <h3>Arrivo: {{$train->stazione_di_partenza}}</h3>
                <h4>Orario: {{$train->orario_partenza}} - {{$train->orario_arrivo}}</h4>
                <h5>Codice: {{$train->codice_treno}}</h5>
            </li>
        @endforeach
        </ul>

    </body>
</html>

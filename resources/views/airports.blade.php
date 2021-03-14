<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
            @foreach ($all_flights as $single_flight)
                <h2>-Volo: {{$single_flight->id}}</h2>
                <p>Prezzo: {{$single_flight->price}} €</p>
                <p>Codice di partenza: {{$single_flight->code_departure}}</p>
                <p>Codice di arrivo: {{$single_flight->code_arrival}}</p>
            @endforeach

            @foreach ($flights_min_price as $single_flight_min_price)
                <div class="min-price">
                    <h1>Il prezzo minore tra tutti i voli che abbiamo: {{ $single_flight_min_price->price }} €</h1>
                </div>
            @endforeach

    </body>
</html>

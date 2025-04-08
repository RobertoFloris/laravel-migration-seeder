<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <h1>Trains</h1>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($trains as $train)
                <x-card :company="$train->company" :departure_station="$train->departure_station" :arrival_station="$train->arrival_station" :departure_time="$train->departure_time" :arrival_time="$train->arrival_time"
                    :train_code="$train->train_code" :total_carriages="$train->total_carriages" :is_on_time="$train->is_on_time" :is_cancelled="$train->is_cancelled" />
            @endforeach

        </div>
    </div>

</body>

</html>

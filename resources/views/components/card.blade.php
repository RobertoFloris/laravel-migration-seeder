@props([
    'company',
    'departure_station',
    'arrival_station',
    'departure_time',
    'arrival_time',
    'train_code',
    'total_carriages',
    'is_on_time',
    'is_cancelled',
])

{{-- ho dovuto utilizzare le props perché con x-slot mi trasformava i valori booleani in stringhe e non riuscivo a fare il ternario --}}


<div class="col">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $company }}</h5>
            <p class="card-text">{{ $departure_station }}</p>
            <p class="card-text">{{ $arrival_station }}</p>
            <p class="card-text">{{ $departure_time }}</p>
            <p class="card-text">{{ $arrival_time }}</p>
            <p class="card-text">{{ $train_code }}</p>
            <p class="card-text">{{ $total_carriages }}</p>
            <p class="card-text">{{ $is_on_time ? 'In orario' : 'In ritardo' }}</p>
            </p>

            <p class="card-text">{{ $is_cancelled ? 'Cancellato' : 'Regolare' }}</p>
        </div>
    </div>
</div>

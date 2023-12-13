@extends('layouts.dash-admin')
@section('content')

<section id="car-showcase" class="container mt-5">
    <div style="margin-top: 100px" class="row">
        @foreach ($cars as $car)
        <div class="col-md-4">
            <div class="card">
                <img src='http://127.0.0.1:8000/{{$car->image}}'>
                <div class="card-body">
                    <h5 class="card-title">{{ $car->name }}</h5>
                    <p class="card-text">Color: {{ $car->color }}</p>
                    <p class="card-text">Price: ${{ number_format($car->price, 2) }}</p>
                    <p class="card-text">{{ $car->description }}</p>
                    <a href="#" class="btn btn-primary"
                        onclick="showConfirmation('{{ route('cars.purchase', ['carId' => $car->id]) }}')">Buy</a>
                </div>
            </div>
        </div>
        @endforeach
        <div id="confirmationMessage" class="alert alert-success" style="display: none;">
            Purchase Confirmed!
        </div>
    </div>
</section>


@endsection
@extends('layouts.index')

@section('content')

<!-- Car Showcase Section -->
<div  class="hero-section" style="background-image: url('https://c4.wallpaperflare.com/wallpaper/720/877/295/aston-martin-showroom-hd-wallpaper-preview.jpg'); height: 300px; position: relative; margin-top:30px;padding:60px ;box-shadow: 0 3px 8px rgb(0, 0, 0);
">
    <div class="hero-content text-center text-white">
        <h1 style="font-size: 3rem;">Welcome to Cars ShowRoom</h1>
        <p>Your destination for the latest and greatest cars!</p>
        <a style="padding: 12px;width: 150px;background: linear-gradient(to Left white black)" href="{{ route('register.login') }}" class="btn btn-primary">Shop now</a>
    </div>
</div>
<button id="toggleViewButton" class="btn btn-primary mb-3">Toggle View</button>

<section id="car-showcase" class="container mt-5">
    <div class="owl-carousel">
        @foreach ($cars as $car)
        <div class="item">
            <div class="card">
                <img src='http://127.0.0.1:8000/{{$car->image}}' class="card-img-top" alt="{{ $car->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $car->name }}</h5>
                    <p class="card-text">Color: {{ $car->color }}</p>
                    <p class="card-text">Price: ${{ number_format($car->price, 2) }}</p>
                    <p class="card-text">{{ $car->description }}</p>
                        <a href="{{ route('cars.purchase', ['carId' => $car->id]) }}" class="btn btn-primary">Buy</a>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


<section id="car-showcase" class="container mt-5">
    <div  style="margin-top: -50px" class="row">
        @foreach ($cars as $car)
            <div class="col-md-4">
                <div  style="margin-bottom: 10px" class="card">
                    {{-- <img src="{{ asset('images' . $car->image) }}" class="card-img-top" alt="{{ $car->name }}"> --}}
                    <img src='http://127.0.0.1:8000/{{$car->image}}' >
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->name }}</h5>
                        <p class="card-text">Color: {{ $car->color }}</p>
                        <p class="card-text">Price: ${{ number_format($car->price, 2) }}</p>
                        <p class="card-text">{{ $car->description }}</p>
                        <a href="{{ route('cars.purchase', ['carId' => $car->id]) }}" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
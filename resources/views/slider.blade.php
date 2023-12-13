@extends('layouts.index')
@section('content')    
{{-- <section id="car-showcase-slider" class="container mt-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div style="display: flex; flex-direction: row; align-items: center; justify-content: center;" class="carousel-inner">
            <div class="carousel-item active">
                <div class="card" style="max-width: 300px; margin: auto;">
                    <img src="https://assets.stickpng.com/thumbs/5ec3e4d258550c000442774e.png" class="card-img-top" alt="Car 1">
                    <div class="card-body">
                        <h5 class="card-title">Car 1</h5>
                        <p class="card-text">Color: Red</p>
                        <p class="card-text">Price: $50,000</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card" style="max-width: 300px; margin: auto;">
                    <img src="https://assets.stickpng.com/thumbs/5ec3e47e58550c000442774c.png" class="card-img-top" alt="Car 2">
                    <div class="card-body">
                        <h5 class="card-title">Car 2</h5>
                        <p class="card-text">Color: Blue</p>
                        <p class="card-text">Price: $45,000</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card" style="max-width: 300px; margin: auto;">
                    <img src="https://assets.stickpng.com/thumbs/5ec40966195c530004f93f04.png" class="card-img-top" alt="Car 3">
                    <div class="card-body">
                        <h5 class="card-title">Car 3</h5>
                        <p class="card-text">Color: Green</p>
                        <p class="card-text">Price: $55,000</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section> --}}
<section style="width: 100% ;height: 100%; display: flex; justify-content: center;align-content: center" id="car-showcase-slider" class="container mt-5">
    <div style="width: 80%" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div  style="display: flex ;justify-content: center;align-content: center" class="carousel-inner ">
            <div  class="carousel-item active">
                <div class="card" style="max-width: 500px;">
                    <img style="max-height: 300px; max-width: 300px; min-height: 300px" src="https://assets.stickpng.com/thumbs/5ec3e4d258550c000442774e.png" class="card-img-top" alt="Car 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Car 1</h5>
                        <p class="card-text">Color: Red</p>
                        <p class="card-text">Price: $50,000</p>
                    </div>
                </div>
            </div>
            <div  class="carousel-item">
                <div class="card" style="max-width: 500px;">
                    <img style="max-height: 300px; max-width: 300px; min-height: 300px" src="https://assets.stickpng.com/thumbs/5ec3e47e58550c000442774c.png" class="card-img-top" alt="Car 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Car 2</h5>
                        <p class="card-text">Color: Blue</p>
                        <p class="card-text">Price: $45,000</p>
                    </div>
                </div>
            </div>
            <div  class="carousel-item">
                <div class="card" style="max-width: 500px;">
                    <img style="max-height: 300px; max-width: 300px; min-height: 300px" src="https://assets.stickpng.com/thumbs/5ec40966195c530004f93f04.png" class="card-img-top" alt="Car 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Car 3</h5>
                        <p class="card-text">Color: Green</p>
                        <p class="card-text">Price: $55,000</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

@endsection


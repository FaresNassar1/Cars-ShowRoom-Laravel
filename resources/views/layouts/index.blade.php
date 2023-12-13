<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset(" css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title Here</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">



    <style>
        /* Your existing styles here */

        .create-car-button {
            margin-top: 200px;
            display: inline-block;
            color: rgb(0, 0, 0);
            background-color: #0080ff5d;
            padding: 20px 20px;
            text-decoration: none;
            border-radius: 4px;
            width: fit-content;
            margin: 100px auto -20px auto;
            display: flex;
            justify-content: center;
            box-shadow: 0 3px 8px rgb(0, 0, 0);

            transition: background-color 0.3s ease;
        }

        .create-car-button:hover {
            background-color: #2980b9;
            text-decoration: none;
            color: #fff;


        }

        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <!-- Header Section -->

    <header style=" display: flex; align-items: center; justify-content: space-around;  height: 70px ;width: 100%;"
        class=" fixed-top bg-dark text-white">

        <a href="{{route('index')}}"><img style="cursor: pointer; width: 80px;" src="{{ URL('images/logo.png') }}"></a>
        <div class="hero-content text-center text-white fade-in">
            <h1 style="   background: linear-gradient(to right,#6db6f6,#1c90f6, #0800ff);
        -webkit-background-clip: text;
        color: transparent;
        font-weight: 700
        margin: 0;text-transform: uppercase; font-size: 2rem; ">Cars ShowRoom</h1>
        </div>
        <div>
            <a href="{{route('register.login')}}" class="btn btn-outline-light">Login</a>
            <a href="{{route('register.signup')}}" style="" class="btn btn-outline-light">Sign Up</a>
        </div>
    </header>


    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Footer Section -->
    <footer class=" bg-dark text-white text-center  py-3">
        &copy; 2023 Cars ShowRoom. <a href="">Fares Nassar</a>.
    </footer>
</body>
<script>
    $(document).ready(function(){
        // Initialize Owl Carousel
        $(".owl-carousel").owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            margin: 10,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
        });

        // Hide the Owl Carousel initially
        $(".owl-carousel").hide();

        // Toggle between slider and box view
        $("#toggleViewButton").on("click", function(){
            $(".owl-carousel, .row").toggle();
        });
    });
</script>


</html>
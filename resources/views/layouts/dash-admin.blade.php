<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset(" css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title Here</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...">



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

        footer {

            margin-top: 100px;
            position: relative;
            bottom: 0;

            width: 100%
        }
    </style>
</head>


<body>
    <!-- Header Section -->
    <header style="display: flex; align-items: center; justify-content: space-evenly; height: 70px; width: 100%;"
        class="fixed-top bg-dark text-white">
        <a href="{{ route('index') }}"><img style="cursor: pointer; width: 80px;"
                src="{{ URL('images/logo.png') }}"></a>
        <h1 style="text-transform: uppercase; font-size: 2rem;">
            Cars ShowRoom
            <span class="badge badge-warning">User</span>
        </h1>
        <div style="display: flex; align-items: center;">
            
            <a href="{{route('logout')}}" class="btn btn-outline-light">LogOut</a>
            {{-- <a style=" box-shadow: 0 1px 8px rgb(255, 196, 0);
            ; margin-left:20px " href="/" class="btn btn-outline-light">
                <i class="fas fa-user"></i> Profile
            </a>          
            --}}
            
            <a style="box-shadow: 0 1px 8px rgb(255, 196, 0); margin-left:20px" href="/user/2/profile" class="btn btn-outline-light">
                <i class="fas fa-user"></i> Profile
            </a>
        </div>
    </header>


    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Footer Section -->
    <footer class=" bg-dark text-white text-center p-3">
        &copy; 2023 Cars ShowRoom. <a href="">Fares Nassar</a>.
    </footer>

</body>
<script>
    function showConfirmation(purchaseLink) {
        // Use a JavaScript confirmation dialog
        var isConfirmed = confirm("Are you sure you want to make the purchase?");

        if (isConfirmed) {
            // Redirect to the purchase link if confirmed
            window.location.href = purchaseLink;
        } else {
            // Show a message if not confirmed
            document.getElementById('confirmationMessage').style.display = 'block';
        }
    }
</script>
</html>
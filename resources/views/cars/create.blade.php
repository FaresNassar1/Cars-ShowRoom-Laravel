<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.655);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .home-btn {

            text-decoration: none;
            background-color: #4caf50;
            padding: 10px;
            color: white;
            border-radius: 5px;
            display: flex;
            justify-content: center
        }
        .home-btn:hover {
        
        background-color: #45a049;
        }
    </style>
</head>

<body>
    <form method="post" action="{{ route('car.store') }}" enctype="multipart/form-data">
        @csrf
        {{-- @method('post') --}}

        <h1>Add a New Car</h1>

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Car name">
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>

        <div>
            <label for="color">Color</label>
            <input type="text" name="color" id="color" placeholder="Car color">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="Car price in dollars">
        </div>

        <div>
            <input type="submit" value="Add Car">
        </div>
        <a class="home-btn" href="dashboard">Home</a>

    </form>
    @if(session('success'))
    <script>
        console.log("{{ session('success') }}");
    </script>
    @endif
</body>

</html>
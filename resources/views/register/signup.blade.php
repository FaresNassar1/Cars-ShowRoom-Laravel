<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 style="text-align: center;">Sign Up</h2>
        <form method="post" action="{{route('register-user')}}">
            @if(Session::has('success'))
            <div class="alert alert-success" style="color: green; font-weight: 700">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('failed'))
            <div class="alert alert-danger" style="color: red;font-weight: 700">{{Session::get('failed')}}</div>
            @endif

            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" required>
                <span class="text-danger">@error('name')
                    {{$message}}
                @enderror</span>
            </div>

            <div class="form-group">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" name="email" required>
                <span class="text-danger">@error('email')
                    {{$message}}
                @enderror</span>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
                <span class="text-danger">@error('password')
                    {{$message}}
                @enderror</span>
            </div>

            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" name="password_confirmation" required>
                <span class="text-danger">@error('password_confirmation')
                    {{$message}}
                @enderror</span>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input id="phone" type="tel" name="phone" required>
                <span class="text-danger">@error('password_confirmation')
                    {{$message}}
                @enderror</span>

            </div>

            <div class="form-group">
                <button type="submit">Register</button>
            </div>
            <div style="display: flex;justify-content: space-between">
                <a href="{{ route('index') }}">Home</a>
                <a href="login">Already Registered !! Login Here</a>
            </div>

        </form>
    </div>


</html>
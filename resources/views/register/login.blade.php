<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        @if(session('fail'))
        <div class="alert alert-danger">
            {{ session('fail') }}
        </div>
        @endif
        <h2 style="text-align: center;">Login</h2>
        <form method="post" action="{{route('login-admin')}}">
            @if(Session::has('success'))
            <div class="alert alert-success" style="color: green; font-weight: 700">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('failed'))
            <div class="alert alert-danger" style="color: red;font-weight: 700">{{Session::get('failed')}}</div>
            @endif

            @csrf
            {{-- action="{{ route('login') }}" --}}
            <div class="form-group">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" name="email" value="{{old('email')}}" required>
                <span class="text-danger">@error('email')
                    {{$message}}
                    @enderror</span>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
                <span class="text-danger">@error('passsword')
                    {{$message}}
                    @enderror</span>
            </div>

            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <a href="signup">New User !! Register Here</a>

        </form>
    </div>
 
</body>

</html>
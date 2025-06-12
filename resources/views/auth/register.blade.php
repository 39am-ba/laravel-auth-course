<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="{{ route('register') }}" method="post">
            @csrf

            <label>Username</label>
            <input type="text" name="username" value="{{ old('username') }}" placeholder="Your username">
            @error('username')
                <div class="error">{{ $message }}</div>
            @enderror

            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Your email">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <label>Password</label>
            <input type="password" name="password" placeholder="Your password">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Confirm password">

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">
    <form action="/login" method="POST" class="w-full max-w-md bg-white p-6 rounded shadow">
        @csrf
        <input type="text" name="username" placeholder="Enter your username" class="w-full p-2 border border-gray-300 rounded">

        <input type="password" name="password" placeholder="Enter your password" class="w-full p-2 border border-gray-300 rounded">

        <button type="submit" class="w-full bg-blue-600 text-white font-bold p-2 rounded hover:bg-blue-700 transition">Login</button>
    </form>
</body>
</html>
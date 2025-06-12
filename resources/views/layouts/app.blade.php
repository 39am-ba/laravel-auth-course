<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    @vite('resources/css/app.css')
</head>
<body class=" bg-gray-100 text-gray-900">
    <div class=" max-w-4xl mx-auto py-8 px-4">
        <nav class=" mb-6 flex justify-between items-center border-b pb-4">
            <h1 class="text-2xl font-bold">🔥 Laravel Mission</h1>
            <div class="space-x-4">
                @auth
                    <a href="/profile" class="text-blue-600 hover:underline hover:cursor-pointer">Profile</a>
                    <form action="{{ route('logout') }}" method="post" class=" inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:underline hover:cursor-pointer">Logout</a>
                    </form>
                @else
                    <a href="/login" class="text-blue-600 hover:underline hover:cursor-pointer">Login</a>
                    <a href="/register" class="text-blue-600 hover:underline hover:cursor-pointer">Register</a>
                @endauth
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    
</body>
</html>
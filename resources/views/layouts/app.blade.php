<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('title', 'Laravel App')</title>
</head>
<body>
    <div class="flex flex-col bg-slate-500 h-screen items-center">
        <nav class="w-2/3 flex justify-between items-center px-12 bg-white rounded-md h-12 -mb-12 shadow-2xl">
            <a href="{{  route('home')  }}">
                <h1 class="text-2xl font-bold">🔥 Laravel Mission</h1>
            </a>
            <div class="flex h-full items-center border-x-2">
                @auth
                    <a href="/profile" class="flex items-center px-16 h-full border-r-2 border-gray-600 hover:cursor-pointer hover:bg-green-300 transition">Profile</a>
                    <a href="/dashboard" class="flex items-center px-16 h-full border-r-2 border-gray-600 hover:cursor-pointer hover:bg-green-300 transition">Dashboard</a>

                    <form action="{{ route('logout') }}" method="post" class="flex items-center h-full border-gray-600">
                        @csrf
                        <button type="submit" class="px-16 hover:cursor-pointer h-full hover:bg-red-300 hover:transition transition">Logout</a>
                    </form>
                @else
                    <a href="/login" class="flex items-center px-16 h-full border-r-2 border-gray-600 hover:cursor-pointer hover:bg-green-300 transition">Login</a>
                    <a href="/register" class="flex items-center px-16 h-full border-gray-600 hover:cursor-pointer hover:bg-green-300 transition">Register</a>
                @endauth
            </div>
        </nav>

        <main class="my-auto">
            @yield('content')
        </main>
    </div>
    
</body>
</html>
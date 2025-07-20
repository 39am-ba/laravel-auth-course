@extends('layouts.app')

@section('title', 'register')

@section('content')
<div class="flex justify-center items-center h-[90%]">
    <div class="bg-white p-8 rounded-lg shadow-lg w-sm">
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <label>Username</label>
            <input type="text" name="username" value="{{ old('username') }}" placeholder="Your username" class="w-full p-2 my-2.5 border-slate-300 border-2 rounded-sm">
            @error('username')
                <div class="text-red-500 text-sm mb-3.5">{{ $message }}</div>
            @enderror

            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Your email" class="w-full p-2 my-2.5 border-slate-300 border-2 rounded-sm">
            @error('email')
                <div class="text-red-500 text-sm mb-3.5">{{ $message }}</div>
            @enderror

            <label>Password</label>
            <input type="password" name="password" placeholder="Your password" class="w-full p-2 my-2.5 border-slate-300 border-2 rounded-sm">
            @error('password')
                <div class="text-red-500 text-sm mb-3.5">{{ $message }}</div>
            @enderror

            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Confirm password" class="w-full p-2 my-2.5 border-slate-300 border-2 rounded-sm">

            <button type="submit" class="w-full p-2.5 bg-blue-500 hover:bg-blue-800 mt-2.5 text-white border-0 rounded-sm font-bold hover:cursor-pointer hover:transition transition">Register</button>
        </form>
        
        <p class="mt-5">Already registered? <a class=" underline text-blue-500 hover:text-blue-700 hover:cursor-pointer hover:transition transition" href="{{  route('login')  }}">Login</a></p>
    </div>
</div>
@endsection
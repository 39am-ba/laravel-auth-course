@extends('layouts.app')

@section('title', 'login')

@section('content')
<div class="flex justify-center items-center h-[90%]">
    <div class="bg-white p-8 rounded-lg shadow-lg w-sm">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter your username" class="w-full p-2 my-2.5 border-slate-300 border-2 rounded-sm">

            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" class="w-full p-2 my-2.5 border-slate-300 border-2 rounded-sm">

            <button type="submit" class="w-full p-2.5 bg-blue-500 hover:bg-blue-800 mt-2.5 text-white border-0 rounded-sm font-bold hover:cursor-pointer hover:transition transition">Login</button>
        </form>
        <p class="mt-5">Don't have an account? <a class=" underline text-blue-500 hover:text-blue-700 hover:cursor-pointer hover:transition transition" href="{{  route('register')  }}">Register</a></p>
    </div>
</div>
@endsection


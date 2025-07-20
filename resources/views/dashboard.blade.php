@extends('layouts.app')

@section('title', 'dashboard')

@section('content')
<div class="flex justify-center items-center h-[90%]">
    <div class="bg-white p-8 rounded-lg shadow-lg w-lg space-y-10">
        <h1 class="font-bold text-2xl text-blue-900">To-Do List</h1>
        <div class="flex justify-between w-full bg-gray-200 rounded-4xl focus-within:bg-gray-300 transition">
            <input type="text" name="task" placeholder="Add your task" class="pl-4 rounded-l-4xl w-full focus:outline-0 focus:border-gray-300">
            <button class="p-5 px-14 rounded-4xl bg-orange-500 text-white font-bold hover:cursor-pointer hover:bg-orange-600 transition">ADD</button>
        </div>
        <div>
            <div class="flex justify-between items-center pr-6">
                <div class="flex items-center">
                    <input type="checkbox" class="hover:cursor-pointer accent-orange-600 size-8 appearance-none bg-white border-3 border-gray-300 rounded-4xl checked:bg-orange-500 checked:border-orange-500">
                    <span class="ml-4">Learn JavaScript projects</span>
                </div>
                <div>
                    <span class="hover:cursor-pointer hover:bg-red-500 hover:text-white transition p-1 px-3 rounded-3xl text-2xl">X</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
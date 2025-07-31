@extends('layouts.app')

@section('title', 'dashboard')

@section('script')
<script src="/resources/js/tasks.js"></script>
@endsection

@section('content')
<div class="flex justify-center items-center h-[90%]">
    <div class="bg-white p-8 rounded-lg shadow-lg w-lg space-y-10">
        <h1 class="font-bold text-2xl text-blue-900">To-Do List</h1>
        <form action="/dashboard" method="post">
            @csrf
            <div class="flex justify-between w-full bg-gray-200 rounded-4xl focus-within:bg-gray-300 transition">
                <input id="contents" required maxlength="250" type="contents" name="contents" placeholder="Add your task" class="pl-4 rounded-l-4xl w-full focus:outline-0 focus:border-gray-300">
                
                <button type="submit" class="p-5 px-14 rounded-4xl bg-orange-500 text-white font-bold hover:cursor-pointer hover:bg-orange-600 transition">ADD</button>
            </div>
            @error('task')
            <div class="text-red-500 text-sm mb-3.5">{{ $message }}</div>
            @enderror
        </form>
        <div>
            @foreach ($tasks as $task)
                <x-task-item :contents="$task->contents" :id="$task->id"></x-task-item>
            @endforeach
        </div>
    </div>
</div>
@endsection
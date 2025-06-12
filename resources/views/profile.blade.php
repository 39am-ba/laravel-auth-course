@extends('layouts.app')

@section('title', 'Your profile')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Welcome back, {{ Auth::user()->username }}</h2>
    <p>Email: {{ Auth::user()->email }}</p>
@endsection
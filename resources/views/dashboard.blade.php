{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}



<!-- dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareStuff</title>
    <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>
    <div class="title">
        <h1>
            @if(Auth::check())
                <p>Welcome back, {{ Auth::user()->name }}!</p>
            @endif
        </h1>
    </div>
    
    <div class="component">
        <a class="nav-link" href="/">Go to Home</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link btn btn-link">Logout</button>
        </form>
    </div>
</body>
</html>

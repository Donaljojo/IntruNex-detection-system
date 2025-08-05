@extends('layouts.guest')
@section('content')
    <div class="min-h-screen bg-[#0c1a1a] text-white flex flex-col justify-center items-center px-4">
        <h1 class="text-4xl font-bold mb-4" style="font-family: 'Courier New', monospace;">
            🔐 IntruNex Security Portal
        </h1>

        <p class="mb-6 text-gray-300">Detect & Defend Against Web Exploits</p>

        <form method="POST" action="{{ route('login') }}" class="bg-[#1c2b2b] p-6 rounded-lg shadow-md w-full max-w-sm">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="w-full px-3 py-2 rounded bg-gray-800 border border-gray-600 focus:outline-none focus:ring focus:ring-green-500">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm mb-1">Password</label>
                <input id="password" type="password" name="password" required
                       class="w-full px-3 py-2 rounded bg-gray-800 border border-gray-600 focus:outline-none focus:ring focus:ring-green-500">
            </div>

            <!-- Remember Me -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" class="mr-2">
                <span class="text-sm">Remember me</span>
            </div>

            <div class="flex justify-between items-center mb-4">
                <a class="text-sm text-green-400 hover:underline" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            </div>

            <div>
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded">
                    Log in
                </button>
            </div>
        </form>
    </div>
@endsection

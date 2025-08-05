<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold">User Dashboard</h1>
    <p>Welcome to the IntruNex user panel.</p>
@endsection
@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-red-600">Admin Dashboard</h1>
    <p>Welcome, Admin. You have full access to the IntruNex control center.</p>
@endsection

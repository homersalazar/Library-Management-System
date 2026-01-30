@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col md:flex-row">
    <!-- Left side: Background image with overlay -->
    <div class="relative md:flex-1 w-full h-64 md:h-auto flex items-center justify-center text-center bg-cover bg-center"
            style="background-image: url('{{ asset('storage/cover/cover_photo1.png') }}');">
        <!-- Overlay for readability -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Text content -->
        <div class="relative px-6 md:px-12 text-white">
            <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold mb-4">
                Welcome to the Library Management System
            </h1>
            <p class="text-md md:text-lg lg:text-xl">
                Manage your library efficiently and effortlessly.
            </p>
        </div>
    </div>

    <!-- Right side: Login Form -->
    <div class="flex-1 w-full flex items-center justify-center p-6 md:p-12 bg-gray-50">
        <form class="w-full max-w-md bg-white p-8 rounded-xl shadow-xl space-y-6">
            <h2 class="text-2xl font-bold text-gray-700">Login</h2>

            <!-- Email -->
            <div>
                <x-label for="email" class="mb-2" variant="green">Email</x-label>
                <x-input type="email" id="email" placeholder="name@gmail.com" required class="block w-full focus:ring-green-500 focus:border-green-500" />
            </div>

            <!-- Password -->
            <div>
                <x-label for="password" class="mb-2" variant="green">Password</x-label>
                <x-input type="password" id="password" placeholder="••••••••" required class="block w-full focus:ring-green-500 focus:border-green-500" />
            </div>

            <!-- Remember me + Forgot Password -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <x-checkbox id="remember" variant="green" />
                    <x-label for="remember" class="ml-2 text-gray-600">Remember me</x-label>
                </div>
                <a href="#" class="text-green-500 hover:underline text-sm">Forgot password?</a>
            </div>

            <!-- Submit button -->
            <x-button type="submit" class="w-full py-3 text-white bg-green-500 hover:bg-green-600 transition duration-300">
                Login
            </x-button>

        </form>
    </div>
</div>
@endsection

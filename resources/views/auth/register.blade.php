@extends('master')
@section('title', 'register')
@section('content')
    <div class="bg-white shadow-lg rounded-lg w-full max-w-md p-8 mx-auto mt-20">

        @include('layouts.messages.validation_message')
        @include('layouts.messages.flash_message')

        <form id="registerForm" action="{{ route('register') }}" method="POST" class="flex flex-col gap-5">
            @csrf
            <input type="text" name='full_name' value="{{ old('full_name') }}" placeholder="Full Name" required
                class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
            <input type="email" name='email' value="{{ old('email') }}"placeholder="Email" required
                class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
            <input type="password" name='password' value="{{ old('password') }}" placeholder="Password" required
                class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
            <input type="password" name='password_confirmation' value="{{ old('password_confirmation') }}"
                placeholder="Confirm Password" required
                class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
            <button type="submit"
                class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700 transition">Register</button>
        </form>


        <!-- Social Login -->
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600 mb-3">Or continue with</p>
            <div class="flex justify-center space-x-4">
                <a href="/auth/github" class="text-gray-600 hover:text-black text-2xl"><i class="fab fa-github"></i></a>
                <a href="/auth/facebook" class="text-blue-600 hover:text-blue-800 text-2xl"><i
                        class="fab fa-facebook"></i></a>
                <a href="/auth/google" class="text-red-500 hover:text-red-700 text-2xl"><i class="fab fa-google"></i></a>
            </div>
        </div>
    </div>

@endsection

@extends('master')
@section('title', 'register')
@section('content')
    <div class="bg-white shadow-lg rounded-lg w-full max-w-md p-8 mx-auto mt-20">

        @include('layouts.messages.validation_message')
        @include('layouts.messages.flash_message')

        <form id="registerForm" action="{{ route('register') }}" method="POST" class="flex flex-col gap-5">
            @csrf
            <input type="text" name='full_name' value="{{ old('full_name') }}" placeholder="{{ __('messages.full_name') }}"
                required class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">

            <input type="email" name='email' value="{{ old('email') }}" placeholder="{{ __('messages.email') }}"
                required class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">

            <input type="password" name='password' value="{{ old('password') }}" placeholder="{{ __('messages.password') }}"
                required class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">

            <input type="password" name='password_confirmation' value="{{ old('password_confirmation') }}"
                placeholder="{{ __('messages.confirm_password') }}" required
                class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">

            <button type="submit" class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700 transition">
                {{ __('messages.register') }}
            </button>
        </form>

        <!-- Social Login -->
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600 mb-3">{{ __('messages.or_continue_with') }}</p>
            <div class="flex justify-center space-x-4">
                <a href="/auth/github" class="text-gray-700 hover:text-black text-2xl">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 .5C5.73.5.5 5.73.5 12c0 5.08 3.29 9.38 7.86 10.9.58.1.79-.25.79-.55v-2.1c-3.2.7-3.87-1.36-3.87-1.36-.52-1.31-1.27-1.66-1.27-1.66-1.04-.72.08-.7.08-.7 1.16.08 1.78 1.19 1.78 1.19 1.03 1.77 2.7 1.26 3.36.97.1-.75.4-1.26.72-1.55-2.55-.29-5.24-1.28-5.24-5.69 0-1.26.45-2.28 1.19-3.09-.12-.29-.52-1.45.11-3.01 0 0 .98-.31 3.21 1.18a11.1 11.1 0 015.84 0c2.23-1.5 3.21-1.18 3.21-1.18.63 1.56.24 2.72.12 3.01.74.81 1.18 1.83 1.18 3.09 0 4.42-2.7 5.39-5.26 5.67.41.36.77 1.06.77 2.14v3.17c0 .31.2.66.8.55A10.51 10.51 0 0023.5 12C23.5 5.73 18.27.5 12 .5z" />
                    </svg>
                </a>
                <a href="/auth/facebook" class="text-blue-600 hover:text-blue-800 text-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M22.675 0h-21.35C.597 0 0 .597 0 1.333v21.334C0 23.403.597 24 1.325 24H12.82v-9.294H9.692V11.41h3.128V8.749c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.794.143v3.24h-1.918c-1.504 0-1.796.715-1.796 1.763v2.31h3.588l-.467 3.296h-3.121V24h6.116C23.403 24 24 23.403 24 22.667V1.333C24 .597 23.403 0 22.675 0z" />
                    </svg>
                </a>
                <a href="/auth/google" class="text-red-500 hover:text-red-700 text-2xl">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 488 512" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M488 261.8c0-17.7-1.6-35.2-4.6-52H249v98.5h134.7c-5.8 31.4-23.5 58.1-49.8 75.7v62.9h80.4c47-43.4 73.7-107.4 73.7-185.1z"
                            fill="#4285F4" />
                        <path
                            d="M249 492c66.2 0 121.8-21.9 162.4-59.4l-80.4-62.9c-22.3 14.9-51 23.7-82 23.7-62.8 0-116-42.4-135-99.3h-82.4v62.2C72.9 437.8 152.2 492 249 492z"
                            fill="#34A853" />
                        <path
                            d="M114 294.1c-5.2-15.4-8.2-31.8-8.2-48.6s3-33.2 8.2-48.6v-62.2H31.6C11.4 165.3 0 204.4 0 245.5s11.4 80.2 31.6 110.9L114 294.1z"
                            fill="#FBBC05" />
                        <path
                            d="M249 97.1c35.9 0 68.3 12.4 93.7 36.8l70.2-70.2C370.7 25.2 314.7 0 249 0 152.2 0 72.9 54.2 31.6 134.3L114 196.6c19-56.9 72.2-99.5 135-99.5z"
                            fill="#EA4335" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

@endsection

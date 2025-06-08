@extends('master')
@section('title', 'dishes')
@section('content')

    <!-- Dishes Section -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
            {{-- messages --}}
            @include('layouts.messages.flash_message')
            {{-- Dishes Content --}}
            <div class="flex justify-between items-center mb-10">

                <h2 class="text-3xl font-bold text-red-600 ">{{ __('sidebar.Our Delicious Dishes') }}</h2>
                {{-- Search input --}}
                <form action="{{ route('users.dishes.search') }}" method='get' class="relative mx-3">

                    <input type="text" name="q" placeholder="{{ __('sidebar.Search for your Dish') }}"
                        class="pl-10 pr-4 py-2 rounded-full bg-gray-100 border border-blue-200 duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition w-64" />
                    <svg class="w-5 h-5 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2 pointer-events-none"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1111 3a7.5 7.5 0 015.65 13.65z" />
                    </svg>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition">
                        {{ __('sidebar.Search') }}
                    </button>
                </form>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                @forelse ($dishes as $dish)
                    <!-- Dish Card -->
                    <div class="bg-white rounded-lg shadow p-5 hover:shadow-lg transition">
                        <img src="{{ asset('images/dishes/' . $dish->image) }}" alt="Chocolate Cake"
                            class="w-full h-40 object-cover rounded-md mb-4">

                        <h2 class="text-2xl font-semibold text-gray-800">{{ $dish->name }}</h2>
                        <span class="text-sm font-semibold text-gray-800 opacity-[.7]">{{ $dish->category?->name }}</span>
                        <p class="text-sm text-gray-600 mt-1">{{ $dish->description }}</p>
                        <p class="text-red-600 font-bold mt-2">${{ $dish->price }}</p>
                        @auth('admin')
                            <div class="flex gap-3 items-center">
                                <a href="{{ route('admin.dishes.edit', $dish->id) }}"
                                    class="bg-green-600 hover:bg-green-700 text-white py-1 px-4 rounded text-md mt-3">Edit
                                </a>
                                <a href="{{ route('admin.dishes.destroy', $dish->id) }}"
                                    class="bg-red-600 hover:bg-red-700 text-white py-1 px-4 rounded text-md mt-3">Delete
                                </a>
                            </div>
                        @else
                            <a href="{{ route('users.carts.store', $dish->id) }}"
                                class=" bg-green-600 text-center block hover:bg-green-700 text-white py-1 px-4 rounded text-md mt-3">Add
                                to
                                Cart
                            </a>
                        @endauth
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    {{ $dishes->links() }}
@endsection

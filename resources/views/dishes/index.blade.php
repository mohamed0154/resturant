@extends('master')
@section('title', 'dishes')
@section('content')



    <!-- Dishes Section -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
            {{-- messages --}}
            @include('layouts.messages.flash_message')
            {{-- Dishes Content --}}
            <h2 class="text-3xl font-bold text-center text-red-600 mb-10">Our Delicious Dishes</h2>

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

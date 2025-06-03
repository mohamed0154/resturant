@extends('master')
@section('title', 'Cart')
@section('content')

    <section class="min-h-screen bg-gray-100 p-4 md:p-8">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
            {{-- messages --}}
            @include('layouts.messages.flash_message')
            {{-- Heading --}}
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Your Cart</h1>

            <!-- Cart Item -->
            <div class="space-y-4">
                @forelse ($cart_items as $item)
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg shadow-sm">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/dishes/' . $item->dish->image) }}" alt="Product Image"
                                class="w-16 h-16 rounded object-cover">
                            <div>
                                <h2 class="text-lg font-semibold text-gray-800">{{ $item->dish->name }}</h2>
                                <p class="text-sm text-gray-600">Quantity: {{ $item->quantity }}</p>
                                <p class="text-sm text-red-600 font-semibold">{{ $item->total_price }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 ">

                            <a href="{{ route('users.carts.increase', $item->id) }}"
                                class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300 text-lg">
                                +
                            </a>
                            <a href="{{ route('users.carts.decrease', $item->id) }}"
                                class="w-6 h-6 flex items-center justify-center bg-red-200 text-gray-700 rounded hover:bg-red-300 text-lg">
                                -
                            </a>
                            <a href="{{ route('users.carts.destroy', $item->id) }}"
                                class="text-red-600 hover:underline text-sm">
                                <!-- Trash Icon (Solid) -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>

                            </a>
                        </div>
                    </div>
                @empty
                @endforelse



            </div>

            <!-- Total Section -->
            <div class="mt-6 text-right">
                <p class="text-xl font-bold text-gray-800">
                    Total: ${{ $total_price ?? $total_price }}
                </p>
                <a href='{{ route('users.payment') }}'
                    class="mt-4 bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition">
                    Checkout
                </a>
            </div>
        </div>
    </section>
@endsection

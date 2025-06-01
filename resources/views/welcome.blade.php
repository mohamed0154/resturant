@extends('master')

@section('title', 'welcome')
@section('content')

    <!-- Hero Section -->
    <section class="bg-gray-100 py-20 px-6 text-center">
        <h2 class="text-4xl sm:text-5xl font-bold mb-6 text-red-600">Welcome to TasteBite</h2>
        <p class="text-lg sm:text-xl text-gray-700 max-w-2xl mx-auto mb-8">Delicious dishes from your favorite
            restaurants, just a click away. Place your order, sit back, and enjoy!</p>
        <a href="/menu"
            class="inline-block bg-red-600 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-red-700 transition">Explore
            Menu</a>
    </section>

    <!-- Features -->
    <section class="py-16 bg-white px-6">
        <div class="max-w-5xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-red-600 mb-6">Why Choose TasteBite?</h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mt-8">
                <div>
                    <img src="https://img.icons8.com/color/96/food-delivery.png" alt="Fast Delivery" class="mx-auto mb-4">
                    <h4 class="font-semibold text-lg mb-2">Fast Delivery</h4>
                    <p class="text-gray-600 text-sm">Get your meals delivered hot and fresh in no time.</p>
                </div>
                <div>
                    <img src="https://img.icons8.com/color/96/menu.png" alt="Variety of Dishes" class="mx-auto mb-4">
                    <h4 class="font-semibold text-lg mb-2">Wide Menu</h4>
                    <p class="text-gray-600 text-sm">Choose from a variety of cuisines and dishes.</p>
                </div>
                <div>
                    <img src="https://img.icons8.com/color/96/cash-register.png" alt="Easy Payment" class="mx-auto mb-4">
                    <h4 class="font-semibold text-lg mb-2">Easy Payments</h4>
                    <p class="text-gray-600 text-sm">Pay quickly and securely with multiple options.</p>
                </div>
            </div>
        </div>
    </section>


@endsection

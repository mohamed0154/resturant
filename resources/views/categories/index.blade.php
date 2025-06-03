@extends('master')
@section('title', 'categories')
@section('content')
    <!-- Categories Section -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-red-600 mb-10">{{ __('messages.Browse Categories') }}</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Starters -->
                @forelse ($categories as $category)
                    <div class="bg-white rounded-lg shadow p-5 text-center hover:shadow-md transition">
                        <img src="{{ asset('images/categories/' . $category->image) }}" alt="Categoy Image"
                            class="w-24 h-24 mx-auto mb-4 rounded-full object-cover">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $category->name }}</h3>
                    </div>
                @empty
                @endforelse


            </div>
        </div>
    </section>
@endsection

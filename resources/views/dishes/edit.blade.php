@extends('master')
@section('title', 'edit dish')
@section('content')



    <main class="max-w-4xl mx-auto p-8 bg-white shadow-md rounded-lg mt-10">
        {{-- messages --}}
        @include('layouts.messages.flash_message')
        @include('layouts.messages.validation_message')

        <!-- Edit Dish Form -->
        <h2 class="text-2xl font-bold text-red-600 mb-6 text-center">Edit Dish</h2>

        <form action="{{ route('admin.dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @method('put')
            @csrf
            <!-- Dish Name -->
            <div>
                <label class="block mb-2 text-sm font-medium">Dish Name</label>
                <input type="text" name="name" value="{{ $dish?->name }}" name="name" value="Grilled Chicken"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>

            <!-- Category -->
            <div>
                <label class="block mb-2 text-sm font-medium">Category</label>
                <select name="category_id"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
                    @forelse ($categories as $category)
                        <option {{ $dish->category_id == $category->id ? 'selected' : '' }} value='{{ $category->id }}'>
                            {{ $category->name }}</option>
                    @empty
                    @endforelse

                </select>
            </div>

            <!-- Description -->
            <div>
                <label class="block mb-2 text-sm font-medium">Description</label>
                <textarea name="description" rows="4"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                    placeholder="Enter description...">{{ $dish?->description }}n</textarea>
            </div>

            <!-- Price -->
            <div>
                <label class="block mb-2 text-sm font-medium">Price ($)</label>
                <input type="number" name="price" value="{{ $dish?->price }}" step="0.01"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>

            <!-- Image Upload -->
            <div>
                <label class="block mb-2 text-sm font-medium">Change Image</label>
                <input type="file" name="image"
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
                <p class="text-sm text-gray-500 mt-1">Current image shown below:</p>
                <img src="{{ asset('images/dishes/' . $dish?->image) }}" alt="Current Dish"
                    class="w-32 h-32 mt-2 rounded-md object-cover">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 transition">
                    Save Changes
                </button>
            </div>
        </form>
    </main>

@endsection

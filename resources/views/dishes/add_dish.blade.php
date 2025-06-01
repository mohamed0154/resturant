@extends('master')
@section('title', 'Add Dish')
@section('content')

    <!-- Add Dish Form -->
    <section class="py-16 px-6">
        <div class="container mx-auto max-w-4xl bg-white shadow-md p-8 rounded-lg">
            {{-- Messages --}}
            @include('layouts.messages.flash_message')
            @include('layouts.messages.validation_message')

            <h2 class="text-3xl font-bold text-red-600 mb-8 text-center">Add a New Dish</h2>

            <form action="{{ route('admin.dishes.store') }}" method="post" class="space-y-6" enctype="multipart/form-data">
                @csrf
                <!-- Dish Name -->
                <div>
                    <label class="block mb-2 font-semibold">Dish Name</label>
                    <input type="text" name='name' value="{{ old('name') }}" placeholder="e.g., Chicken Alfredo"
                        required class="w-full border border-gray-300 p-3 rounded" />
                </div>

                <!-- Image Upload -->
                <div>
                    <label class="block mb-2 font-semibold">Dish Image</label>
                    <input type="file" name='image' value="{{ old('image') }}" accept="image/*"
                        class="w-full border border-gray-300 p-3 rounded bg-white" />
                </div>

                <!-- Description -->
                <div>
                    <label class="block mb-2 font-semibold">Description</label>
                    <textarea rows="4" name='description' value="{{ old('description') }}" placeholder="Short description of the dish"
                        class="w-full border border-gray-300 p-3 rounded" required></textarea>
                </div>

                <!-- Price -->
                <div>
                    <label class="block mb-2 font-semibold">Price ($)</label>
                    <input type="number" name='price' value="{{ old('price') }}" step="0.01" min="0"
                        placeholder="e.g., 12.99" class="w-full border border-gray-300 p-3 rounded" required />
                </div>

                <!-- Category -->
                <div>
                    <label class="block mb-2 font-semibold">Category</label>
                    <select name='category_id' value="{{ old('category_id') }}"
                        class="w-full border border-gray-300 p-3 rounded" required>
                        @forelse ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @empty
                        @endforelse

                    </select>
                </div>

                <!-- Submit -->
                <div class="text-center">
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded text-lg">Add
                        Dish</button>
                </div>
            </form>
        </div>
    </section>

@endsection

@extends('master')
@section('title', 'create category')
@section('content')
    <section class="py-16 px-6">
        <div class="container mx-auto max-w-4xl bg-white shadow-md p-8 rounded-lg">
            {{-- Messages --}}
            @include('layouts.messages.flash_message')
            @include('layouts.messages.validation_message')

            <!-- Add Category Form -->
            <h2 class="text-3xl font-bold text-red-600 mb-8 text-center">Add a New Category</h2>

            <form action="{{ route('admin.categories.store') }}" method="post" class="space-y-6" enctype="multipart/form-data">
                @csrf
                <!-- Category Name -->
                <div>
                    <label class="block mb-2 font-semibold">Category Name</label>
                    <input type="text" name="name" placeholder="e.g., Starters, Desserts" required
                        class="w-full border border-gray-300 p-3 rounded" />
                </div>

                <!-- Optional Icon/Image Upload -->
                <div>
                    <label class="block mb-2 font-semibold">Category Image (optional)</label>
                    <input type="file" name="image" class="w-full border border-gray-300 p-3 rounded bg-white" />
                </div>

                <!-- Submit -->
                <div class="text-center">
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded text-lg">Add
                        Category</button>
                </div>
            </form>
        </div>
    </section>

@endsection

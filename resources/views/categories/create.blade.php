@extends('master')
@section('title', __('messages.create_category'))
@section('content')
    <section class="py-16 px-6">
        <div class="container mx-auto max-w-4xl bg-white shadow-md p-8 rounded-lg">
            {{-- Messages --}}
            @include('layouts.messages.flash_message')
            @include('layouts.messages.validation_message')

            <!-- Add Category Form -->
            <h2 class="text-3xl font-bold text-red-600 mb-8 text-center">{{ __('messages.add_new_category') }}</h2>

            <form action="{{ route('admin.categories.store') }}" method="post" class="space-y-6" enctype="multipart/form-data">
                @csrf

                <!-- Category Name -->
                <div>
                    <label class="block mb-2 font-semibold">{{ __('messages.category_name') }}</label>
                    <input type="text" name="name" placeholder="{{ __('messages.category_name_placeholder') }}" required
                        class="w-full border border-gray-300 p-3 rounded" />
                </div>

                <!-- Optional Icon/Image Upload -->
                <div>
                    <label class="block mb-2 font-semibold">{{ __('messages.category_image_optional') }}</label>
                    <input type="file" name="image" class="w-full border border-gray-300 p-3 rounded bg-white" />
                </div>

                <!-- Submit -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded text-lg">{{ __('messages.add_category_button') }}</button>
                </div>
            </form>
        </div>
    </section>
@endsection

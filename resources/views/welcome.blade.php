@extends('master')

@section('title', 'welcome')
@section('content')

    <!-- Hero Section -->
    <section class="bg-gray-100 py-20 px-6 text-center">
        <h2 class="text-4xl sm:text-5xl font-bold mb-6 text-red-600">{{ __('messages.hero_title') }}</h2>
        <p class="text-lg sm:text-xl text-gray-700 max-w-2xl mx-auto mb-8">{{ __('messages.hero_subtitle') }}</p>

    </section>

    <!-- Features -->
    <section class="py-16 bg-white px-6">
        <div class="max-w-5xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-red-600 mb-6">{{ __('messages.features_title') }}</h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mt-8">
                <div>
                    <img src="https://img.icons8.com/color/96/food-delivery.png" alt="{{ __('messages.fast_delivery') }}"
                        class="mx-auto mb-4">
                    <h4 class="font-semibold text-lg mb-2">{{ __('messages.fast_delivery') }}</h4>
                    <p class="text-gray-600 text-sm">{{ __('messages.fast_delivery_desc') }}</p>
                </div>
                <div>
                    <img src="https://img.icons8.com/color/96/menu.png" alt="{{ __('messages.wide_menu') }}"
                        class="mx-auto mb-4">
                    <h4 class="font-semibold text-lg mb-2">{{ __('messages.wide_menu') }}</h4>
                    <p class="text-gray-600 text-sm">{{ __('messages.wide_menu_desc') }}</p>
                </div>
                <div>
                    <img src="https://img.icons8.com/color/96/cash-register.png" alt="{{ __('messages.easy_payments') }}"
                        class="mx-auto mb-4">
                    <h4 class="font-semibold text-lg mb-2">{{ __('messages.easy_payments') }}</h4>
                    <p class="text-gray-600 text-sm">{{ __('messages.easy_payments_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

@endsection

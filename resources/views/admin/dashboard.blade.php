@extends('master')

@section('title', 'Dashboard')
@section('content')
    <div class="flex min-h-screen">



        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Top Bar -->
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
                <div class="text-sm text-gray-600">Welcome, <span
                        class="font-semibold">{{ Auth::guard('admin')->user()?->full_name }}</span>
                </div>
            </header>

            <!-- Dashboard Cards -->
            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <p class="text-sm text-gray-600">Total Orders</p>
                    <h2 class="text-2xl font-bold text-red-600 mt-2">
                        {{ isset($orders_count) && $orders_count > 0 ? $orders_count : 0 }}</h2>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <p class="text-sm text-gray-600">Total Dishes</p>
                    <h2 class="text-2xl font-bold text-red-600 mt-2">
                        {{ isset($dishes_count) && $dishes_count > 0 ? $dishes_count : 0 }}</h2>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <p class="text-sm text-gray-600">Categories</p>
                    <h2 class="text-2xl font-bold text-red-600 mt-2">
                        {{ isset($categories_count) && $categories_count > 0 ? $categories_count : 0 }}
                    </h2>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <p class="text-sm text-gray-600">Active Users</p>
                    <h2 class="text-2xl font-bold text-red-600 mt-2">4</h2>
                </div>
            </section>

            <!-- Recent Orders (example) -->
            <section>
                <h2 class="text-xl font-bold text-gray-800 mb-4">Recent Orders</h2>
                <div class="bg-white shadow rounded-lg overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-gray-100 text-sm text-gray-600">
                            <tr>
                                <th class="p-4">Order ID</th>
                                <th class="p-4">Customer</th>
                                <th class="p-4">Items</th>
                                <th class="p-4">Total</th>
                                <th class="p-4">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">

                            @forelse ($orders as $order)
                                <tr class="border-b">
                                    <td class="p-4">#{{ $order->id }}</td>
                                    <td class="p-4">{{ $order->user->full_name }}</td>
                                    <td class="p-4">{{ $order->order_items_count }}</td>
                                    <td class="p-4">{{ $order->total_price }}</td>
                                    <td class="p-4 text-green-600">{{ $order->status }}</td>
                                </tr>
                            @empty
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
@endsection

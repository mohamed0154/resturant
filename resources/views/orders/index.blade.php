@extends('master')
@section('title', 'home')
@section('content')

    <!-- Orders Table -->
    <main class="max-w-6xl mx-auto mt-10 p-6 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-6 text-red-600">All Orders</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white text-sm">
                <thead>
                    <tr class="bg-gray-100 text-left text-gray-700">
                        <th class="py-3 px-4">Order ID</th>
                        <th class="py-3 px-4">Customer</th>
                        <th class="py-3 px-4">Items</th>
                        <th class="py-3 px-4">Total</th>
                        <th class="py-3 px-4">Date</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-t">
                        <td class="py-3 px-4">#1001</td>
                        <td class="py-3 px-4">Ahmed Hassan</td>
                        <td class="py-3 px-4">3 Dishes</td>
                        <td class="py-3 px-4">$32.50</td>
                        <td class="py-3 px-4">2025-05-27</td>
                        <td class="py-3 px-4">
                            <span class="text-green-600 font-medium">Completed</span>
                        </td>
                        <td class="py-3 px-4 space-x-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-t">
                        <td class="py-3 px-4">#1002</td>
                        <td class="py-3 px-4">Mona Saleh</td>
                        <td class="py-3 px-4">2 Dishes</td>
                        <td class="py-3 px-4">$22.00</td>
                        <td class="py-3 px-4">2025-05-27</td>
                        <td class="py-3 px-4">
                            <span class="text-yellow-600 font-medium">Pending</span>
                        </td>
                        <td class="py-3 px-4 space-x-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-t">
                        <td class="py-3 px-4">#1003</td>
                        <td class="py-3 px-4">Youssef Adel</td>
                        <td class="py-3 px-4">1 Dish</td>
                        <td class="py-3 px-4">$10.50</td>
                        <td class="py-3 px-4">2025-05-26</td>
                        <td class="py-3 px-4">
                            <span class="text-red-600 font-medium">Cancelled</span>
                        </td>
                        <td class="py-3 px-4 space-x-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

@endsection

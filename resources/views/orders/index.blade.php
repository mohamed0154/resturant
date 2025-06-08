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
                        <th class="py-3 px-4">Total Price</th>
                        <th class="py-3 px-4">Date</th>
                        <th class="py-3 px-4">Status</th>
                        @auth('admin')
                            <th class="py-3 px-4">Actions</th>
                        @endauth
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @forelse ($orders as $order)
                        <tr class="border-t">
                            <td class="py-3 px-4">#{{ $order->id }}</td>
                            <td class="py-3 px-4">{{ $order->user->full_name }}</td>
                            <td class="py-3 px-4">{{ $order->order_items_count }}</td>
                            <td class="py-3 px-4">${{ $order->total_price }}</td>
                            <td class="py-3 px-4">{{ $order->date }}</td>
                            <td class="py-3 px-4">
                                <span class="text-green-600 font-medium">{{ $order->status }}</span>
                            </td>
                            @auth('admin')
                                <td class="py-3 px-4 space-x-2 flex">
                                    <a href="{{ route('admin.orders.show', $order?->id) }}"
                                        class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</a>
                                    {{-- <a href="{{ route('admin.orders.destroy', $order?->id) }}"
                                        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</a> --}}
                                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                    </form>
                                </td>
                            @endauth
                        </tr>
                    @empty
                    @endforelse


                </tbody>
            </table>
        </div>
    </main>

@endsection

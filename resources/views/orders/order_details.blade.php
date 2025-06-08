@extends('master')
@section('title', 'home')
@section('content')


    <!-- Order Details -->
    <main class="max-w-3xl mx-auto p-6 mt-10 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold text-red-600 mb-4">Order #{{ $order?->id }} Details</h2>

        <!-- Summary -->
        <div class="mb-6 space-y-2 text-sm text-gray-700">
            <p><span class="font-semibold">Customer:</span> {{ $order?->user?->full_name }}</p>
            <p><span class="font-semibold">Date:</span> {{ explode(' ', $order?->created_at)[0] }}</p>
            <p><span class="font-semibold">Status:</span> <span
                    class="text-yellow-600 font-semibold">{{ $order?->status }}</span></p>
            <p><span class="font-semibold">Payment Method:</span> Stripe</p>
            <p><span class="font-semibold">Delivery Address:</span> 123 Nile Street, Cairo</p>
        </div>

        <!-- Items -->
        <div class="border-t border-b py-4 my-6">
            <h3 class="text-lg font-semibold mb-4">Ordered Items</h3>
            <ul class="space-y-4">
                @forelse ($order_items as $item)
                    <li class="flex justify-between items-center">
                        <div>
                            <p class="font-medium">{{ $item->dish->name }}</p>
                            <p class="text-sm text-gray-500">Quantity: {{ $item->quantity }}</p>
                        </div>
                        <p class="font-semibold">${{ $item->price }}</p>
                    </li>
                @empty
                @endforelse

            </ul>
        </div>

        <!-- Total -->
        <div class="text-right text-lg font-bold">
            Total: ${{ $order?->total_price }}
        </div>

        <!-- Buttons -->
        <div class="mt-8 flex justify-between flex-wrap gap-4">

            <div class="flex gap-4">
                {{-- <a href="edit-order.html?order_id=1002"
                    class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                    Edit Order
                </a> --}}
                {{-- <button onclick="confirmDelete()"
                    class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition">
                    Delete Order
                </button> --}}
                <form action="{{ route('admin.orders.destroy', $order?->id) }}" method="POST"
                    onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition">Delete</button>
                </form>
            </div>
        </div>
    </main>

@endsection

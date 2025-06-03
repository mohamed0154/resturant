@extends('master')
@section('title', 'Payment')
@section('content')
    <div class="w-full bg-white rounded-2xl shadow-xl p-8 space-y-8">
        <h2 class="text-2xl font-semibold text-gray-800">Checkout</h2>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Billing Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Billing Information</h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-indigo-200"
                            placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-indigo-200"
                            placeholder="john@example.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text" class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-indigo-200"
                            placeholder="123 Main St">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-indigo-200"
                            placeholder="New York">
                    </div>
                </form>
            </div>

            <!-- Payment Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Payment Details</h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Card Number</label>
                        <input type="text" class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-indigo-200"
                            placeholder="1234 5678 9012 3456">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Expiry Date</label>
                            <input type="text" class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-indigo-200"
                                placeholder="MM/YY">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">CVC</label>
                            <input type="text" class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-indigo-200"
                                placeholder="123">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="border-t pt-6">
            <div class="flex justify-between items-center mb-4">
                <span class="text-gray-600">Subtotal</span>
                <span class="font-medium">$99.00</span>
            </div>
            <div class="flex justify-between items-center mb-4">
                <span class="text-gray-600">Shipping</span>
                <span class="font-medium">$5.00</span>
            </div>
            <div class="flex justify-between items-center text-lg font-semibold">
                <span>Total</span>
                <span>$104.00</span>
            </div>
            <button class="mt-6 w-full bg-indigo-600 text-white py-3 rounded-xl hover:bg-indigo-700 transition">Pay
                Now</button>
        </div>
    </div>


@endsection

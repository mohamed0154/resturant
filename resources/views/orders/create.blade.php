@extends('master')
@section('title', 'make order')
@section('content')

    <!-- Order Form -->
    <section class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto max-w-3xl bg-white shadow-lg p-8 rounded-lg">
            <h2 class="text-3xl text-red-600 font-bold text-center mb-8">Place Your Order</h2>

            <form class="space-y-6">
                <!-- Customer Info -->
                <div>
                    <label class="block mb-2 font-semibold">Full Name</label>
                    <input type="text" placeholder="Your Name" required class="w-full border border-gray-300 p-3 rounded" />
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-2 font-semibold">Email</label>
                        <input type="email" placeholder="you@example.com" required
                            class="w-full border border-gray-300 p-3 rounded" />
                    </div>
                    <div>
                        <label class="block mb-2 font-semibold">Phone Number</label>
                        <input type="tel" placeholder="+1234567890" required
                            class="w-full border border-gray-300 p-3 rounded" />
                    </div>
                </div>

                <!-- Dish Selection -->
                <div>
                    <label class="block mb-2 font-semibold">Select Dish</label>
                    <select class="w-full border border-gray-300 p-3 rounded" required>
                        <option value="">-- Choose a Dish --</option>
                        <option>Grilled Steak - $24.99</option>
                        <option>Italian Pasta - $16.50</option>
                        <option>Caesar Salad - $10.99</option>
                    </select>
                </div>

                <!-- Quantity -->
                <div>
                    <label class="block mb-2 font-semibold">Quantity</label>
                    <input type="number" min="1" value="1" class="w-full border border-gray-300 p-3 rounded"
                        required />
                </div>

                <!-- Special Request -->
                <div>
                    <label class="block mb-2 font-semibold">Special Instructions (optional)</label>
                    <textarea rows="4" placeholder="Any allergies, preferences, etc."
                        class="w-full border border-gray-300 p-3 rounded"></textarea>
                </div>

                <!-- Submit -->
                <div class="text-center">
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded text-lg">Submit
                        Order</button>
                </div>
            </form>
        </div>
    </section>
@endsection

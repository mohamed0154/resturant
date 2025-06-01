<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit My Order | TasteBite</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold text-red-600">TasteBite</h1>
            <nav class="space-x-6 text-gray-700">
                <a href="index.html" class="hover:text-red-600">Home</a>
                <a href="orders.html" class="hover:text-red-600">My Orders</a>
                <a href="menu.html" class="hover:text-red-600">Menu</a>
            </nav>
        </div>
    </header>

    <!-- Edit Form -->
    <main class="max-w-3xl mx-auto p-6 mt-10 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold text-red-600 mb-6">Edit Your Order</h2>

        <form action="#" method="POST" class="space-y-6">

            <!-- Delivery Address -->
            <div>
                <label class="block font-semibold mb-1" for="address">Delivery Address</label>
                <input type="text" id="address" name="address" value="123 Nile Street, Cairo"
                    class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>

            <!-- Notes -->
            <div>
                <label class="block font-semibold mb-1" for="notes">Order Notes</label>
                <textarea id="notes" name="notes" rows="3"
                    class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                    placeholder="e.g., Please make it extra spicy.">Please deliver after 7 PM</textarea>
            </div>

            <!-- Items -->
            <div>
                <h3 class="text-lg font-semibold mb-2">Update Items</h3>
                <div class="space-y-4">

                    <!-- Item 1 -->
                    <div class="flex justify-between items-center border p-3 rounded-md">
                        <div>
                            <p class="font-medium">Grilled Chicken Shawarma</p>
                            <p class="text-sm text-gray-500">Price: $9.99</p>
                        </div>
                        <input type="number" min="0" value="2"
                            class="w-16 p-1 border rounded text-center" />
                    </div>

                    <!-- Item 2 -->
                    <div class="flex justify-between items-center border p-3 rounded-md">
                        <div>
                            <p class="font-medium">Classic Hummus</p>
                            <p class="text-sm text-gray-500">Price: $4.50</p>
                        </div>
                        <input type="number" min="0" value="1"
                            class="w-16 p-1 border rounded text-center" />
                    </div>

                    <!-- Item 3 -->
                    <div class="flex justify-between items-center border p-3 rounded-md">
                        <div>
                            <p class="font-medium">Fresh Mango Juice</p>
                            <p class="text-sm text-gray-500">Price: $3.50</p>
                        </div>
                        <input type="number" min="0" value="1"
                            class="w-16 p-1 border rounded text-center" />
                    </div>

                </div>
            </div>

            <!-- Total -->
            <div class="text-right font-bold text-lg pt-2">
                Total: $27.98
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center mt-6">
                <a href="order-details.html"
                    class="bg-gray-200 text-gray-800 px-6 py-2 rounded hover:bg-gray-300 transition">
                    Cancel
                </a>
                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                    Update Order
                </button>
            </div>
        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-6 mt-12">
        <p>&copy; 2025 TasteBite. All rights reserved.</p>
    </footer>

</body>

</html>

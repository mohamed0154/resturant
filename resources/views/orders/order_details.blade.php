<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Details | TasteBite</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

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

    <!-- Order Details -->
    <main class="max-w-3xl mx-auto p-6 mt-10 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold text-red-600 mb-4">Order #1002 Details</h2>

        <!-- Summary -->
        <div class="mb-6 space-y-2 text-sm text-gray-700">
            <p><span class="font-semibold">Customer:</span> Mona Saleh</p>
            <p><span class="font-semibold">Date:</span> 2025-05-27</p>
            <p><span class="font-semibold">Status:</span> <span class="text-yellow-600 font-semibold">Pending</span></p>
            <p><span class="font-semibold">Payment Method:</span> Cash on Delivery</p>
            <p><span class="font-semibold">Delivery Address:</span> 123 Nile Street, Cairo</p>
        </div>

        <!-- Items -->
        <div class="border-t border-b py-4 my-6">
            <h3 class="text-lg font-semibold mb-4">Ordered Items</h3>
            <ul class="space-y-4">
                <li class="flex justify-between items-center">
                    <div>
                        <p class="font-medium">Grilled Chicken Shawarma</p>
                        <p class="text-sm text-gray-500">Quantity: 2</p>
                    </div>
                    <p class="font-semibold">$9.99</p>
                </li>
                <li class="flex justify-between items-center">
                    <div>
                        <p class="font-medium">Classic Hummus</p>
                        <p class="text-sm text-gray-500">Quantity: 1</p>
                    </div>
                    <p class="font-semibold">$4.50</p>
                </li>
                <li class="flex justify-between items-center">
                    <div>
                        <p class="font-medium">Fresh Mango Juice</p>
                        <p class="text-sm text-gray-500">Quantity: 1</p>
                    </div>
                    <p class="font-semibold">$3.50</p>
                </li>
            </ul>
        </div>

        <!-- Total -->
        <div class="text-right text-lg font-bold">
            Total: $27.98
        </div>

        <!-- Buttons -->
        <div class="mt-8 flex justify-between flex-wrap gap-4">
            <a href="orders.html" class="bg-gray-200 text-gray-800 px-6 py-2 rounded hover:bg-gray-300 transition">
                Back to Orders
            </a>

            <div class="flex gap-4">
                <a href="edit-order.html?order_id=1002"
                    class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                    Edit Order
                </a>
                <button onclick="confirmDelete()"
                    class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition">
                    Delete Order
                </button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-6 mt-12">
        <p>&copy; 2025 TasteBite. All rights reserved.</p>
    </footer>

    <!-- Delete Confirmation Script -->
    <script>
        function confirmDelete() {
            if (confirm("Are you sure you want to delete this order?")) {
                // Simulate redirect or handle delete logic
                alert("Order deleted successfully.");
                window.location.href = "orders.html";
            }
        }
    </script>

</body>

</html>

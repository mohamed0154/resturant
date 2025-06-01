<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Orders | TasteBite</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold text-red-600">TasteBite</h1>
            <nav class="space-x-6 text-gray-700">
                <a href="index.html" class="hover:text-red-600">Home</a>
                <a href="menu.html" class="hover:text-red-600">Menu</a>
                <a href="#" class="text-red-600 font-semibold">My Orders</a>
            </nav>
        </div>
    </header>

    <!-- Orders Table -->
    <main class="max-w-5xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-red-600 mb-6">My Orders</h2>

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100 text-left text-sm font-semibold text-gray-700">
                    <tr>
                        <th class="px-6 py-3">Order ID</th>
                        <th class="px-6 py-3">Date</th>
                        <th class="px-6 py-3">Status</th>
                        <th class="px-6 py-3">Total</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                    <!-- Order 1 -->
                    <tr>
                        <td class="px-6 py-4 font-medium">#1002</td>
                        <td class="px-6 py-4">2025-05-27</td>
                        <td class="px-6 py-4 text-yellow-600 font-medium">Pending</td>
                        <td class="px-6 py-4 font-semibold">$27.98</td>
                        <td class="px-6 py-4">
                            <a href="order-details.html" class="text-blue-600 hover:underline">View</a>
                        </td>
                    </tr>

                    <!-- Order 2 -->
                    <tr>
                        <td class="px-6 py-4 font-medium">#1001</td>
                        <td class="px-6 py-4">2025-05-20</td>
                        <td class="px-6 py-4 text-green-600 font-medium">Completed</td>
                        <td class="px-6 py-4 font-semibold">$19.25</td>
                        <td class="px-6 py-4">
                            <a href="order-details.html" class="text-blue-600 hover:underline">View</a>
                        </td>
                    </tr>

                    <!-- Order 3 -->
                    <tr>
                        <td class="px-6 py-4 font-medium">#1000</td>
                        <td class="px-6 py-4">2025-05-15</td>
                        <td class="px-6 py-4 text-red-600 font-medium">Cancelled</td>
                        <td class="px-6 py-4 font-semibold">$12.50</td>
                        <td class="px-6 py-4">
                            <a href="order-details.html" class="text-blue-600 hover:underline">View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-6 mt-12">
        <p>&copy; 2025 TasteBite. All rights reserved.</p>
    </footer>

</body>

</html>

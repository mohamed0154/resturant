<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Category | TasteBite</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold text-red-600">TasteBite</h1>
            <nav class="space-x-6 text-gray-700">
                <a href="index.html" class="hover:text-red-600">Home</a>
                <a href="categories.html" class="hover:text-red-600">Categories</a>
                <a href="add-category.html" class="hover:text-red-600">Add Category</a>
            </nav>
        </div>
    </header>

    <!-- Edit Category Form -->
    <main class="max-w-xl mx-auto p-8 bg-white shadow-md rounded-lg mt-10">
        <h2 class="text-2xl font-bold text-red-600 mb-6 text-center">Edit Category</h2>

        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
            <!-- Category Name -->
            <div>
                <label class="block mb-2 text-sm font-medium">Category Name</label>
                <input type="text" name="name" value="Starters"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>

            <!-- Change Image -->
            <div>
                <label class="block mb-2 text-sm font-medium">Change Image</label>
                <input type="file" name="image"
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
                <p class="text-sm text-gray-500 mt-1">Current image shown below:</p>
                <img src="https://images.unsplash.com/photo-1585238342029-3f531f5b7c84?auto=format&fit=crop&w=300&q=80"
                    alt="Current Category Image" class="w-28 h-28 mt-2 rounded-md object-cover">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 transition">
                    Save Changes
                </button>
            </div>
        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 text-center mt-12">
        <p>&copy; 2025 TasteBite. All rights reserved.</p>
    </footer>

</body>

</html>

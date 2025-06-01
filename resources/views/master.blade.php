<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">


    <!-- Navbar -->
    @include('layouts.navbar')

    <div class="flex min-h-screen">
        {{-- Sidebar --}}
        @include('layouts.sidebar')

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
            {{-- <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-2xl font-bold text-red-600 mb-4">Welcome to TasteBite Admin Dashboard</h2>
                <p class="text-gray-700">Select a section from the sidebar to manage your restaurant.</p>
            </div> --}}
        </main>
    </div>
    @include('layouts.footer')
</body>

</html>

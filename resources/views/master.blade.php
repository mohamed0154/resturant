<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">





    {{-- Align Content --}}
    <div class="flex min-h-screen">
        {{-- Sidebar --}}
        @include('layouts.sidebar')
        <div class="flex-1">
            <!-- Navbar -->
            @include('layouts.navbar')
            <!-- Main Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </div>



    {{-- Footer --}}
    @include('layouts.footer')

    <!-- Include Alpine.js in your layout if not already -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>

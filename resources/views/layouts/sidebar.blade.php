<!-- Sidebar -->

@if (auth()->guard('admin')->check() || auth()->guard('web')->check())
    <aside class="w-64 bg-white shadow-lg hidden sm:block">
        <div class="p-6 border-b border-gray-200">
            <h1 class="text-2xl font-bold text-red-600">Logo</h1>
        </div>
        <nav class="p-4 space-y-2">
            @auth('admin')
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-red-100">Dashboard</a>
                <a href="{{ route('admin.dishes.create') }}" class="block px-4 py-2 rounded hover:bg-red-100">Add Dish</a>
                <a href="{{ route('admin.categories.create') }}" class="block px-4 py-2 rounded hover:bg-red-100">Add
                    Category</a>
                <a href="edit-order.html" class="block px-4 py-2 rounded hover:bg-red-100">Edit Order</a>
                <a href="{{ route('admin.orders.index') }}" class="block px-4 py-2 rounded hover:bg-red-100">All Orders</a>
            @endauth
            <a href="{{ route('users.dishes') }}" class="block px-4 py-2 rounded hover:bg-red-100">All Dishes</a>
            <a href="{{ route('users.categories') }}" class="block px-4 py-2 rounded hover:bg-red-100">Categories</a>
            <a href="{{ route('users.order.create') }}" class="block px-4 py-2 rounded hover:bg-red-100">Make Order</a>

            <a href="menu.html" class="block px-4 py-2 rounded hover:bg-red-100">Menu</a>

            @auth
                <a href="my-orders.html" class="block px-4 py-2 rounded hover:bg-red-100">My Orders</a>
            @endauth
            <form method="POST" action="{{ route('users.logout') }}">
                @csrf
                <button type="submit"
                    class="block px-4 py-2 text-red-600 font-semibold hover:bg-red-100">Logout</button>
            </form>
        </nav>
    </aside>
@endif

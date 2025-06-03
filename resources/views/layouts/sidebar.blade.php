<!-- Sidebar -->
@if (auth()->guard('admin')->check() || auth()->guard('web')->check())
    <aside class="w-64 bg-white shadow-lg hidden sm:block">
        <div class="p-6 border-b border-gray-200">
            <h1 class="text-2xl font-bold text-red-600">{{ __('sidebar.logo') }}</h1>
        </div>
        <nav class="p-4 space-y-2">
            @auth('admin')
                <a href="{{ route('admin.dashboard') }}"
                    class="block px-4 py-2 rounded hover:bg-red-100">{{ __('sidebar.dashboard') }}</a>
                <a href="{{ route('admin.dishes.create') }}"
                    class="block px-4 py-2 rounded hover:bg-red-100">{{ __('sidebar.add_dish') }}</a>
                <a href="{{ route('admin.categories.create') }}"
                    class="block px-4 py-2 rounded hover:bg-red-100">{{ __('sidebar.add_category') }}</a>

                <a href="{{ route('admin.orders.index') }}"
                    class="block px-4 py-2 rounded hover:bg-red-100">{{ __('sidebar.all_orders') }}</a>
            @endauth
            <a href="{{ route('users.dishes') }}"
                class="block px-4 py-2 rounded hover:bg-red-100">{{ __('sidebar.all_dishes') }}</a>
            <a href="{{ route('users.categories') }}"
                class="block px-4 py-2 rounded hover:bg-red-100">{{ __('sidebar.categories') }}</a>

            <a href="menu.html" class="block px-4 py-2 rounded hover:bg-red-100">{{ __('sidebar.menu') }}</a>
            @auth
                <a href="my-orders.html" class="block px-4 py-2 rounded hover:bg-red-100">{{ __('sidebar.my_orders') }}</a>
            @endauth
            <form method="POST" action="{{ route('users.logout') }}">
                @csrf
                <button type="submit" class="block px-4 py-2 text-red-600 font-semibold hover:bg-red-100">
                    {{ __('sidebar.logout') }}
                </button>
            </form>
        </nav>
    </aside>
@endif

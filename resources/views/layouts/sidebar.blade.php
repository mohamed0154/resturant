<!-- Sidebar -->
@if (auth()->guard('admin')->check() || auth()->guard('web')->check())
    <aside class="w-64 bg-white shadow-lg hidden sm:block">
        <div class="p-2 flex justify-center border-b border-gray-200">
            <img src="{{ asset('images/logo.png') }}" class="w-[150px] h-25 brightness-200 saturate-50" alt="">
        </div>
        <nav class="flex flex-col items-center justify-center gap-2 mt-3 text-center">
            @auth('admin')
                <a href="{{ route('admin.dashboard') }}"
                    class="block w-[90%]  py-2 rounded hover:bg-red-100">{{ __('sidebar.dashboard') }}</a>
                <a href="{{ route('admin.dishes.create') }}"
                    class="block w-[90%] py-2 rounded hover:bg-red-100">{{ __('sidebar.add_dish') }}</a>
                <a href="{{ route('admin.categories.create') }}"
                    class="block w-[90%] py-2 rounded hover:bg-red-100">{{ __('sidebar.add_category') }}</a>

                <a href="{{ route('admin.orders.index') }}"
                    class="block w-[90%] py-2 rounded hover:bg-red-100">{{ __('sidebar.all_orders') }}</a>
            @endauth
            <a href="{{ route('users.dishes') }}"
                class="block w-[90%] py-2 rounded hover:bg-red-100">{{ __('sidebar.all_dishes') }}</a>
            <a href="{{ route('users.categories') }}"
                class="block w-[90%] py-2 rounded hover:bg-red-100">{{ __('sidebar.categories') }}</a>

            <a href="menu.html" class="block w-[90%] py-2 rounded hover:bg-red-100">{{ __('sidebar.menu') }}</a>
            @auth
                <a href="{{ route('users.orders.show') }}"
                    class="block w-[90%] py-2 rounded hover:bg-red-100">{{ __('sidebar.my_orders') }}</a>
            @endauth
            <form method="POST" action="{{ route('users.logout') }}">
                @csrf
                <button type="submit" class="px-16 py-2 text-red-600 font-semibold hover:bg-red-100">
                    {{ __('sidebar.logout') }}
                </button>
            </form>
        </nav>
    </aside>
@endif

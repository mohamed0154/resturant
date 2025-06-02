{{-- <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center p-4">
        <h1 class="text-3xl font-bold text-red-600">TasteBite</h1>
        <nav class="space-x-6 text-gray-700">
            @if (auth('admin')->user() || auth()->user())
                <a href="#home" class="hover:text-red-600">Home</a>
                <a href="#about" class="hover:text-red-600">About</a>
                <a href="#menu" class="hover:text-red-600">Menu</a>
                <a href="#contact" class="hover:text-red-600">Contact</a>
            @else
                <a @if (request()->segment(1) == 'admin') href="{{ route('admin.login') }}"

                    @else
                     href="{{ route('login') }}" @endif
                    class="hover:text-red-600">
                    @if (request()->segment(1) == 'admin')
                        Login by Admin
                    @else
                        Login
                    @endif
                </a>

                @if (request()->segment(1) == 'users')
                    <a href="{{ route('register_view') }}" class="hover:text-red-600">register</a>
                @endif

            @endif
        </nav>
    </div>
</header> --}}

<!-- Main navigation container -->
<nav
    class="flex-no-wrap relative flex w-full items-center justify-between bg-zinc-50 py-2 shadow-dark-mild dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4">
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        <button
            class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
            type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
            <!-- Hamburger icon -->
            <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>

        <!-- Collapsible navigation container -->
        <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
            id="navbarSupportedContent1" data-twe-collapse-item>
            <!-- Logo -->
            <a class="mb-4 me-5 ms-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                href="#">
                <img src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp" style="height: 15px"
                    alt="TE Logo" loading="lazy" />
            </a>
            <!-- Left navigation links -->
            <ul class="list-style-none me-auto flex flex-col ps-0 lg:flex-row" data-twe-navbar-nav-ref>
                <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                    <!-- Dashboard link -->
                    <a class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="#" data-twe-nav-link-ref>Dashboard</a>
                </li>
                <!-- Team link -->
                <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                    <a class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="#" data-twe-nav-link-ref>Team</a>
                </li>
                <!-- Projects link -->
                <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                    <a class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="#" data-twe-nav-link-ref>Projects</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>

        <!-- Right elements -->
        {{-- Search --}}

        {{-- cart --}}
        <div class="relative flex items-center">
            @auth
                <!-- Icon -->
                <a class="me-4 text-neutral-600 dark:text-white" href="{{ route('users.carts.index') }}">
                    <span class="[&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                        </svg>
                    </span>
                </a>
            @endauth

            <!-- First dropdown container -->
            <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                <!-- First dropdown trigger -->
                <a class="me-4 flex items-center text-neutral-600 dark:text-white" href="#"
                    id="dropdownMenuButton1" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                    <!-- Dropdown trigger icon -->
                    <span class="[&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <!-- Notification counter -->
                    <span
                        class="absolute -mt-4 ms-2.5 rounded-full bg-danger px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white">1</span>
                </a>
                <!-- First dropdown menu -->
                <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                    aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                    <!-- First dropdown menu items -->
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Action</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Another action</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Something else here</a>
                    </li>
                </ul>
            </div>

            <!-- Include Alpine.js in your layout if not already -->
            <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

            <div x-data="{ open: false }" class="relative inline-block text-left">
                <!-- Trigger Button -->
                <button @click="open = !open"
                    class="inline-flex items-center gap-1 px-3 py-2 bg-white border rounded-lg shadow-sm hover:bg-gray-100 focus:outline-none">
                    <!-- Earth Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3c5.25 0 9 3.75 9 9s-3.75 9-9 9-9-3.75-9-9 3.75-9 9-9z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.5 12h19M12 2.5v19M4.21 4.21c5.87 5.87 9.71 5.87 15.58 0" />
                    </svg>
                    <span class="text-sm text-gray-700">Language</span>
                    <!-- Down Arrow -->
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown -->
                <ul x-show="open" @click.away="open = false"
                    class="absolute z-50 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg py-1">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>


            <!-- Second dropdown container -->
            <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                <!-- Second dropdown trigger -->
                <a class="flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                    href="#" id="dropdownMenuButton2" role="button" data-twe-dropdown-toggle-ref
                    aria-expanded="false">
                    <!-- User avatar -->
                    <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full"
                        style="height: 25px; width: 25px" alt="" loading="lazy" />
                </a>
                <!-- Second dropdown menu -->
                <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                    aria-labelledby="dropdownMenuButton2" data-twe-dropdown-menu-ref>
                    <!-- Second dropdown menu items -->
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Action</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Another action</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#" data-twe-dropdown-item-ref>Something else here</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
</nav>

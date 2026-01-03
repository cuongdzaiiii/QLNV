<header class="bg-white border-b">
    <div class="h-16 px-4 md:px-6 flex items-center justify-between">
        <div class="flex items-center gap-3">
            {{-- Mobile button --}}
            <button id="btnSidebar" class="md:hidden p-2 rounded hover:bg-gray-100">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="font-bold text-gray-800">
                @yield('page_heading', 'Dashboard')
            </div>
        </div>

        <div class="flex items-center gap-3">
            <div class="text-sm text-gray-600 hidden sm:block">
                Xin chào,
                <span class="font-semibold">
                    {{ auth()->check() ? (auth()->user()->full_name ?? auth()->user()->name) : 'Guest' }}
                </span>
            </div>

            @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="px-3 py-2 rounded bg-gray-800 text-white hover:bg-gray-900 text-sm">
                    <i class="fa-solid fa-right-from-bracket mr-1"></i> Đăng xuất
                </button>
            </form>
            @endauth
        </div>
    </div>
</header>

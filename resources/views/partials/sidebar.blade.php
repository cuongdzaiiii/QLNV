{{-- Overlay mobile --}}
<div id="sidebarOverlay" class="hidden fixed inset-0 bg-black/40 z-30 md:hidden"></div>

<aside id="sidebar"
       class="fixed md:static z-40 md:z-auto inset-y-0 left-0 w-64 bg-white border-r
              transform -translate-x-full md:translate-x-0 transition duration-200 ease-in-out">

    <div class="h-16 flex items-center px-4 border-b">
        <div class="flex items-center gap-2">
            <div class="w-9 h-9 rounded-lg bg-orange-500 text-white flex items-center justify-center font-bold">
                QN
            </div>
            <div>
                <div class="font-bold text-gray-800 leading-tight">QLNV</div>
                <div class="text-xs text-gray-500">Admin Panel</div>
            </div>
        </div>
    </div>

    <nav class="p-3 space-y-1">
        {{-- Dashboard --}}
        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100
                {{ request()->routeIs('dashboard') ? 'bg-gray-100 font-semibold' : '' }}">
            <i class="fa-solid fa-gauge"></i>
            <span>Dashboard</span>
        </a>

        <div class="pt-2 pb-1 text-xs font-semibold text-gray-500 uppercase px-3">Quản lý</div>

        {{-- Nhân viên --}}
        <a href=""
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100
                {{ request()->routeIs('employees.*') ? 'bg-gray-100 font-semibold' : '' }}">
            <i class="fa-solid fa-users"></i>
            <span>Nhân viên</span>
        </a>

        {{-- Phòng ban --}}
        <a href=""
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100
                {{ request()->routeIs('departments.*') ? 'bg-gray-100 font-semibold' : '' }}">
            <i class="fa-solid fa-building"></i>
            <span>Phòng ban</span>
        </a>

        {{-- Chức vụ / Role --}}
        <a href=""
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100
                {{ request()->routeIs('roles.*') ? 'bg-gray-100 font-semibold' : '' }}">
            <i class="fa-solid fa-id-badge"></i>
            <span>Chức vụ</span>
        </a>

        <div class="pt-2 pb-1 text-xs font-semibold text-gray-500 uppercase px-3">Lương</div>

        <a href=""
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100
                {{ request()->routeIs('timesheets.*') ? 'bg-gray-100 font-semibold' : '' }}">
            <i class="fa-solid fa-calendar-check"></i>
            <span>Chấm công</span>
        </a>

        <a href=""
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100
                {{ request()->routeIs('payrolls.*') ? 'bg-gray-100 font-semibold' : '' }}">
            <i class="fa-solid fa-file-invoice-dollar"></i>
            <span>Bảng lương</span>
        </a>

        <div class="pt-2 pb-1 text-xs font-semibold text-gray-500 uppercase px-3">Báo cáo</div>

        <a href=""
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100
                {{ request()->routeIs('reports.*') ? 'bg-gray-100 font-semibold' : '' }}">
            <i class="fa-solid fa-chart-line"></i>
            <span>Thống kê lương</span>
        </a>
    </nav>
</aside>

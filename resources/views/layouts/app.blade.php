<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'QLNV')</title>

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome (icon) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    @stack('head')
</head>

<body class="bg-gray-100">
<div class="min-h-screen flex">

    {{-- Sidebar --}}
    @include('partials.sidebar')

    <div class="flex-1 flex flex-col">

        {{-- Header --}}
        @include('partials.header')

        {{-- Content --}}
        <main class="p-4 md:p-6">
            @yield('content')
        </main>
    </div>
</div>

@stack('scripts')

<script>
    // Toggle sidebar mobile
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('btnSidebar');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        }
        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }

        if (btn) btn.addEventListener('click', openSidebar);
        if (overlay) overlay.addEventListener('click', closeSidebar);
    });
</script>
</body>
</html>

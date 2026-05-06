<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Admin Dashboard' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/css/style.css','resources/js/app.js'])
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand" id="sidebarToggle">
            🛡 Admin Panel
        </div>
        <<div class="navbar-right">
    <span class="user-name">{{ Auth::user()->name ?? 'Admin' }}</span>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

    </nav>

    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-menu">
            <li><a href="{{ route('admin.home') }}">🏠 Overview</a></li>
            <li><a href="{{ route('records') }}">📋 Records</a></li>
            <li><a href="{{ route('adoption') }}">❤️ Adoption Management</a></li>
            <li><a href="{{ route('incident.center') }}">📊 Reports & Analytics</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main id="mainContent" class="main-content p-4">
        @yield('content')
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sidebar = document.getElementById("sidebar");
            const main = document.getElementById("mainContent");
            const toggle = document.getElementById("sidebarToggle");

            toggle.addEventListener("click", function () {
                sidebar.classList.toggle("collapsed");
                main.classList.toggle("expanded");
            });
        });
    </script>
</body>
</html>

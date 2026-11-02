<nav id="sidebarMenu" style="width: 260px; position: fixed; top: 0; bottom: 0; left: 0;" class="bg-dark text-white p-3">
    <div class="pb-3 mb-3 border-bottom border-secondary d-flex align-items-center">
        <span class="me-2">⚡</span>
        <span class="fw-bold text-white fs-5">Volt Overview</span>
    </div>

    <ul class="nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ url('/home') }}" class="sidebar-item-link {{ request()->is('home') ? 'active' : '' }}">
                <span class="me-2">📊</span>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pelanggan.index') }}" class="sidebar-item-link {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
                <span class="me-2">👥</span>
                <span class="fw-bold">Pelanggan</span>
            </a>
        </li>
        {{-- TAMBAHKAN KODE MENU USER DI SINI --}}
        <li class="nav-item">
            <a href="{{ route('user.index') }}" class="sidebar-item-link {{ request()->routeIs('user.*') ? 'active' : '' }}">
                <span class="me-2">👤</span>
                <span class="fw-bold">User</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="sidebar-item-link justify-content-between">
                <div class="d-flex align-items-center">
                    <span class="me-2">📚</span>
                    <span>Documentation</span>
                </div>
                <span class="badge bg-secondary text-dark" style="font-size: 0.7rem;">v1.4</span>
            </a>
        </li>
    </ul>
</nav>

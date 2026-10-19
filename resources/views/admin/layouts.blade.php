<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Volt Overview</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap & Volt CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="https://cdn.jsdelivr.net/npm/@themesberg/volt-bootstrap-5-dashboard@1.4.1/css/volt.min.css" rel="stylesheet">

    <style>
        svg, img {
            max-width: 1.25rem !important;
            max-height: 1.25rem !important;
            vertical-align: middle;
        }
        .sidebar-item-link {
            color: #9ca3af !important;
            text-decoration: none;
            padding: 0.5rem 0.75rem;
            display: flex;
            align-items: center;
            border-radius: 0.375rem;
        }
        .sidebar-item-link:hover, .sidebar-item-link.active {
            color: #ffffff !important;
            background-color: #1f2937;
        }
    </style>
</head>

<body style="background-color: #f2f4f6;">

    <!-- Sidebar Navigation -->
    <nav id="sidebarMenu" style="width: 260px; position: fixed; top: 0; bottom: 0; left: 0; z-index: 100; background-color: #111827; padding: 1.5rem 1rem;">
        <div class="pb-3 mb-3 border-bottom border-secondary d-flex align-items-center">
            <span class="me-2">⚡</span>
            <span class="fw-bold text-white fs-5">Volt Overview</span>
        </div>

        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a href="{{ url('/home') }}" class="sidebar-item-link">
                    <span class="me-2">📊</span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pelanggan.index') }}" class="sidebar-item-link active">
                    <span class="me-2">👥</span>
                    <span class="fw-bold">Pelanggan</span>
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

    <!-- Main Content Area -->
    <main style="margin-left: 260px; padding: 1.5rem 2rem; min-height: 100vh;">
        <!-- Topbar -->
        <nav class="d-flex justify-content-between align-items-center mb-4">
            <div class="bg-white rounded shadow-sm px-3 py-1 d-flex align-items-center" style="width: 250px;">
                <span class="me-2 text-muted">🔍</span>
                <input type="text" class="form-control border-0 shadow-none p-0" placeholder="Search">
            </div>
            <div class="d-flex align-items-center gap-2 fw-bold text-dark">
                <img src="https://ui-avatars.com/api/?name=Bonnie+Green&background=0D8ABC&color=fff" class="rounded-circle" style="width: 32px; height: 32px;" alt="Avatar">
                <span>Bonnie Green</span>
            </div>
        </nav>

        <!-- Main View Content -->
        @yield('content')

        <!-- Footer -->
        <footer class="bg-white rounded shadow-sm p-4 mt-5 d-flex justify-content-between text-muted fs-7">
            <div>© 2019- Themesberg</div>
            <div class="d-flex gap-3">
                <span>About</span>
                <span>Themes</span>
                <span>Blog</span>
                <span>Contact</span>
            </div>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

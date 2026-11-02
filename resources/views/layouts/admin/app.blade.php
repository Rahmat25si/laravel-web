<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.css')
</head>

<body style="background-color: #f2f4f6;">

    @include('layouts.admin.sidebar')

    <main style="margin-left: 260px; padding: 1.5rem 2rem; min-height: 100vh;">

        @include('layouts.admin.header')

        @yield('content')

        @include('layouts.admin.footer')

    </main>

    @include('layouts.admin.js')

</body>

</html>

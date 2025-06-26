<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- إضافة ستايلات Bootstrap أو أي مكتبة CSS تستخدمها -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('page-style')
</head>
<body>
    <!-- هيدر الصفحة -->
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/logout') }}">Logout</a></li>
            </ul>
        </nav>
    </header>

    <!-- محتوى الصفحة -->
    <main>
        @yield('content')
    </main>

    <!-- سكريبتات -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>

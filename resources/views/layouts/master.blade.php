<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>@yield('title')</title>
    <!-- Add your CSS and JS files here -->
</head>
<body>
    @include('layouts.navbar')

    <main class="l-main">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>
</html>
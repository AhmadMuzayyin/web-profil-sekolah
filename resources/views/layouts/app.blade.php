<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'SDN Ketawang Karay - Sekolah Dasar Negeri yang berkualitas dengan pendidikan terbaik untuk generasi masa depan.')">
    <meta name="keywords" content="SDN Ketawang Karay, Sekolah Dasar, Pendidikan, Sekolah Negeri">
    <meta name="author" content="SDN Ketawang Karay">

    <meta property="og:title" content="@yield('title', 'SDN Ketawang Karay')">
    <meta property="og:description" content="@yield('meta_description', 'SDN Ketawang Karay - Sekolah Dasar Negeri yang berkualitas')">
    <meta property="og:type" content="website">

    <title>@yield('title', 'SDN Ketawang Karay')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <x-navbar />

    <main class="min-h-screen">
        @yield('content')
    </main>

    <x-footer />

    @stack('scripts')
</body>

</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - CEO Online</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900 flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-200 flex flex-col hidden md:flex">
        <div class="h-16 flex items-center px-6 border-b border-gray-200">
            <span class="text-primary font-bold text-xl tracking-tight">CEO Admin</span>
        </div>
        <nav class="flex-1 p-4 space-y-1">
            <a href="{{ route('admin.posts.index') }}" class="flex items-center gap-3 px-3 py-2 bg-primary/10 text-primary rounded-lg font-medium transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                Blog (Marketing)
            </a>
            <a href="/" target="_blank" class="flex items-center gap-3 px-3 py-2 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                Ver sitio web
            </a>
        </nav>
        <div class="p-4 border-t border-gray-200">
            <form method="POST" action="">
                @csrf
                <button type="submit" class="w-full text-left px-3 py-2 text-gray-600 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    Cerrar sesión
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden">
        <!-- Top header -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 shrink-0">
            <h1 class="text-xl font-semibold text-gray-800">@yield('header', 'Panel de Administración')</h1>
            <div class="flex items-center">
                <span class="text-sm text-gray-500">Admin</span>
            </div>
        </header>

        <!-- Content -->
        <div class="flex-1 overflow-auto bg-gray-50 p-6">
            @if(session('success'))
            <div class="mb-6 bg-green-50 text-green-700 p-4 rounded-lg border border-green-200 flex items-center gap-3">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                {{ session('success') }}
            </div>
            @endif

            @yield('content')
        </div>
    </main>
</body>
</html>

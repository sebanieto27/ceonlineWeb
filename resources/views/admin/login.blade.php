<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Administrador - CEO Online</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900 flex items-center justify-center min-h-screen">

    <div class="max-w-md w-full px-4 sm:px-6">
        <div class="text-center mb-10">
            <span class="inline-flex items-center justify-center bg-primary text-white w-12 h-12 rounded-xl mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            </span>
            <h1 class="text-2xl font-bold text-gray-900">CEO Online Admin</h1>
            <p class="text-gray-500 mt-2">Plataforma de gestión de contenidos</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                    <input type="password" id="password" name="password" required
                           class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    @error('password')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>
                
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded border-gray-300 text-primary shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <span class="text-sm text-gray-600">Recordarme</span>
                    </label>
                </div>
                
                <button type="submit" class="w-full py-2.5 px-4 bg-primary text-white rounded-lg hover:bg-dark font-medium transition-colors shadow-sm">
                    Ingresar
                </button>
            </form>
        </div>
        
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-primary transition-colors flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Volver al sitio web principal
            </a>
        </div>
    </div>

</body>
</html>

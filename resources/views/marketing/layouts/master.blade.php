<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- SEO Meta --}}
    <title>@yield('title', 'CEO Online - Gestión Integral de Consorcios')</title>
    <meta name="description" content="@yield('description', 'La plataforma más completa para gestionar consorcios. Expensas, pagos, comunicación, reportes y más. Prueba gratis.')">
    <meta name="keywords" content="gestión consorcios, expensas, administración edificios, CEO Online">
    <meta name="author" content="CEO Online">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'CEO Online - Gestión Integral de Consorcios')">
    <meta property="og:description" content="@yield('og_description', 'La plataforma más completa para gestionar consorcios.')">
    <meta property="og:image" content="@yield('og_image', asset('logo/logo-ceonline.png'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="CEO Online">
    <meta property="og:locale" content="es_AR">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'CEO Online - Gestión Integral de Consorcios')">
    <meta name="twitter:description" content="@yield('og_description', 'La plataforma más completa para gestionar consorcios.')">
    <meta name="twitter:image" content="@yield('og_image', asset('logo/logo-ceonline.png'))">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('logo/logo-ceonline.png') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Schema.org --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "CEO Online",
        "url": "https://ceonline.com.ar",
        "logo": "{{ asset('logo/logo-ceonline.png') }}",
        "description": "Plataforma integral de gestión de consorcios",
        "contactPoint": {
            "@@type": "ContactPoint",
            "contactType": "customer service",
            "availableLanguage": "Spanish"
        },
        "sameAs": []
    }
    </script>
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Product",
        "name": "CEO Online",
        "description": "Plataforma integral de gestión de consorcios. Expensas, pagos, comunicación y más.",
        "brand": { "@@type": "Brand", "name": "CEO Online" },
        "offers": {
            "@@type": "AggregateOffer",
            "priceCurrency": "ARS",
            "availability": "https://schema.org/InStock"
        }
    }
    </script>

    @yield('head')
</head>
<body class="min-h-screen flex flex-col overflow-x-hidden">
    {{-- Navbar --}}
    @include('marketing.components.navbar')

    {{-- Main Content --}}
    <main class="flex-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('marketing.components.footer')

    {{-- Flash Messages --}}
    @if(session('success'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-4"
         class="fixed bottom-6 right-6 z-50 bg-success text-white px-6 py-4 rounded-xl shadow-lg max-w-md">
        <div class="flex items-center gap-3">
            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <p class="font-medium">{{ session('success') }}</p>
            <button @click="show = false" class="ml-auto text-white/80 hover:text-white">&times;</button>
        </div>
    </div>
    @endif
</body>
</html>

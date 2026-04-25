@php
    $__pageMeta = \App\Models\PageMeta::forRoute(\Illuminate\Support\Facades\Route::currentRouteName() ?? '');
@endphp
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- SEO Meta (overrideable from admin SEO Manager) --}}
    <title>{{ $__pageMeta?->meta_title ?? View::yieldContent('title', 'CEO Online - Gestión Integral de Consorcios') }}</title>
    <meta name="description" content="{{ $__pageMeta?->meta_description ?? View::yieldContent('description', 'La plataforma más completa para gestionar consorcios. Expensas, pagos, comunicación, reportes y más. Prueba gratis.') }}">
    <meta name="keywords" content="{{ $__pageMeta?->meta_keywords ?? View::yieldContent('keywords', 'gestión consorcios Argentina, software administración edificios, expensas automáticas, CEO Online') }}">
    <meta name="author" content="CEO Online">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <link rel="canonical" href="{{ request()->url() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $__pageMeta?->meta_title ?? View::yieldContent('og_title', 'CEO Online - Gestión Integral de Consorcios') }}">
    <meta property="og:description" content="{{ $__pageMeta?->meta_description ?? View::yieldContent('og_description', 'La plataforma más completa para gestionar consorcios.') }}">
    <meta property="og:image" content="{{ $__pageMeta?->og_image ?? View::yieldContent('og_image', asset('logo/logo-ceonline.png')) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="CEO Online">
    <meta property="og:locale" content="es_AR">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $__pageMeta?->meta_title ?? View::yieldContent('og_title', 'CEO Online - Gestión Integral de Consorcios') }}">
    <meta name="twitter:description" content="{{ $__pageMeta?->meta_description ?? View::yieldContent('og_description', 'La plataforma más completa para gestionar consorcios.') }}">
    <meta name="twitter:image" content="@yield('og_image', asset('logo/logo-ceonline.png'))">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('logo/logo-ceonline2.png') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"></noscript>

    {{-- Preload critical logo --}}
    <link rel="preload" as="image" type="image/webp" href="{{ asset('logo/logo-ceonline.webp') }}">

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

    {{-- Tracking Scripts (head) --}}
    @include('marketing.components.tracking-scripts')

    {{-- SEO Manager custom head --}}
    @if($__pageMeta?->custom_head)
    {!! $__pageMeta->custom_head !!}
    @endif

    @yield('head')
</head>
<body class="min-h-screen flex flex-col overflow-x-hidden">
    {{-- Tracking Scripts (body) --}}
    @include('marketing.components.tracking-body')

    {{-- Dynamic Banners --}}
    @include('marketing.components.banners')

    {{-- Navbar --}}
    @include('marketing.components.navbar')

    {{-- Main Content --}}
    <main class="flex-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('marketing.components.footer')

    {{-- WhatsApp Floating Button --}}
    <style>
        @keyframes wa-shake {
            0%, 88%, 100% { transform: rotate(0deg); }
            90%            { transform: rotate(-7deg); }
            92%            { transform: rotate(7deg); }
            94%            { transform: rotate(-4deg); }
            96%            { transform: rotate(4deg); }
            98%            { transform: rotate(-1deg); }
        }
        .wa-btn {
            background-color: #25D366;
            animation: wa-shake 10s ease-in-out 3s infinite;
            transform-origin: center;
        }
        .wa-btn:hover {
            background-color: #1ebe5d;
            animation-play-state: paused;
            transform: scale(1.1);
        }
        .wa-ring {
            background-color: #25D366;
        }
    </style>
    @php
        $waEnabled = \App\Models\SiteSetting::get('whatsapp_enabled', '1');
        $waNumber  = \App\Models\SiteSetting::get('whatsapp_number', '');
        $waMessage = \App\Models\SiteSetting::get('whatsapp_message', '¡Hola! Quiero más información sobre CEO Online.');
    @endphp
    @if($waEnabled === '1' && $waNumber)
    <a href="https://wa.me/{{ $waNumber }}?text={{ urlencode($waMessage) }}"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Contactar por WhatsApp"
       class="wa-btn fixed bottom-6 right-6 z-50 flex items-center justify-center w-14 h-14 rounded-full shadow-lg transition-all duration-300 group"
       x-data
       x-show="true"
       x-transition:enter="transition ease-out duration-500 delay-1000"
       x-transition:enter-start="opacity-0 scale-75"
       x-transition:enter-end="opacity-100 scale-100">
        {{-- Pulse ring --}}
        <span class="wa-ring absolute inset-0 rounded-full animate-ping opacity-30 pointer-events-none"></span>
        {{-- WhatsApp SVG icon --}}
        <svg style="color:#ffffff" class="w-7 h-7 relative z-10" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.570-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        {{-- Tooltip --}}
        <span class="absolute right-16 bg-slate-900 text-white text-xs font-bold px-3 py-1.5 rounded-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none shadow-lg">
            Hablanos por WhatsApp
        </span>
    </a>
    @endif

    {{-- Exit Intent Popup --}}
    <div x-data="{
            open: false,
            sent: false,
            email: '',
            error: '',
            loading: false,
            init() {
                if (localStorage.getItem('exit_popup_dismissed')) return;
                document.addEventListener('mouseleave', (e) => {
                    if (e.clientY < 0 && !this.open && !localStorage.getItem('exit_popup_dismissed')) {
                        this.open = true;
                    }
                });
            },
            dismiss() {
                this.open = false;
                localStorage.setItem('exit_popup_dismissed', Date.now());
            },
            async submit() {
                this.error = '';
                if (!this.email || !this.email.includes('@')) {
                    this.error = 'Ingresá un email válido.';
                    return;
                }
                this.loading = true;
                try {
                    const res = await fetch('{{ route('newsletter') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({ email: this.email }),
                    });
                    if (res.ok || res.status === 302) {
                        this.sent = true;
                        localStorage.setItem('exit_popup_dismissed', Date.now());
                    } else {
                        const data = await res.json().catch(() => null);
                        this.error = data?.errors?.email?.[0] || 'Ocurrió un error. Intentá de nuevo.';
                    }
                } catch {
                    this.error = 'Error de conexión. Intentá de nuevo.';
                } finally {
                    this.loading = false;
                }
            }
        }"
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak
        class="fixed inset-0 z-[100] flex items-center justify-center bg-black/50 backdrop-blur-sm p-4"
        @keydown.escape.window="dismiss()">

        <div @click.outside="dismiss()"
             class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 relative"
             x-transition:enter="transition ease-out duration-300 delay-100"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0">

            <button @click="dismiss()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-2xl leading-none">&times;</button>

            <template x-if="!sent">
                <div>
                    <div class="text-center mb-6">
                        <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">¡No te vayas sin esto!</h3>
                        <p class="text-gray-600 mt-2 text-sm">Recibí tips exclusivos sobre gestión de consorcios y novedades de CEO Online. Sin spam, solo contenido útil.</p>
                    </div>
                    <div class="space-y-3">
                        <input x-model="email" type="email" placeholder="Tu mejor email" @keydown.enter="submit()"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        <p x-show="error" x-text="error" class="text-red-500 text-sm"></p>
                        <button @click="submit()" :disabled="loading"
                                class="w-full bg-primary hover:bg-primary-dark text-white font-semibold py-3 rounded-xl transition-colors disabled:opacity-50">
                            <span x-show="!loading">Suscribirme gratis</span>
                            <span x-show="loading">Enviando...</span>
                        </button>
                    </div>
                    <p class="text-center text-xs text-gray-400 mt-3">Podés cancelar cuando quieras.</p>
                </div>
            </template>

            <template x-if="sent">
                <div class="text-center py-4">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">¡Listo!</h3>
                    <p class="text-gray-600 mt-2">Te suscribiste correctamente. Te mantendremos informado.</p>
                    <button @click="dismiss()" class="mt-4 text-primary font-semibold hover:underline">Cerrar</button>
                </div>
            </template>
        </div>
    </div>

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
            <button @click="show = false" class="ml-auto text-white hover:text-white/80">&times;</button>
        </div>
    </div>
    @endif
</body>
</html>

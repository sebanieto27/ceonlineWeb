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
    <meta name="keywords" content="gestión consorcios, expensas, administración edificios, CEO Online">
    <meta name="author" content="CEO Online">
    <link rel="canonical" href="{{ url()->current() }}">

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

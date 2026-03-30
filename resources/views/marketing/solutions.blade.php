@extends('marketing.layouts.master')

@section('title', 'Soluciones - CEO Online')
@section('description', 'Soluciones adaptadas a cada tipo de propiedad: edificios residenciales, centros comerciales, edificios corporativos y pequeñas administraciones.')

@section('content')

{{-- Page Header --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-32 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-2 bg-secondary/10 text-secondary rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
            Verticales de Negocio
        </span>
        <h1 class="text-4xl lg:text-7xl font-black text-text-primary mt-8 leading-[1.05] tracking-tight max-w-4xl mx-auto">
            Una solución diseñada para cada estructura
        </h1>
        <p class="text-text-secondary text-xl lg:text-2xl mt-8 max-w-2xl mx-auto font-medium leading-relaxed">
            Desde pequeños edificios hasta complejos barrios privados, CEO Online ofrece la flexibilidad que necesitás para escalar tu administración.
        </p>
    </div>
</section>

{{-- Solutions Detail --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-32 lg:space-y-48">

        {{-- Edificios Residenciales --}}
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="animate-fade-in-left">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">Residencial</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-8">El estándar de oro para edificios de vivienda</h2>
                <div class="space-y-6">
                    <p class="text-lg text-text-secondary font-medium leading-relaxed">
                        Nuestra solución más robusta, diseñada para optimizar la convivencia y las finanzas de consorcios residenciales. Automatizá todo el ciclo operativo.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4 mt-8">
                        @foreach(['Expensas automáticas', 'Portal del propietario', 'Chat en tiempo real', 'Reserva de amenities'] as $feature)
                        <div class="flex items-center gap-3 text-text-primary font-bold">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                            {{ $feature }}
                        </div>
                        @endforeach
                    </div>
                    <a href="{{ route('demo') }}" class="btn-primary mt-12 inline-flex !py-4 !px-8">Empezar ahora</a>
                </div>
            </div>
            <div class="relative w-full flex items-center justify-center animate-slide-in-right">
                <div class="relative w-full aspect-square max-w-md overflow-hidden rounded-2xl shadow-2xl border border-border-light bg-surface group">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ asset('videos/placeholders/feature1.webm') }}"></video>
                </div>
            </div>
        </div>

        {{-- Centros Comerciales --}}
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="lg:order-2 animate-fade-in-right">
                <span class="text-secondary font-black uppercase tracking-widest text-sm mb-4 block">Comercial & Corporativo</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-8">Gestión compleja para centros comerciales</h2>
                <div class="space-y-6">
                    <p class="text-lg text-text-secondary font-medium leading-relaxed">
                        Control total de locatarios, proveedores y facturación centralizada. Ideal para administraciones que manejan locales, oficinas y centros de logística.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4 mt-8">
                        @foreach(['Control de locatarios', 'Facturación centralizada', 'Multi-torre', 'Dashboards ejecutivos'] as $feature)
                        <div class="flex items-center gap-3 text-text-primary font-bold">
                            <span class="w-1.5 h-1.5 bg-secondary rounded-full"></span>
                            {{ $feature }}
                        </div>
                        @endforeach
                    </div>
                    <a href="{{ route('demo') }}" class="btn-primary-outline mt-12 inline-flex !py-4 !px-8">Solicitar Demo</a>
                </div>
            </div>
            <div class="lg:order-1 relative w-full flex items-center justify-center animate-slide-in-left">
                <div class="relative w-full aspect-square max-w-md overflow-hidden rounded-2xl shadow-2xl border border-border-light bg-surface group">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ asset('videos/placeholders/feature2.webm') }}"></video>
                </div>
            </div>
        </div>

        {{-- Pequeñas Administraciones --}}
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="animate-fade-in-left">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">Emergentes</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-8">Escale con nosotros desde el primer día</h2>
                <div class="space-y-6">
                    <p class="text-lg text-text-secondary font-medium leading-relaxed">
                        Todo el poder de CEO Online con un esquema de precios que se ajusta a administraciones en crecimiento. Sin costos ocultos ni compromisos a largo plazo.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4 mt-8">
                        @foreach(['Setup ultra rápido', 'Soporte 24/7 incluido', 'Precio por unidad', 'Sin costo de entrada'] as $feature)
                        <div class="flex items-center gap-3 text-text-primary font-bold">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                            {{ $feature }}
                        </div>
                        @endforeach
                    </div>
                    <a href="{{ route('pricing') }}" class="btn-primary mt-12 inline-flex !py-4 !px-8">Ver Planes</a>
                </div>
            </div>
            <div class="relative w-full flex items-center justify-center animate-slide-in-right">
                <div class="relative w-full aspect-square max-w-md overflow-hidden rounded-2xl shadow-2xl border border-border-light bg-surface group">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ asset('videos/placeholders/feature3.webm') }}"></video>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

@endsection

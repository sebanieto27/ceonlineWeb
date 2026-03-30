@extends('marketing.layouts.master')

@section('title', 'Características - CEO Online')
@section('description', 'Descubrí todas las funciones de CEO Online: expensas automáticas, portal del propietario, chat en tiempo real, reportes y más.')

@section('content')

{{-- Page Header --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-32 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
            Plataforma Integral
        </span>
        <h1 class="text-4xl lg:text-7xl font-black text-text-primary mt-8 leading-[1.05] tracking-tight max-w-4xl mx-auto">
            El sistema más potente para Administradores
        </h1>
        <p class="text-text-secondary text-xl lg:text-2xl mt-8 max-w-2xl mx-auto font-medium leading-relaxed">
            Combinamos software de gestión de última generación con servicios integrados de imprenta, ofreciendo una solución que ningún otro competidor puede igualar.
        </p>
    </div>
</section>

{{-- Detailed Modules (Zig-Zag) --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-32 lg:space-y-48">

        {{-- Liquidaciones & Gastos --}}
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="animate-fade-in-up">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">Finanzas & Automatización</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-8">Liquidaciones inteligentes sin errores manuallys</h2>
                <div class="space-y-6">
                    <p class="text-lg text-text-secondary font-medium leading-relaxed">
                        Automatizá el cálculo de expensas <span class="text-text-primary font-bold">ordinarias y extraordinarias</span>. Nuestra plataforma distribuye los gastos según coeficientes personalizados, genera facturas y procesa pagos automáticamente.
                    </p>
                    <ul class="space-y-4 text-black font-bold">
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                            Gestión de Gastos Generales y Particulares
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                            Prorrateos automatizados por coeficiente
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                            Generación masiva de comprobantes PDF
                        </li>
                    </ul>
                </div>
            </div>
            <div class="relative w-full flex items-center justify-center animate-slide-in-right">
                <div class="relative w-full aspect-video overflow-hidden rounded-2xl shadow-2xl border border-border-light bg-surface group">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ asset('videos/placeholders/feature1.webm') }}"></video>
                </div>
            </div>
        </div>

        {{-- Proveedores & Caja --}}
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="lg:order-2 animate-fade-in-up">
                <span class="text-secondary font-black uppercase tracking-widest text-sm mb-4 block">Tesorería & Proveedores</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-8">Caja real y control de proveedores</h2>
                <div class="space-y-6">
                    <p class="text-lg text-text-secondary font-medium leading-relaxed">
                        Llevá un control estricto de la caja y los movimientos financieros. Digitalizá las facturas de proveedores y programá los pagos sin salir del sistema.
                    </p>
                    <ul class="space-y-4 text-black font-bold">
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 bg-secondary rounded-full"></span>
                            Gestión completa de Proveedores y Facturas
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 bg-secondary rounded-full"></span>
                            Control de Caja y movimientos diarios
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 bg-secondary rounded-full"></span>
                            Reportes financieros detallables
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lg:order-1 relative w-full flex items-center justify-center animate-slide-in-left">
                <div class="relative w-full aspect-video overflow-hidden rounded-2xl shadow-2xl border border-border-light bg-surface group">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ asset('videos/placeholders/feature2.webm') }}"></video>
                </div>
            </div>
        </div>

        {{-- Portal & Amenities --}}
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="animate-fade-in-up">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">Experiencia del Residente</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-8">Un portal que los residentes aman usar</h2>
                <div class="space-y-6">
                    <p class="text-lg text-text-secondary font-medium leading-relaxed">
                        Ofrecé un portal de autoservicio 24/7. Propietarios e inquilinos pueden consultar su estado de cuenta, descargar liquidaciones e incluso <span class="text-text-primary font-bold">reservar amenities</span> directamente desde su teléfono.
                    </p>
                    <ul class="space-y-4 text-black font-bold">
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                            Acceso sin contraseña (Token magic link)
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                            Reservas de Amenities con validación
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                            Estado de cuenta y cobros en tiempo real
                        </li>
                    </ul>
                </div>
            </div>
            <div class="relative w-full flex items-center justify-center animate-slide-in-right">
                <div class="relative w-full aspect-video overflow-hidden rounded-2xl shadow-2xl border border-border-light bg-surface group">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ asset('videos/placeholders/feature3.webm') }}"></video>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- Technical Stack / Modern Platform --}}
<section class="py-24 lg:py-32 bg-bg border-t border-border-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h3 class="text-2xl lg:text-3xl font-black text-text-primary mb-12">Construido con tecnología líder mundial</h3>
        <div class="flex flex-wrap justify-center gap-8 lg:gap-16 items-center opacity-60">
            <span class="text-2xl lg:text-3xl font-black tracking-tighter">LARAVEL 11</span>
            <span class="text-2xl lg:text-3xl font-black tracking-tighter">TAILWIND CSS</span>
            <span class="text-2xl lg:text-3xl font-black tracking-tighter">MYSQL 8.0</span>
            <span class="text-2xl lg:text-3xl font-black tracking-tighter">REAL-TIME PUSHER</span>
        </div>
    </div>
</section>

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

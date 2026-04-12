@extends('marketing.layouts.master')

@section('title', 'Soluciones - CEO Online')
@section('description', 'Soluciones reales para los problemas del administrador de consorcios: liquidaciones sin estrés, propietarios informados, proveedores bajo control y gestión multi-consorcio.')

@section('content')

{{-- Page Header --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-32 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-2 bg-secondary/10 text-secondary rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
            Soluciones por Problema
        </span>
        <h1 class="text-4xl lg:text-7xl font-black text-text-primary mt-8 leading-[1.05] tracking-tight max-w-4xl mx-auto">
            Tus problemas de siempre, resueltos de una vez
        </h1>
        <p class="text-text-secondary text-xl lg:text-2xl mt-8 max-w-2xl mx-auto font-medium leading-relaxed">
            Conocemos de primera mano los dolores del administrador de consorcios en Argentina. Cada solución fue diseñada para eliminarlos.
        </p>
    </div>
</section>

{{-- Solutions Detail —  organized by pain point --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-32 lg:space-y-48">

        {{-- Solution 1: Cierre de mes sin estrés --}}
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="animate-fade-in-left">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">El problema</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-4">El cierre de mes te consume días enteros</h2>
                <p class="text-lg text-text-tertiary font-medium mb-8 italic">Liquidaciones manuales, errores en los cálculos, propietarios que reclaman... y vos hasta las 2 AM cuadrando números.</p>
                
                <span class="text-secondary font-black uppercase tracking-widest text-sm mb-4 block">La solución</span>
                <div class="space-y-6">
                    <p class="text-lg text-text-secondary font-medium leading-relaxed">
                        CEOnline automatiza el cálculo de expensas <span class="text-text-primary font-bold">ordinarias y extraordinarias</span>, distribuye por coeficiente, genera los PDFs y deja todo listo para imprimir o enviar. El cierre pasa de días a horas.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4 mt-8">
                        @foreach(['Liquidaciones automáticas', 'Distribución por coeficiente', 'Auditoría de cada acción', 'Reportes de pagos y morosos'] as $feature)
                        <div class="flex items-center gap-3 text-text-primary font-bold">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                            {{ $feature }}
                        </div>
                        @endforeach
                    </div>
                    <a href="{{ route('demo') }}" class="btn-primary mt-8 inline-flex !py-4 !px-8">Probalo 30 días gratis</a>
                </div>
            </div>
            <div class="relative w-full flex items-center justify-center animate-slide-in-right">
                <div class="bg-bg rounded-2xl border border-border-light p-10 lg:p-12 max-w-md w-full">
                    <div class="text-6xl font-black text-primary/20 mb-4">01</div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="text-red-400 line-through text-lg font-bold">3 días</span>
                            <svg class="w-5 h-5 text-text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            <span class="text-success text-lg font-black">4 horas</span>
                        </div>
                        <p class="text-text-secondary text-sm font-medium">Tiempo promedio de cierre mensual con CEOnline</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Solution 2: Propietarios informados --}}
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="lg:order-2 animate-fade-in-right">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">El problema</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-4">Los propietarios llaman a cualquier hora</h2>
                <p class="text-lg text-text-tertiary font-medium mb-8 italic">Quieren saber cuánto deben, cuándo vence, qué incluye la expensa. Y vos perdés horas respondiendo lo mismo.</p>
                
                <span class="text-secondary font-black uppercase tracking-widest text-sm mb-4 block">La solución</span>
                <div class="space-y-6">
                    <p class="text-lg text-text-secondary font-medium leading-relaxed">
                        El <span class="text-text-primary font-bold">Portal del Propietario</span> les da acceso 24/7 a su estado de cuenta, expensas, comunicaciones y documentos. Ellos consultan solos — vos dejás de atender llamadas.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4 mt-8">
                        @foreach(['Portal 24/7 desde el celular', 'Estado de cuenta en tiempo real', 'Comunicaciones centralizadas', 'Documentos descargables'] as $feature)
                        <div class="flex items-center gap-3 text-text-primary font-bold">
                            <span class="w-1.5 h-1.5 bg-secondary rounded-full"></span>
                            {{ $feature }}
                        </div>
                        @endforeach
                    </div>
                    <a href="{{ route('demo') }}" class="btn-primary-outline mt-8 inline-flex !py-4 !px-8">Solicitar Demo</a>
                </div>
            </div>
            <div class="lg:order-1 relative w-full flex items-center justify-center animate-slide-in-left">
                <div class="bg-bg rounded-2xl border border-border-light p-10 lg:p-12 max-w-md w-full">
                    <div class="text-6xl font-black text-secondary/20 mb-4">02</div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="text-success text-3xl font-black">-70%</span>
                        </div>
                        <p class="text-text-secondary text-sm font-medium">Reducción en consultas telefónicas de propietarios</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Solution 3: Proveedores bajo control --}}
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="animate-fade-in-left">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">El problema</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-4">Facturas por todos lados, sin control</h2>
                <p class="text-lg text-text-tertiary font-medium mb-8 italic">Facturas en mail, en papel, en WhatsApp. Cargar cada una a mano toma horas y siempre se cuela algún error.</p>
                
                <span class="text-secondary font-black uppercase tracking-widest text-sm mb-4 block">La solución</span>
                <div class="space-y-6">
                    <p class="text-lg text-text-secondary font-medium leading-relaxed">
                        Centralizá todos tus proveedores y sus facturas. La <span class="text-text-primary font-bold">IA integrada</span> lee la factura y extrae montos, fechas y CUIT automáticamente. Vos solo verificás.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4 mt-8">
                        @foreach(['Gestión completa de proveedores', 'IA que extrae datos de facturas', 'Historial y trazabilidad', 'Control de caja integrado'] as $feature)
                        <div class="flex items-center gap-3 text-text-primary font-bold">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                            {{ $feature }}
                        </div>
                        @endforeach
                    </div>
                    <a href="{{ route('demo') }}" class="btn-primary mt-8 inline-flex !py-4 !px-8">Ver cómo funciona la IA</a>
                </div>
            </div>
            <div class="relative w-full flex items-center justify-center animate-slide-in-right">
                <div class="bg-bg rounded-2xl border border-border-light p-10 lg:p-12 max-w-md w-full">
                    <div class="text-6xl font-black text-primary/20 mb-4">03</div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="text-success text-3xl font-black">20h+</span>
                        </div>
                        <p class="text-text-secondary text-sm font-medium">Horas semanales recuperadas con la IA de facturas</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Solution 4: Gestión multi-consorcio --}}
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="lg:order-2 animate-fade-in-right">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">El problema</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-4">Cada consorcio es un mundo aparte</h2>
                <p class="text-lg text-text-tertiary font-medium mb-8 italic">Planillas distintas, carpetas por edificio, empleados que no saben qué tocar. A medida que crecés, el caos escala.</p>
                
                <span class="text-secondary font-black uppercase tracking-widest text-sm mb-4 block">La solución</span>
                <div class="space-y-6">
                    <p class="text-lg text-text-secondary font-medium leading-relaxed">
                        Con CEOnline gestionás <span class="text-text-primary font-bold">toda tu cartera desde una sola cuenta</span>. Asigná roles y permisos a tu equipo, auditá cada acción y escalá sin perder el control.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4 mt-8">
                        @foreach(['Multi-consorcio en una cuenta', 'Roles y permisos granulares', 'Dashboard unificado', 'Auditoría completa'] as $feature)
                        <div class="flex items-center gap-3 text-text-primary font-bold">
                            <span class="w-1.5 h-1.5 bg-secondary rounded-full"></span>
                            {{ $feature }}
                        </div>
                        @endforeach
                    </div>
                    <a href="{{ route('pricing') }}" class="btn-primary-outline mt-8 inline-flex !py-4 !px-8">Ver Planes</a>
                </div>
            </div>
            <div class="lg:order-1 relative w-full flex items-center justify-center animate-slide-in-left">
                <div class="bg-bg rounded-2xl border border-border-light p-10 lg:p-12 max-w-md w-full">
                    <div class="text-6xl font-black text-secondary/20 mb-4">04</div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="text-primary text-3xl font-black">1 cuenta</span>
                        </div>
                        <p class="text-text-secondary text-sm font-medium">Para gestionar desde 3 hasta 50+ consorcios</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

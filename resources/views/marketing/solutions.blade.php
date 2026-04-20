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

{{-- Solutions Detail — organized by pain point --}}

{{-- Solution 1: Cierre de mes — bg-white --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center"
             x-data="{ shown: false }" x-intersect.once="shown = true"
             :class="shown ? 'animate-section-reveal' : 'opacity-0'">
            <div>
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">El problema</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-4">El cierre de mes te consume días enteros</h2>
                <p class="text-lg text-text-tertiary font-medium mb-8 italic">Liquidaciones manuales, errores en los cálculos, propietarios que reclaman... y vos hasta las 2 AM cuadrando números.</p>
                
                <span class="text-success font-black uppercase tracking-widest text-sm mb-4 block">La solución</span>
                <p class="text-lg text-text-secondary font-medium leading-relaxed mb-6">
                    CEOnline automatiza el cálculo de expensas <span class="text-text-primary font-bold">ordinarias y extraordinarias</span>, distribuye por coeficiente, genera los PDFs y deja todo listo para enviar. El cierre pasa de días a horas.
                </p>
                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    @foreach(['Liquidaciones automáticas', 'Distribución por coeficiente', 'Auditoría de cada acción', 'Reportes de pagos y morosos'] as $feature)
                    <div class="flex items-center gap-3 text-text-primary font-bold">
                        <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                        {{ $feature }}
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('demo') }}" class="btn-primary inline-flex !py-4 !px-8">Probalo 30 días gratis</a>
            </div>
            <div class="relative w-full flex items-center justify-center">
                <div class="bg-slate-50 rounded-2xl border border-border-light p-10 lg:p-12 max-w-md w-full">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <span class="text-text-tertiary text-sm font-bold uppercase tracking-wider">Tiempo de cierre</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-red-400 line-through text-lg font-bold">3 días</span>
                        <svg class="w-5 h-5 text-text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        <span class="text-success text-2xl font-black">4 horas</span>
                    </div>
                    <p class="text-text-tertiary text-sm font-medium mt-3">Tiempo promedio de cierre mensual con CEOnline</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Solution 2: Propietarios — bg-slate-50 --}}
<section class="py-20 lg:py-28 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center"
             x-data="{ shown: false }" x-intersect.once="shown = true"
             :class="shown ? 'animate-section-reveal' : 'opacity-0'">
            <div class="lg:order-2">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">El problema</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-4">Los propietarios llaman a cualquier hora</h2>
                <p class="text-lg text-text-tertiary font-medium mb-8 italic">Quieren saber cuánto deben, cuándo vence, qué incluye la expensa. Y vos perdés horas respondiendo lo mismo.</p>
                
                <span class="text-success font-black uppercase tracking-widest text-sm mb-4 block">La solución</span>
                <p class="text-lg text-text-secondary font-medium leading-relaxed mb-6">
                    El <span class="text-text-primary font-bold">Portal del Propietario</span> les da acceso 24/7 a su estado de cuenta, expensas, comunicaciones y documentos. Ellos consultan solos — vos dejás de atender llamadas.
                </p>
                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    @foreach(['Portal 24/7 desde el celular', 'Estado de cuenta en tiempo real', 'Comunicaciones centralizadas', 'Documentos descargables'] as $feature)
                    <div class="flex items-center gap-3 text-text-primary font-bold">
                        <span class="w-1.5 h-1.5 bg-secondary rounded-full"></span>
                        {{ $feature }}
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('demo') }}" class="btn-secondary inline-flex !py-4 !px-8">Solicitar Demo</a>
            </div>
            <div class="lg:order-1 relative w-full flex items-center justify-center">
                <div class="bg-white rounded-2xl border border-border-light p-10 lg:p-12 max-w-md w-full">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-success/10 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <span class="text-text-tertiary text-sm font-bold uppercase tracking-wider">Reducción</span>
                    </div>
                    <span class="text-success text-4xl font-black">-70%</span>
                    <p class="text-text-tertiary text-sm font-medium mt-3">Reducción en consultas telefónicas de propietarios</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Solution 3: Proveedores — bg-white --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center"
             x-data="{ shown: false }" x-intersect.once="shown = true"
             :class="shown ? 'animate-section-reveal' : 'opacity-0'">
            <div>
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">El problema</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-4">Facturas por todos lados, sin control</h2>
                <p class="text-lg text-text-tertiary font-medium mb-8 italic">Facturas en mail, en papel, en WhatsApp. Cargar cada una a mano toma horas y siempre se cuela algún error.</p>
                
                <span class="text-success font-black uppercase tracking-widest text-sm mb-4 block">La solución</span>
                <p class="text-lg text-text-secondary font-medium leading-relaxed mb-6">
                    Centralizá todos tus proveedores y sus facturas. La <span class="text-text-primary font-bold">IA integrada</span> lee la factura y extrae montos, fechas y CUIT automáticamente. Vos solo verificás.
                </p>
                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    @foreach(['Gestión completa de proveedores', 'IA que extrae datos de facturas', 'Historial y trazabilidad', 'Control de caja integrado'] as $feature)
                    <div class="flex items-center gap-3 text-text-primary font-bold">
                        <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                        {{ $feature }}
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('demo') }}" class="btn-primary inline-flex !py-4 !px-8">Ver cómo funciona la IA</a>
            </div>
            <div class="relative w-full flex items-center justify-center">
                <div class="bg-slate-50 rounded-2xl border border-border-light p-10 lg:p-12 max-w-md w-full">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                        </div>
                        <span class="text-text-tertiary text-sm font-bold uppercase tracking-wider">Ahorro</span>
                    </div>
                    <span class="text-success text-4xl font-black">20h+</span>
                    <p class="text-text-tertiary text-sm font-medium mt-3">Horas semanales recuperadas con la IA de facturas</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Solution 4: Multi-consorcio — bg-slate-50 --}}
<section class="py-20 lg:py-28 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center"
             x-data="{ shown: false }" x-intersect.once="shown = true"
             :class="shown ? 'animate-section-reveal' : 'opacity-0'">
            <div class="lg:order-2">
                <span class="text-primary font-black uppercase tracking-widest text-sm mb-4 block">El problema</span>
                <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-tight mb-4">Cada consorcio es un mundo aparte</h2>
                <p class="text-lg text-text-tertiary font-medium mb-8 italic">Planillas distintas, carpetas por edificio, empleados que no saben qué tocar. A medida que crecés, el caos escala.</p>
                
                <span class="text-success font-black uppercase tracking-widest text-sm mb-4 block">La solución</span>
                <p class="text-lg text-text-secondary font-medium leading-relaxed mb-6">
                    Con CEOnline gestionás <span class="text-text-primary font-bold">toda tu cartera desde una sola cuenta</span>. Asigná roles y permisos a tu equipo, auditá cada acción y escalá sin perder el control.
                </p>
                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    @foreach(['Multi-consorcio en una cuenta', 'Roles y permisos granulares', 'Dashboard unificado', 'Auditoría completa'] as $feature)
                    <div class="flex items-center gap-3 text-text-primary font-bold">
                        <span class="w-1.5 h-1.5 bg-secondary rounded-full"></span>
                        {{ $feature }}
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('demo') }}" class="btn-secondary inline-flex !py-4 !px-8">Solicitar Demo</a>
            </div>
            <div class="lg:order-1 relative w-full flex items-center justify-center">
                <div class="bg-white rounded-2xl border border-border-light p-10 lg:p-12 max-w-md w-full">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                        </div>
                        <span class="text-text-tertiary text-sm font-bold uppercase tracking-wider">Escala</span>
                    </div>
                    <span class="text-primary text-4xl font-black">1 cuenta</span>
                    <p class="text-text-tertiary text-sm font-medium mt-3">Para gestionar desde 3 hasta 50+ consorcios</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Social Proof Dark Strip --}}
@include('marketing.components.social-proof')

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

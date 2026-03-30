@extends('marketing.layouts.master')

@section('title', 'Precios - CEO Online')
@section('description', 'Planes y precios de CEO Online. Desde administraciones pequeñas hasta empresas con miles de unidades.')

@section('content')

{{-- Page Header --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-32 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
            Escalabilidad
        </span>
        <h1 class="text-4xl lg:text-7xl font-black text-text-primary mt-8 leading-[1.05] tracking-tight max-w-4xl mx-auto">
            Planes que crecen con tu administración
        </h1>
        <p class="text-text-secondary text-xl lg:text-2xl mt-8 max-w-2xl mx-auto font-medium leading-relaxed">
            Sin costos ocultos ni sorpresas. Elegí el plan que mejor se ajuste a tu volumen de unidades hoy.
        </p>
    </div>
</section>

{{-- Pricing Cards --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            {{-- Starter --}}
            <div class="bg-bg rounded-2xl border border-border-light p-10 hover:shadow-2xl transition-all duration-500 group">
                <div class="mb-8">
                    <h3 class="text-2xl font-black text-text-primary mb-2">Starter</h3>
                    <p class="text-text-secondary font-medium">Ideal para empezar.</p>
                </div>
                <div class="mb-10">
                    <span class="text-5xl font-black text-text-primary">Consultar</span>
                    <span class="text-text-secondary font-bold">/mes</span>
                </div>
                <ul class="space-y-5 mb-12">
                    @foreach(['Hasta 50 unidades', 'Expensas automatizadas', 'Soporte vía Email', 'Portal del propietario básico'] as $feature)
                    <li class="flex items-center gap-3 text-text-primary font-bold text-sm">
                        <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('demo') }}" class="block text-center py-4 bg-white border-2 border-primary text-primary font-black rounded-lg hover:bg-primary hover:text-white transition-all">
                    PROBAR GRATIS
                </a>
            </div>

            {{-- Professional --}}
            <div class="bg-primary rounded-2xl p-10 shadow-2xl shadow-primary/20 relative transform lg:-translate-y-4">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-white text-primary text-[10px] font-black tracking-widest px-4 py-1.5 rounded-full shadow-lg">
                    RECOMENDADO
                </div>
                <div class="mb-8">
                    <h3 class="text-2xl font-black text-white mb-2">Professional</h3>
                    <p class="text-white/80 font-medium">El más elegido por administraciones.</p>
                </div>
                <div class="mb-10">
                    <span class="text-5xl font-black text-white">Consultar</span>
                    <span class="text-white/60 font-bold">/mes</span>
                </div>
                <ul class="space-y-5 mb-12">
                    @foreach(['Unidades ilimitadas', 'Módulo de Imprenta', 'Chat en tiempo real', 'Reserva de Amenities', 'Soporte prioritario'] as $feature)
                    <li class="flex items-center gap-3 text-white font-bold text-sm">
                        <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('demo') }}" class="block text-center py-4 bg-white text-primary font-black rounded-lg hover:scale-105 transition-all shadow-xl">
                    EMPEZAR AHORA
                </a>
            </div>

            {{-- Enterprise --}}
            <div class="bg-bg rounded-2xl border border-border-light p-10 hover:shadow-2xl transition-all duration-500 group">
                <div class="mb-8">
                    <h3 class="text-2xl font-black text-text-primary mb-2">Enterprise</h3>
                    <p class="text-text-secondary font-medium">Grandes volúmenes de gestión.</p>
                </div>
                <div class="mb-10">
                    <span class="text-5xl font-black text-text-primary">Contactar</span>
                </div>
                <ul class="space-y-5 mb-12">
                    @foreach(['Múltiples administraciones', 'Integración API', 'Soporte Dedicado 24/7', 'Migración de datos incluida', 'SLA Garantizado'] as $feature)
                    <li class="flex items-center gap-3 text-text-primary font-bold text-sm">
                        <span class="w-1.5 h-1.5 bg-secondary rounded-full"></span>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contact') }}" class="block text-center py-4 bg-text-primary text-white font-black rounded-lg hover:bg-black transition-all">
                    SABER MÁS
                </a>
            </div>

        </div>

    </div>
</section>

{{-- FAQ Section --}}
<section class="py-24 lg:py-32 bg-bg border-t border-border-light">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl lg:text-4xl font-black text-text-primary text-center mb-16">Preguntas frecuentes</h2>
        <div class="space-y-4" x-data="{ open: null }">
            @foreach([
                ['¿Qué incluye el servicio de imprenta?', 'Incluye la impresión y distribución física de las liquidaciones de expensas, integrado directamente con el software para evitar dobles cargas de datos.'],
                ['¿Hay un costo por migrar mis datos?', 'No, nuestro equipo de soporte se encarga de la migración inicial de tus consorcios desde cualquier sistema previo sin costo adicional en planes Pro y Enterprise.'],
                ['¿Puedo probar el sistema gratis?', 'Sí, podés solicitar una demo o un acceso Sandbox gratuito por 14 días para explorar todas las funcionalidades sin compromiso.'],
                ['¿Tienen soporte técnico local?', 'Sí, tenemos soporte técnico especializado en Argentina disponible por chat, email y teléfono según tu plan.'],
                ['¿Cómo se calculan las expensas?', 'El sistema permite configurar coeficientes por unidad, gastos ordinarios, extraordinarios y fondos de reserva de manera automatizada.']
            ] as $index => $faq)
            <div class="bg-white border border-border-light rounded-2xl overflow-hidden hover:shadow-md transition-all">
                <button @click="open = open === {{ $index }} ? null : {{ $index }}"
                        class="w-full flex items-center justify-between px-8 py-6 text-left text-text-primary font-bold text-lg hover:text-primary transition-colors">
                    {{ $faq[0] }}
                    <svg class="w-6 h-6 shrink-0 transition-transform duration-300" :class="{ 'rotate-180 text-primary': open === {{ $index }} }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === {{ $index }}" x-collapse>
                    <p class="px-8 pb-8 text-text-secondary font-medium leading-relaxed">{{ $faq[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

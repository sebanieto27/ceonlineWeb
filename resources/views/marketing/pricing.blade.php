@extends('marketing.layouts.master')

@section('title', 'Precios - CEO Online')
@section('description', 'Planes y precios de CEO Online. Primer mes gratis, migración sin cargo y soporte VIP. Desde administraciones pequeñas hasta empresas con miles de unidades.')

@section('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@@type": "Question",
            "name": "¿Qué incluye el servicio de imprenta?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Incluye la impresión y distribución física de las liquidaciones de expensas, integrado directamente con el software. Generás la liquidación, nosotros la imprimimos y la entregamos. Todo en un solo flujo."
            }
        },
        {
            "@@type": "Question",
            "name": "¿Hay un costo por migrar mis datos desde otro sistema?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No. Nuestro equipo se encarga de la migración completa de tus consorcios y datos históricos sin costo adicional en todos los planes."
            }
        },
        {
            "@@type": "Question",
            "name": "¿Puedo probar el sistema antes de contratar?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Sí. Ofrecemos una demo personalizada donde te mostramos el sistema con casos reales de tu administración. Además, el primer mes es gratuito para que lo pruebes con tu operación real."
            }
        },
        {
            "@@type": "Question",
            "name": "¿Cómo funciona el módulo de IA para facturas?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Subís una foto de la factura del proveedor y la IA identifica automáticamente los montos, fechas, CUIT y datos relevantes. Vos solo verificás y aprobás. Ahorra más de 20 horas semanales en promedio."
            }
        },
        {
            "@@type": "Question",
            "name": "¿Los propietarios necesitan crear cuenta?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No. Los propietarios acceden a su portal con un magic link (enlace único) que reciben por email o WhatsApp. Sin contraseñas, sin fricción."
            }
        },
        {
            "@@type": "Question",
            "name": "¿El sistema se adapta a la legislación argentina?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Sí. CEOnline se actualiza constantemente para adaptarse a cambios en leyes de consorcios, alquileres, AFIP y normativas locales."
            }
        },
        {
            "@@type": "Question",
            "name": "¿Tienen soporte técnico local?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Sí. Tenemos soporte técnico especializado en Argentina. En el plan Professional, tenés chat en tiempo real. En Enterprise, soporte dedicado 24/7 con SLA garantizado."
            }
        },
        {
            "@@type": "Question",
            "name": "¿Puedo gestionar varios consorcios desde una cuenta?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Sí. El módulo multi-consorcio te permite gestionar toda tu cartera desde una sola cuenta, con roles diferenciados para tus empleados."
            }
        }
    ]
}
</script>
@endsection

@section('content')

{{-- Page Header --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-32 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary-dark rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
            Sin Costos Ocultos
        </span>
        <h1 class="text-4xl lg:text-7xl font-black text-text-primary mt-8 leading-[1.05] tracking-tight max-w-4xl mx-auto">
            Planes que crecen con tu cartera
        </h1>
        <p class="text-text-secondary text-xl lg:text-2xl mt-8 max-w-2xl mx-auto font-medium leading-relaxed">
            Modelo SaaS por cantidad de consorcios. Empezá gratis, escalá cuando necesites. Migración de datos sin cargo en todos los planes.
        </p>
    </div>
</section>

{{-- Trust Triggers --}}
<section class="py-8 bg-white border-b border-border-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-8 text-sm font-bold text-text-secondary">
            <span class="flex items-center gap-2">
                <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                Primer mes gratis
            </span>
            <span class="flex items-center gap-2">
                <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                Migración sin cargo
            </span>
            <span class="flex items-center gap-2">
                <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                Soporte VIP de onboarding
            </span>
            <span class="flex items-center gap-2">
                <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                Sin permanencia mínima
            </span>
        </div>
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
                    <p class="text-text-secondary font-medium">Para administraciones que recién arrancan.</p>
                </div>
                <div class="mb-6">
                    <p class="text-text-secondary font-bold text-sm mb-2">Precio personalizado según tu cartera</p>
                </div>
                <a href="{{ route('demo') }}" class="block text-center py-4 bg-white border-2 border-primary text-primary font-black rounded-lg hover:bg-primary hover:text-white transition-all mb-8">
                    SOLICITAR COTIZACIÓN
                </a>
                <ul class="space-y-5">
                    @foreach(['Hasta 10 consorcios', 'Liquidaciones automáticas', 'Portal del Propietario', 'Gestión de Proveedores', 'Soporte vía Chat', 'Primer mes gratis'] as $feature)
                    <li class="flex items-center gap-3 text-text-primary font-bold text-sm">
                        <svg class="w-4 h-4 text-success shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Professional --}}
            <div class="bg-primary rounded-2xl p-10 shadow-2xl shadow-primary/20 relative transform lg:-translate-y-4">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-white text-primary text-[10px] font-black tracking-widest px-4 py-1.5 rounded-full shadow-lg">
                    MÁS ELEGIDO
                </div>
                <div class="mb-8">
                    <h3 class="text-2xl font-black text-white mb-2">Professional</h3>
                    <p class="text-white font-medium">Para el administrador que quiere crecer.</p>
                </div>
                <div class="mb-6">
                    <p class="text-white font-bold text-sm mb-2">Precio personalizado según tu cartera</p>
                </div>
                <a href="{{ route('demo') }}" class="block text-center py-4 bg-white text-primary font-black rounded-lg hover:scale-105 transition-all shadow-xl mb-8">
                    PROBALO 30 DÍAS GRATIS
                </a>
                <ul class="space-y-5">
                    @foreach(['Consorcios ilimitados', 'Todo lo de Starter +', 'IA — Análisis de Facturas', 'Módulo de Imprenta integrado', 'Chat de Soporte en Tiempo Real', 'Amenities y Reservas', 'Roles y Permisos avanzados', 'Migración de datos sin cargo'] as $feature)
                    <li class="flex items-center gap-3 text-white font-bold text-sm">
                        <svg class="w-4 h-4 text-white shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Enterprise --}}
            <div class="bg-bg rounded-2xl border border-border-light p-10 hover:shadow-2xl transition-all duration-500 group">
                <div class="mb-8">
                    <h3 class="text-2xl font-black text-text-primary mb-2">Enterprise</h3>
                    <p class="text-text-secondary font-medium">Para grandes administraciones y grupos.</p>
                </div>
                <div class="mb-6">
                    <p class="text-text-secondary font-bold text-sm mb-2">Plan a medida para tu operación</p>
                </div>
                <a href="{{ route('contact') }}" class="block text-center py-4 bg-text-primary text-white font-black rounded-lg hover:bg-black transition-all mb-8">
                    CONTACTAR VENTAS
                </a>
                <ul class="space-y-5">
                    @foreach(['Todo lo de Professional +', 'Múltiples administraciones', 'Integración API dedicada', 'Soporte Dedicado 24/7', 'SLA Garantizado', 'Onboarding personalizado', 'Capacitación para tu equipo', 'Account Manager asignado'] as $feature)
                    <li class="flex items-center gap-3 text-text-primary font-bold text-sm">
                        <svg class="w-4 h-4 text-success shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

        {{-- Closing Trigger --}}
        <div class="text-center mt-16 max-w-2xl mx-auto">
            <p class="text-text-secondary font-medium text-lg">
                <span class="text-text-primary font-bold">¿No estás seguro?</span> Pedí una demo personalizada y te mostramos el sistema con tus datos. Sin compromiso, sin presión.
            </p>
            <a href="{{ route('demo') }}" class="inline-flex items-center gap-2 text-primary font-bold text-lg mt-4 hover:underline">
                Agendar una demo gratuita <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section class="py-24 lg:py-32 bg-bg border-t border-border-light">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl lg:text-4xl font-black text-text-primary text-center mb-16">Preguntas frecuentes</h2>
        <div class="space-y-4" x-data="{ open: null }">
            @foreach([
                ['¿Qué incluye el servicio de imprenta?', 'Incluye la impresión y distribución física de las liquidaciones de expensas, integrado directamente con el software. Generás la liquidación, nosotros la imprimimos y la entregamos. Todo en un solo flujo.'],
                ['¿Hay un costo por migrar mis datos desde otro sistema?', 'No. Nuestro equipo se encarga de la migración completa de tus consorcios y datos históricos sin costo adicional en todos los planes. Es el mayor freno para cambiar de sistema — por eso lo eliminamos.'],
                ['¿Puedo probar el sistema antes de contratar?', 'Sí. Ofrecemos una demo personalizada donde te mostramos el sistema con casos reales de tu administración. Además, el primer mes es gratuito para que lo pruebes con tu operación real.'],
                ['¿Cómo funciona el módulo de IA para facturas?', 'Subís una foto de la factura del proveedor (desde el celular o la PC) y la IA identifica automáticamente los montos, fechas, CUIT y datos relevantes. Vos solo verificás y aprobás. Ahorra más de 20 horas semanales en promedio.'],
                ['¿Los propietarios necesitan crear cuenta?', 'No. Los propietarios acceden a su portal con un magic link (enlace único) que reciben por email o WhatsApp. Sin contraseñas, sin fricción.'],
                ['¿El sistema se adapta a la legislación argentina?', 'Sí. CEOnline se actualiza constantemente para adaptarse a cambios en leyes de consorcios, alquileres, AFIP y normativas locales. Es una de nuestras ventajas clave frente a sistemas genéricos o extranjeros.'],
                ['¿Tienen soporte técnico local?', 'Sí. Tenemos soporte técnico especializado en Argentina. En el plan Professional, tenés chat en tiempo real con nuestro equipo. En Enterprise, soporte dedicado 24/7 con SLA garantizado.'],
                ['¿Puedo gestionar varios consorcios desde una cuenta?', 'Sí. El módulo multi-consorcio te permite gestionar toda tu cartera desde una sola cuenta, con roles diferenciados para tus empleados.']
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

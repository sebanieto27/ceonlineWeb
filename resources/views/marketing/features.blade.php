@extends('marketing.layouts.master')

@section('title', 'Características - CEO Online')
@section('description', 'Descubrí los 15 módulos de CEO Online: liquidaciones automáticas, portal del propietario, IA para facturas, chat en tiempo real, reportes y más.')

@section('content')

{{-- Page Header --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-32 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary-dark rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
            15 Módulos Activos
        </span>
        <h1 class="text-4xl lg:text-7xl font-black text-text-primary mt-8 leading-[1.05] tracking-tight max-w-4xl mx-auto">
            Todo lo que necesitás para gestionar consorcios
        </h1>
        <p class="text-text-secondary text-xl lg:text-2xl mt-8 max-w-2xl mx-auto font-medium leading-relaxed">
            El sistema más completo del mercado argentino. Software de gestión + imprenta propia: una combinación que ningún competidor puede igualar.
        </p>
    </div>
</section>

{{-- All 15 Modules Grid --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Category: Finanzas --}}
        <div class="mb-20">
            <h2 class="text-2xl font-black text-text-primary mb-2">Finanzas & Liquidaciones</h2>
            <p class="text-text-secondary font-medium mb-10">El core del negocio: automatizá todo el ciclo financiero del consorcio.</p>
            <div class="grid md:grid-cols-3 gap-8">
                {{-- 1. Liquidaciones --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Liquidaciones</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Genera expensas mensuales completas con todos los importes y distribuciones automáticas.</p>
                    <p class="text-primary font-bold text-xs italic">"Cerrá el mes en horas, no en días"</p>
                </div>
                {{-- 2. Pagos --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Pagos</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Registro de pagos de propietarios, métodos de pago y asignación a expensas.</p>
                    <p class="text-primary font-bold text-xs italic">"Control total de quién debe y quién pagó"</p>
                </div>
                {{-- 3. Gastos y Categorías --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Gastos y Categorías</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Gastos generales, personales, prorrateo y distribución exacta por coeficiente de cada unidad.</p>
                    <p class="text-primary font-bold text-xs italic">"Distribución exacta, sin errores manuales"</p>
                </div>
            </div>
        </div>

        {{-- Category: Proveedores & IA --}}
        <div class="mb-20">
            <h2 class="text-2xl font-black text-text-primary mb-2">Proveedores & Inteligencia Artificial</h2>
            <p class="text-text-secondary font-medium mb-10">Gestión de proveedores potenciada con IA.</p>
            <div class="grid md:grid-cols-3 gap-8">
                {{-- 4. Gestión de Proveedores --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-secondary/20 transition-colors">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Gestión de Proveedores</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Alta de proveedores, contactos, facturas e historial completo en un solo lugar.</p>
                    <p class="text-secondary font-bold text-xs italic">"Todos tus proveedores y sus facturas en un solo lugar"</p>
                </div>
                {{-- 5. IA Facturas --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group relative overflow-hidden">
                    <div class="absolute top-3 right-3 bg-purple-100 text-purple-700 text-[10px] font-black px-2 py-1 rounded-full uppercase tracking-wider">IA</div>
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-5 group-hover:bg-purple-200 transition-colors">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">IA — Análisis de Facturas</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Cargá una foto de factura y la IA extrae montos, fechas y CUIT automáticamente. Impulsado por OpenAI.</p>
                    <p class="text-purple-600 font-bold text-xs italic">"La IA trabaja, vos controlás"</p>
                </div>
                {{-- 6. Coeficientes --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-secondary/20 transition-colors">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Coeficientes</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Configuración de coeficientes por unidad funcional para distribución justa de expensas.</p>
                    <p class="text-secondary font-bold text-xs italic">"Distribución justa según el porcentaje de cada unidad"</p>
                </div>
            </div>
        </div>

        {{-- Category: Propietarios & Comunicación --}}
        <div class="mb-20">
            <h2 class="text-2xl font-black text-text-primary mb-2">Propietarios & Comunicación</h2>
            <p class="text-text-secondary font-medium mb-10">Transparencia total hacia los propietarios.</p>
            <div class="grid md:grid-cols-3 gap-8">
                {{-- 7. Portal del Propietario --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Portal del Propietario</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Los propietarios ven sus expensas, balances y comunicaciones 24/7 desde cualquier dispositivo.</p>
                    <p class="text-primary font-bold text-xs italic">"Dale a tus propietarios transparencia total"</p>
                </div>
                {{-- 8. Comunicaciones --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Comunicaciones</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Novedades y mensajes masivos a propietarios del consorcio. Sin llamadas, sin WhatsApp desordenado.</p>
                    <p class="text-primary font-bold text-xs italic">"Tu consorcio siempre informado, sin llamadas"</p>
                </div>
                {{-- 9. Documentos --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Documentos Descargables</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Subí reglamentos, actas, presupuestos y que los propietarios los descarguen cuando quieran.</p>
                    <p class="text-primary font-bold text-xs italic">"El reglamento, el acta, el presupuesto: todo disponible"</p>
                </div>
            </div>
        </div>

        {{-- Category: Operaciones --}}
        <div class="mb-20">
            <h2 class="text-2xl font-black text-text-primary mb-2">Operaciones & Control</h2>
            <p class="text-text-secondary font-medium mb-10">Las herramientas que hacen tu administración más eficiente.</p>
            <div class="grid md:grid-cols-3 gap-8">
                {{-- 10. Multi-consorcio --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-success/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-success/20 transition-colors">
                        <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Multi-consorcio</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Una cuenta para gestionar todos los consorcios de tu cartera. Sin saltar entre sistemas.</p>
                    <p class="text-success font-bold text-xs italic">"Toda tu cartera en una sola pantalla"</p>
                </div>
                {{-- 11. Roles y Permisos --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-success/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-success/20 transition-colors">
                        <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Roles y Permisos</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Empleados con niveles de acceso diferenciados. Cada uno ve solo lo que necesita.</p>
                    <p class="text-success font-bold text-xs italic">"Control granular: cada uno ve solo lo que necesita"</p>
                </div>
                {{-- 12. Auditoría --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-success/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-success/20 transition-colors">
                        <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Auditoría</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Registro de cada acción realizada en el sistema. Trazabilidad total para tu tranquilidad.</p>
                    <p class="text-success font-bold text-xs italic">"Sabés qué hizo cada uno y cuándo"</p>
                </div>
            </div>
        </div>

        {{-- Category: Soporte & Experiencia --}}
        <div class="mb-20">
            <h2 class="text-2xl font-black text-text-primary mb-2">Soporte & Experiencia</h2>
            <p class="text-text-secondary font-medium mb-10">Nunca te sentís solo con CEOnline.</p>
            <div class="grid md:grid-cols-3 gap-8">
                {{-- 13. Chat Soporte --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Chat de Soporte en Tiempo Real</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Comunicación directa con nuestro equipo vía WebSockets. Sin tickets, sin esperas.</p>
                    <p class="text-primary font-bold text-xs italic">"Soporte que responde cuando lo necesitás"</p>
                </div>
                {{-- 14. Amenities --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Amenities y Reservas</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Gestión de espacios comunes (SUM, pileta, quincho). El propietario reserva desde su celular.</p>
                    <p class="text-primary font-bold text-xs italic">"El propietario reserva desde su celular"</p>
                </div>
                {{-- 15. Reportes --}}
                <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-xl transition-all duration-500 group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary/20 transition-colors">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-black text-text-primary mb-2">Reportes</h3>
                    <p class="text-text-secondary font-medium text-sm leading-relaxed mb-3">Informes de pagos, morosos, gastos por período. Los números del consorcio en un click.</p>
                    <p class="text-primary font-bold text-xs italic">"Los números del consorcio en un click"</p>
                </div>
            </div>
        </div>

        {{-- Próximamente --}}
        <div class="bg-bg rounded-2xl border-2 border-dashed border-border-light p-10 lg:p-12">
            <div class="text-center mb-10">
                <span class="inline-flex items-center gap-2 px-4 py-2 bg-secondary/10 text-secondary rounded-full text-xs font-black uppercase tracking-widest">
                    Próximamente
                </span>
                <h2 class="text-2xl lg:text-3xl font-black text-text-primary mt-4">Features en desarrollo</h2>
                <p class="text-text-secondary font-medium mt-2">El roadmap más ambicioso del mercado — y vos ya vas a estar adentro cuando salgan.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach([
                    ['Votaciones de Propietarios', 'Voto ponderado por coeficiente. Ningún competidor lo tiene.'],
                    ['Pagos Online', 'El propietario paga con Mercado Pago desde el portal.'],
                    ['App Móvil PWA', 'El portal del propietario instalable en el celular.'],
                    ['Liquidación de Sueldos', 'Eliminá una herramienta externa más.'],
                    ['Intimaciones de Deuda', 'Automatizá el proceso más tedioso del administrador.'],
                    ['Facturación AFIP', 'Emití tus propias facturas desde CEOnline.'],
                    ['Conciliación Bancaria', 'Importación de extractos y matching automático.'],
                    ['Asistente IA Avanzado', 'Detección de anomalías y redacción automática.'],
                ] as $feature)
                <div class="flex items-start gap-3 p-4 bg-white rounded-xl border border-border-light">
                    <span class="w-1.5 h-1.5 bg-secondary rounded-full mt-2 shrink-0"></span>
                    <div>
                        <p class="text-text-primary font-bold text-sm">{{ $feature[0] }}</p>
                        <p class="text-text-tertiary text-xs mt-1">{{ $feature[1] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

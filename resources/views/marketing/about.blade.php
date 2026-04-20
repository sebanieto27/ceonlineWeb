@extends('marketing.layouts.master')

@section('title', 'Empresa - CEO Online')
@section('description', 'Conocé a CEO Online: más de 25 años especializados en gestión de consorcios y propiedad horizontal en Argentina.')

@section('content')

{{-- Hero --}}
<section class="gradient-hero gradient-mesh py-20 lg:py-28 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl" x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
            <span class="inline-block px-3 py-1 bg-primary/10 text-primary font-black text-xs uppercase tracking-[0.2em] rounded-full mb-6">Quiénes somos</span>
            <h1 class="text-4xl lg:text-6xl font-black text-text-primary tracking-tight leading-[1.08]">
                25 años construyendo <span class="text-primary">tecnología para consorcios</span>
            </h1>
            <p class="text-lg lg:text-xl text-text-secondary font-medium mt-6 max-w-2xl leading-relaxed">
                No somos un software genérico adaptado. Nacimos para resolver los problemas reales de la administración de propiedad horizontal en Argentina.
            </p>
        </div>
    </div>
</section>

{{-- Nuestra historia --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
                <span class="inline-block px-3 py-1 bg-success/10 text-success font-black text-xs uppercase tracking-[0.2em] rounded-full mb-6">Nuestra historia</span>
                <h2 class="text-3xl lg:text-4xl font-black text-text-primary tracking-tight leading-[1.1] mb-6">
                    De administradores, para administradores
                </h2>
                <div class="space-y-4 text-text-secondary font-medium leading-relaxed">
                    <p>
                        CEO Online nació en el corazón de una administración de consorcios. Conocemos cada dolor de la profesión porque lo vivimos en primera persona: los cierres de mes interminables, los reclamos de propietarios, la carga administrativa que no para de crecer.
                    </p>
                    <p>
                        En 2001 empezamos a digitalizar procesos que otros seguían haciendo en planillas. Hoy, con más de <strong class="text-text-primary">25 años de experiencia</strong> y <strong class="text-text-primary">200+ consorcios gestionados</strong>, somos la plataforma que más entiende las particularidades de la propiedad horizontal argentina.
                    </p>
                    <p>
                        No vendemos un producto enlatado. Construimos una herramienta que evoluciona junto con las necesidades reales del mercado, escuchando a nuestros clientes cada día.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4" x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
                <div class="bg-slate-50 rounded-2xl border border-border-light p-6 text-center hover:shadow-lg transition-all duration-500">
                    <div class="text-4xl font-black text-primary tracking-tighter mb-2">25+</div>
                    <p class="text-sm text-text-secondary font-medium">Años de experiencia</p>
                </div>
                <div class="bg-slate-50 rounded-2xl border border-border-light p-6 text-center hover:shadow-lg transition-all duration-500">
                    <div class="text-4xl font-black text-primary tracking-tighter mb-2">200+</div>
                    <p class="text-sm text-text-secondary font-medium">Consorcios gestionados</p>
                </div>
                <div class="bg-slate-50 rounded-2xl border border-border-light p-6 text-center hover:shadow-lg transition-all duration-500">
                    <div class="text-4xl font-black text-primary tracking-tighter mb-2">42K+</div>
                    <p class="text-sm text-text-secondary font-medium">Propietarios activos</p>
                </div>
                <div class="bg-slate-50 rounded-2xl border border-border-light p-6 text-center hover:shadow-lg transition-all duration-500">
                    <div class="text-4xl font-black text-primary tracking-tighter mb-2">15</div>
                    <p class="text-sm text-text-secondary font-medium">Módulos integrados</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Qué nos diferencia --}}
<section class="py-20 lg:py-28 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 lg:mb-20" x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
            <span class="inline-block px-3 py-1 bg-primary/10 text-primary font-black text-xs uppercase tracking-[0.2em] rounded-full mb-6">Diferenciales</span>
            <h2 class="text-3xl lg:text-4xl font-black text-text-primary tracking-tight leading-[1.1]">
                Por qué nos eligen
            </h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
            <div class="bg-white rounded-2xl border border-border-light p-8 hover:shadow-xl hover:border-primary/30 transition-all duration-500" x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-xl font-black text-text-primary mb-3">Especialización total</h3>
                <p class="text-text-secondary font-medium leading-relaxed">
                    No somos un CRM, un ERP ni un software contable adaptado. Cada función fue diseñada exclusivamente para la administración de propiedad horizontal bajo la legislación argentina.
                </p>
            </div>
            <div class="bg-white rounded-2xl border border-border-light p-8 hover:shadow-xl hover:border-primary/30 transition-all duration-500" x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-xl font-black text-text-primary mb-3">Tecnología que evoluciona</h3>
                <p class="text-text-secondary font-medium leading-relaxed">
                    Plataforma 100% cloud con actualizaciones continuas. Inteligencia artificial aplicada a liquidaciones, reportes y detección de anomalías. Innovamos para que vos puedas enfocarte en administrar.
                </p>
            </div>
            <div class="bg-white rounded-2xl border border-border-light p-8 hover:shadow-xl hover:border-primary/30 transition-all duration-500" x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="text-xl font-black text-text-primary mb-3">Acompañamiento real</h3>
                <p class="text-text-secondary font-medium leading-relaxed">
                    Soporte humano de profesionales que entienden el negocio. No te respondemos con un bot ni con un manual genérico: te ayudamos a resolver tu problema concreto.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Visión / Misión — Dark section --}}
<section class="py-20 lg:py-28 bg-gradient-to-br from-slate-900 via-primary-dark to-slate-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-10 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 p-8 lg:p-10" x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
                <div class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-2xl font-black text-white mb-4">Nuestra visión</h3>
                <p class="text-white/70 font-medium leading-relaxed">
                    Ser la plataforma de referencia para la gestión de consorcios en Latinoamérica, transformando una industria que durante décadas operó con herramientas desactualizadas.
                </p>
            </div>
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 p-8 lg:p-10" x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
                <div class="w-12 h-12 bg-success/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="text-2xl font-black text-white mb-4">Nuestra misión</h3>
                <p class="text-white/70 font-medium leading-relaxed">
                    Empoderar a los administradores de consorcios con tecnología inteligente, eliminando tareas repetitivas y permitiéndoles dedicar su tiempo a lo que realmente importa: sus clientes.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Valores --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 lg:mb-20" x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
            <span class="inline-block px-3 py-1 bg-warning/10 text-warning font-black text-xs uppercase tracking-[0.2em] rounded-full mb-6">Valores</span>
            <h2 class="text-3xl lg:text-4xl font-black text-text-primary tracking-tight leading-[1.1]">
                Lo que guía cada decisión
            </h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
            <div class="text-center p-6">
                <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl">🎯</span>
                </div>
                <h4 class="font-black text-text-primary text-lg mb-2">Foco</h4>
                <p class="text-text-secondary font-medium text-sm leading-relaxed">Nos especializamos en un solo sector y lo hacemos mejor que nadie.</p>
            </div>
            <div class="text-center p-6">
                <div class="w-14 h-14 bg-success/10 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl">🔍</span>
                </div>
                <h4 class="font-black text-text-primary text-lg mb-2">Transparencia</h4>
                <p class="text-text-secondary font-medium text-sm leading-relaxed">Sin letras chicas, sin costos ocultos, sin compromisos forzados.</p>
            </div>
            <div class="text-center p-6">
                <div class="w-14 h-14 bg-warning/10 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl">🚀</span>
                </div>
                <h4 class="font-black text-text-primary text-lg mb-2">Innovación</h4>
                <p class="text-text-secondary font-medium text-sm leading-relaxed">Incorporamos IA y automatización antes de que el mercado lo pida.</p>
            </div>
            <div class="text-center p-6">
                <div class="w-14 h-14 bg-danger/10 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl">🤝</span>
                </div>
                <h4 class="font-black text-text-primary text-lg mb-2">Cercanía</h4>
                <p class="text-text-secondary font-medium text-sm leading-relaxed">Cada cliente tiene acceso directo a nuestro equipo, sin intermediarios.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA final --}}
@include('marketing.components.mission-cta')

@endsection

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
                    Te guiamos desde la implementación, te capacitamos, y seguimos presentes después. Soporte de personas que entienden la administración de consorcios — no un centro de llamadas genérico.
                </p>
                <ul class="mt-5 space-y-2">
                    <li class="flex items-center gap-2 text-sm text-text-secondary font-medium">
                        <svg class="w-4 h-4 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        Implementación acompañada en 30 días
                    </li>
                    <li class="flex items-center gap-2 text-sm text-text-secondary font-medium">
                        <svg class="w-4 h-4 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        Capacitación continua incluida
                    </li>
                    <li class="flex items-center gap-2 text-sm text-text-secondary font-medium">
                        <svg class="w-4 h-4 text-primary shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        Respuesta en menos de 4 horas hábiles
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Acompañamiento — Sección dedicada --}}
<section class="py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            {{-- Texto --}}
            <div x-data x-intersect.once="$el.classList.add('animate-section-reveal')">
                <span class="inline-block px-3 py-1 bg-primary/10 text-primary font-black text-xs uppercase tracking-[0.2em] rounded-full mb-6">Cómo trabajamos</span>
                <h2 class="text-3xl lg:text-4xl font-black text-text-primary tracking-tight leading-[1.1] mb-6">
                    Un aliado en tu escritorio.<br>No solo un software.
                </h2>
                <div class="space-y-4 text-text-secondary font-medium leading-relaxed mb-8">
                    <p>
                        Entendemos que cambiar de sistema — o digitalizarse por primera vez — genera dudas reales. Por eso no te mandamos a leer un manual de 80 páginas ni te dejamos solo con un tutorial de YouTube.
                    </p>
                    <p>
                        Tenemos un equipo dedicado a que tu transición sea simple, rápida y sin sorpresas. El mismo equipo que te ayuda en el día uno sigue disponible en el mes doce.
                    </p>
                </div>
                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-black text-text-primary mb-1">Implementación en 30 días</h4>
                            <p class="text-sm text-text-secondary">Un especialista te guía desde la migración de datos hasta el primer cierre de mes. Sin improvisación.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
                        </div>
                        <div>
                            <h4 class="font-black text-text-primary mb-1">Capacitación continua sin costo extra</h4>
                            <p class="text-sm text-text-secondary">Sesiones en vivo, tutoriales y documentación actualizada. Tu equipo aprende al ritmo que necesita.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/></svg>
                        </div>
                        <div>
                            <h4 class="font-black text-text-primary mb-1">Soporte que responde en menos de 4 horas</h4>
                            <p class="text-sm text-text-secondary">Canal directo con el equipo técnico. Personas que entienden tu trabajo, no scripts genéricos.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-black text-text-primary mb-1">Presencia a largo plazo</h4>
                            <p class="text-sm text-text-secondary">Después del alta no desaparecemos. Crecés vos, crecemos con vos. Esa es nuestra manera de hacer negocio.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Panel visual --}}
            <div class="relative" x-data x-intersect.once="$el.classList.add('animate-section-reveal')">

                {{-- Cita compacta --}}
                <div class="bg-slate-900 rounded-2xl p-5 border border-white/10 mb-4">
                    <div class="flex gap-2 mb-3">
                        <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            Lo que más valoro no es solo el sistema — es que siempre hay alguien para responderme. Cuando tengo una duda en el cierre de mes, me responden en horas.
                        </p>
                    </div>
                    <div class="flex items-center gap-2 pt-3 border-t border-white/10">
                        <div class="w-7 h-7 bg-primary/20 rounded-full flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5 text-primary-light" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <div>
                            <p class="text-white text-xs font-bold">Administrador de consorcios</p>
                            <p class="text-slate-500 text-[11px]">Buenos Aires, Argentina</p>
                        </div>
                    </div>
                </div>

                {{-- 3 KPIs en fila --}}
                <div class="grid grid-cols-3 gap-3">
                    <div class="bg-primary/10 border border-primary/20 rounded-xl p-3 text-center">
                        <div class="text-lg font-black text-primary tracking-tighter">&lt; 4 hs</div>
                        <div class="text-[11px] text-text-tertiary font-medium mt-0.5">Respuesta</div>
                    </div>
                    <div class="bg-primary/10 border border-primary/20 rounded-xl p-3 text-center">
                        <div class="text-lg font-black text-primary tracking-tighter">30 días</div>
                        <div class="text-[11px] text-text-tertiary font-medium mt-0.5">Implementación</div>
                    </div>
                    <div class="bg-primary/10 border border-primary/20 rounded-xl p-3 text-center">
                        <div class="text-lg font-black text-primary tracking-tighter">100%</div>
                        <div class="text-[11px] text-text-tertiary font-medium mt-0.5">Humano</div>
                    </div>
                </div>

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

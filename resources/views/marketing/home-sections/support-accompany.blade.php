{{-- Acompañamiento — Diferencial clave CEO Online --}}
<section class="py-20 lg:py-28 bg-slate-900 relative overflow-hidden" id="acompanamiento">
    <div class="absolute inset-0 bg-texture-dots opacity-[0.03] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        {{-- Header --}}
        <div class="max-w-3xl mb-12 lg:mb-14">
            <span class="inline-block px-4 py-1.5 bg-primary/20 text-primary-light font-black text-xs uppercase tracking-[0.2em] rounded-full mb-6">Acompañamiento</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white leading-[1.08] tracking-tight mb-6">
                No sos un cliente más.<br>Sos un caso de éxito.
            </h2>
            <p class="text-lg text-slate-300 font-medium leading-relaxed max-w-2xl">
                Que el sistema funcione bien es el punto de partida. Que tengas a alguien real para ayudarte a sacarle el máximo provecho — eso es lo que nos diferencia.
            </p>
        </div>

        {{-- Rail + Panel, igual que pain-points --}}
        <div class="rounded-3xl border border-white/10 bg-slate-800/60 backdrop-blur-sm shadow-[0_24px_70px_-40px_rgba(0,0,0,0.6)] overflow-hidden"
             x-data="{
                active: 0,
                timer: null,
                duration: 5000,
                items: 4,
                autoplay: true,
                start() {
                    if (!this.autoplay) return;
                    this.stop();
                    this.timer = setInterval(() => {
                        this.active = (this.active + 1) % this.items;
                    }, this.duration);
                },
                stop() {
                    if (this.timer) clearInterval(this.timer);
                    this.timer = null;
                },
                choose(index) {
                    this.active = index;
                    this.start();
                }
             }"
             x-init="if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) autoplay = false; start();"
             @mouseenter="stop()"
             @mouseleave="start()"
             @tab-hidden.window="stop()"
             @tab-visible.window="start()">

            <div class="grid lg:grid-cols-12">

                {{-- Rail izquierdo --}}
                <aside class="lg:col-span-5 bg-slate-800/80 border-b lg:border-b-0 lg:border-r border-white/10 p-5 sm:p-7 lg:p-8">
                    <p class="text-xs font-black uppercase tracking-[0.15em] text-slate-400 mb-4">Cómo te acompañamos</p>
                    <div class="space-y-3">

                        <button type="button" @click="choose(0)" class="diagnostic-item w-full text-left rounded-2xl p-4 transition-all duration-300"
                                :class="active === 0 ? 'bg-primary/20 ring-1 ring-primary/40 shadow-sm' : 'bg-white/5 hover:bg-white/10 border border-white/10'">
                            <div class="flex items-start justify-between gap-4">
                                <h3 class="text-base sm:text-lg font-black tracking-tight" :class="active === 0 ? 'text-primary-light' : 'text-white'">Implementación acompañada</h3>
                                <span class="text-[11px] font-black uppercase tracking-[0.14em]" :class="active === 0 ? 'text-primary-light' : 'text-slate-500'">01</span>
                            </div>
                            <p class="mt-2 text-sm text-slate-400">Un especialista a tu lado desde el día uno hasta el primer cierre.</p>
                            <div class="diagnostic-progress mt-4"><span :class="active === 0 ? 'diagnostic-progress-fill is-active' : 'diagnostic-progress-fill'" :style="`animation-duration:${duration}ms`"></span></div>
                        </button>

                        <button type="button" @click="choose(1)" class="diagnostic-item w-full text-left rounded-2xl p-4 transition-all duration-300"
                                :class="active === 1 ? 'bg-primary/20 ring-1 ring-primary/40 shadow-sm' : 'bg-white/5 hover:bg-white/10 border border-white/10'">
                            <div class="flex items-start justify-between gap-4">
                                <h3 class="text-base sm:text-lg font-black tracking-tight" :class="active === 1 ? 'text-primary-light' : 'text-white'">Capacitación continua</h3>
                                <span class="text-[11px] font-black uppercase tracking-[0.14em]" :class="active === 1 ? 'text-primary-light' : 'text-slate-500'">02</span>
                            </div>
                            <p class="mt-2 text-sm text-slate-400">Sesiones en vivo, tutoriales y documentación siempre actualizada.</p>
                            <div class="diagnostic-progress mt-4"><span :class="active === 1 ? 'diagnostic-progress-fill is-active' : 'diagnostic-progress-fill'" :style="`animation-duration:${duration}ms`"></span></div>
                        </button>

                        <button type="button" @click="choose(2)" class="diagnostic-item w-full text-left rounded-2xl p-4 transition-all duration-300"
                                :class="active === 2 ? 'bg-primary/20 ring-1 ring-primary/40 shadow-sm' : 'bg-white/5 hover:bg-white/10 border border-white/10'">
                            <div class="flex items-start justify-between gap-4">
                                <h3 class="text-base sm:text-lg font-black tracking-tight" :class="active === 2 ? 'text-primary-light' : 'text-white'">Soporte de personas reales</h3>
                                <span class="text-[11px] font-black uppercase tracking-[0.14em]" :class="active === 2 ? 'text-primary-light' : 'text-slate-500'">03</span>
                            </div>
                            <p class="mt-2 text-sm text-slate-400">Sin chatbots ni tickets perdidos. Respondemos en menos de 4 horas hábiles.</p>
                            <div class="diagnostic-progress mt-4"><span :class="active === 2 ? 'diagnostic-progress-fill is-active' : 'diagnostic-progress-fill'" :style="`animation-duration:${duration}ms`"></span></div>
                        </button>

                        <button type="button" @click="choose(3)" class="diagnostic-item w-full text-left rounded-2xl p-4 transition-all duration-300"
                                :class="active === 3 ? 'bg-primary/20 ring-1 ring-primary/40 shadow-sm' : 'bg-white/5 hover:bg-white/10 border border-white/10'">
                            <div class="flex items-start justify-between gap-4">
                                <h3 class="text-base sm:text-lg font-black tracking-tight" :class="active === 3 ? 'text-primary-light' : 'text-white'">Una relación, no una transacción</h3>
                                <span class="text-[11px] font-black uppercase tracking-[0.14em]" :class="active === 3 ? 'text-primary-light' : 'text-slate-500'">04</span>
                            </div>
                            <p class="mt-2 text-sm text-slate-400">Después del alta seguimos presentes. Tu crecimiento es nuestro objetivo.</p>
                            <div class="diagnostic-progress mt-4"><span :class="active === 3 ? 'diagnostic-progress-fill is-active' : 'diagnostic-progress-fill'" :style="`animation-duration:${duration}ms`"></span></div>
                        </button>

                    </div>
                </aside>

                {{-- Panel derecho --}}
                <div class="lg:col-span-7 p-5 sm:p-7 lg:p-8 bg-slate-900">
                    <div class="relative" style="min-height: 480px;">

                        <div x-show="active === 0"
                             x-transition:enter="transition-opacity duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition-opacity duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="absolute inset-x-0 top-0 w-full">
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-primary-light mb-3">Paso 01</p>
                            <h3 class="text-2xl lg:text-3xl font-black tracking-tight text-white mb-3">En 30 días estás operando</h3>
                            <p class="text-slate-300 font-medium mb-6">Migramos tus datos, configuramos tu cartera y hacemos el primer cierre con vos. No empezás solo ni a ciegas.</p>
                            <div class="space-y-3">
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Migración de datos desde tu sistema actual</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Configuración de consorcios y propietarios</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Primer cierre de mes acompañado paso a paso</span>
                                </div>
                            </div>
                            <div class="mt-6 inline-flex items-center gap-2 bg-primary/20 border border-primary/30 rounded-xl px-5 py-3">
                                <span class="text-2xl font-black text-primary-light tracking-tighter">30 días</span>
                                <span class="text-sm font-bold text-slate-400 uppercase tracking-wide">para estar operativo</span>
                            </div>
                        </div>

                        <div x-show="active === 1"
                             x-transition:enter="transition-opacity duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition-opacity duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="absolute inset-x-0 top-0 w-full">
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-primary-light mb-3">Paso 02</p>
                            <h3 class="text-2xl lg:text-3xl font-black tracking-tight text-white mb-3">Aprendés a tu ritmo, sin costo extra</h3>
                            <p class="text-slate-300 font-medium mb-6">Capacitamos a tu equipo con sesiones en vivo, videos y documentación siempre actualizada. No hay módulos de pago ni certificaciones forzadas.</p>
                            <div class="space-y-3">
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Sesiones en vivo con el equipo de CEO Online</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Biblioteca de tutoriales en video bajo demanda</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Documentación actualizada con cada nueva función</span>
                                </div>
                            </div>
                            <div class="mt-6 inline-flex items-center gap-2 bg-primary/20 border border-primary/30 rounded-xl px-5 py-3">
                                <span class="text-2xl font-black text-primary-light tracking-tighter">100%</span>
                                <span class="text-sm font-bold text-slate-400 uppercase tracking-wide">incluido en el plan</span>
                            </div>
                        </div>

                        <div x-show="active === 2"
                             x-transition:enter="transition-opacity duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition-opacity duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="absolute inset-x-0 top-0 w-full">
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-primary-light mb-3">Paso 03</p>
                            <h3 class="text-2xl lg:text-3xl font-black tracking-tight text-white mb-3">Personas que entienden tu trabajo</h3>
                            <p class="text-slate-300 font-medium mb-6">Cuando tenés una duda en el cierre de mes, no abrís un ticket que desaparece en una cola. Hablás directamente con alguien del equipo que conoce CEO Online — y tu problema.</p>
                            <div class="space-y-3">
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Canal directo sin chatbots ni menús interminables</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Especialistas en administración de consorcios</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Resolución en la misma conversación, sin reenvíos</span>
                                </div>
                            </div>
                            <div class="mt-6 inline-flex items-center gap-2 bg-primary/20 border border-primary/30 rounded-xl px-5 py-3">
                                <span class="text-2xl font-black text-primary-light tracking-tighter">&lt; 4 hs</span>
                                <span class="text-sm font-bold text-slate-400 uppercase tracking-wide">tiempo de respuesta</span>
                            </div>
                        </div>

                        <div x-show="active === 3"
                             x-transition:enter="transition-opacity duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition-opacity duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="absolute inset-x-0 top-0 w-full">
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-primary-light mb-3">Paso 04</p>
                            <h3 class="text-2xl lg:text-3xl font-black tracking-tight text-white mb-3">Después del alta seguimos presentes</h3>
                            <p class="text-slate-300 font-medium mb-6">No somos un software de banda ancha que se olvida de vos en el mes 2. Escuchamos pedidos de mejora, te avisamos de nuevas funciones y acompañamos tu crecimiento de cartera.</p>
                            <div class="space-y-3">
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Actualizaciones y mejoras incluidas sin costo</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Canal para proponer funciones y dar feedback</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
                                    <svg class="w-5 h-5 text-primary-light shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <span class="text-sm font-medium text-slate-300">Acompañamiento cuando crecés y sumás consorcios</span>
                                </div>
                            </div>
                            <div class="mt-6 inline-flex items-center gap-2 bg-primary/20 border border-primary/30 rounded-xl px-5 py-3">
                                <span class="text-2xl font-black text-primary-light tracking-tighter">25+</span>
                                <span class="text-sm font-bold text-slate-400 uppercase tracking-wide">años de relaciones activas</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- Pain Points — Slack-like Interactive Rail --}}
<section class="pt-24 lg:pt-40 pb-20 lg:pb-28 relative overflow-hidden z-10" id="pain-points"
         x-data="{
            active: 0,
            timer: null,
            duration: 5200,
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
         @mouseleave="start()">
    <div class="absolute inset-x-0 top-0 h-96 bg-gradient-to-b from-primary/15 via-primary/6 to-transparent pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-4xl mx-auto mb-12 lg:mb-16">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-text-primary leading-[1.1] tracking-tight">
                Si tu dia arranca apagando incendios, no es falta de esfuerzo: es falta de sistema.
            </h2>
            <p class="mt-5 text-lg text-text-secondary font-medium leading-relaxed">
                Estas fricciones se repiten mes a mes. Elegi una y mira como impacta en tu operacion diaria.
            </p>
        </div>

        <div class="rounded-3xl border border-border-light bg-white shadow-[0_24px_70px_-40px_rgba(15,23,42,0.45)] overflow-hidden">
            <div class="grid lg:grid-cols-12">
                {{-- Left rail: titles + auto progress --}}
                <aside class="lg:col-span-5 bg-gradient-to-b from-slate-50 to-white border-b lg:border-b-0 lg:border-r border-border-light p-5 sm:p-7 lg:p-8">
                    <p class="text-xs font-black uppercase tracking-[0.15em] text-slate-500 mb-4">Situaciones tipicas</p>

                    <div class="space-y-3">
                        <button type="button" @click="choose(0)" class="diagnostic-item w-full text-left rounded-2xl p-4 transition-all duration-300"
                                :class="active === 0 ? 'bg-primary/5 ring-1 ring-primary/20 shadow-sm' : 'bg-white hover:bg-slate-50 border border-border-light'">
                            <div class="flex items-start justify-between gap-4">
                                <h3 class="text-base sm:text-lg font-black tracking-tight" :class="active === 0 ? 'text-primary-dark' : 'text-text-primary'">Cierre de expensas fuera de control</h3>
                                <span class="text-[11px] font-black uppercase tracking-[0.14em]" :class="active === 0 ? 'text-primary' : 'text-slate-400'">01</span>
                            </div>
                            <p class="mt-2 text-sm text-text-secondary">Correcciones de ultimo momento, calculos manuales y reclamos por diferencias.</p>
                            <div class="diagnostic-progress mt-4"><span :class="active === 0 ? 'diagnostic-progress-fill is-active' : 'diagnostic-progress-fill'" :style="`animation-duration:${duration}ms`"></span></div>
                        </button>

                        <button type="button" @click="choose(1)" class="diagnostic-item w-full text-left rounded-2xl p-4 transition-all duration-300"
                                :class="active === 1 ? 'bg-primary/5 ring-1 ring-primary/20 shadow-sm' : 'bg-white hover:bg-slate-50 border border-border-light'">
                            <div class="flex items-start justify-between gap-4">
                                <h3 class="text-base sm:text-lg font-black tracking-tight" :class="active === 1 ? 'text-primary-dark' : 'text-text-primary'">Mensajes repetidos todo el dia</h3>
                                <span class="text-[11px] font-black uppercase tracking-[0.14em]" :class="active === 1 ? 'text-primary' : 'text-slate-400'">02</span>
                            </div>
                            <p class="mt-2 text-sm text-text-secondary">El equipo responde siempre lo mismo por canales distintos sin ganar tiempo.</p>
                            <div class="diagnostic-progress mt-4"><span :class="active === 1 ? 'diagnostic-progress-fill is-active' : 'diagnostic-progress-fill'" :style="`animation-duration:${duration}ms`"></span></div>
                        </button>

                        <button type="button" @click="choose(2)" class="diagnostic-item w-full text-left rounded-2xl p-4 transition-all duration-300"
                                :class="active === 2 ? 'bg-primary/5 ring-1 ring-primary/20 shadow-sm' : 'bg-white hover:bg-slate-50 border border-border-light'">
                            <div class="flex items-start justify-between gap-4">
                                <h3 class="text-base sm:text-lg font-black tracking-tight" :class="active === 2 ? 'text-primary-dark' : 'text-text-primary'">Facturas y comprobantes acumulados</h3>
                                <span class="text-[11px] font-black uppercase tracking-[0.14em]" :class="active === 2 ? 'text-primary' : 'text-slate-400'">03</span>
                            </div>
                            <p class="mt-2 text-sm text-text-secondary">La carga manual come horas y aumenta riesgo de errores evitables.</p>
                            <div class="diagnostic-progress mt-4"><span :class="active === 2 ? 'diagnostic-progress-fill is-active' : 'diagnostic-progress-fill'" :style="`animation-duration:${duration}ms`"></span></div>
                        </button>

                        <button type="button" @click="choose(3)" class="diagnostic-item w-full text-left rounded-2xl p-4 transition-all duration-300"
                                :class="active === 3 ? 'bg-primary/5 ring-1 ring-primary/20 shadow-sm' : 'bg-white hover:bg-slate-50 border border-border-light'">
                            <div class="flex items-start justify-between gap-4">
                                <h3 class="text-base sm:text-lg font-black tracking-tight" :class="active === 3 ? 'text-primary-dark' : 'text-text-primary'">Informacion partida en varios lugares</h3>
                                <span class="text-[11px] font-black uppercase tracking-[0.14em]" :class="active === 3 ? 'text-primary' : 'text-slate-400'">04</span>
                            </div>
                            <p class="mt-2 text-sm text-text-secondary">Planillas, chats y archivos sueltos: buscar datos frena cada decision.</p>
                            <div class="diagnostic-progress mt-4"><span :class="active === 3 ? 'diagnostic-progress-fill is-active' : 'diagnostic-progress-fill'" :style="`animation-duration:${duration}ms`"></span></div>
                        </button>
                    </div>
                </aside>

                {{-- Right panel: mockup synced with active title --}}
                <div class="lg:col-span-7 p-5 sm:p-7 lg:p-8 bg-white">
                    <div class="min-h-[460px]">
                        <div x-show="active === 0" x-transition.opacity.duration.350ms>
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-primary mb-3">Caso 01</p>
                            <h3 class="text-2xl lg:text-3xl font-black tracking-tight text-text-primary mb-3">Cierre mensual sin cuello de botella</h3>
                            <p class="text-text-secondary font-medium mb-5">Automatiza calculos de expensas y evita volver a empezar cuando aparece una diferencia de ultimo minuto.</p>
                            <div class="rounded-2xl border border-border-light overflow-hidden">
                                @include('marketing.components.ui-mockup', ['type' => 'table', 'label' => 'Liquidaciones - Cierre de mes'])
                            </div>
                        </div>

                        <div x-show="active === 1" x-transition.opacity.duration.350ms>
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-primary mb-3">Caso 02</p>
                            <h3 class="text-2xl lg:text-3xl font-black tracking-tight text-text-primary mb-3">Canal unico para propietarios</h3>
                            <p class="text-text-secondary font-medium mb-5">Tus propietarios consultan estado de cuenta, vencimientos y avisos sin depender de mensajes manuales.</p>
                            <div class="rounded-2xl border border-border-light overflow-hidden">
                                @include('marketing.components.ui-mockup', ['type' => 'mobile', 'label' => 'Portal de propietarios'])
                            </div>
                        </div>

                        <div x-show="active === 2" x-transition.opacity.duration.350ms>
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-primary mb-3">Caso 03</p>
                            <h3 class="text-2xl lg:text-3xl font-black tracking-tight text-text-primary mb-3">Carga inteligente de comprobantes</h3>
                            <p class="text-text-secondary font-medium mb-5">Procesa facturas de proveedores en segundos con extraccion automatica de datos clave.</p>
                            <div class="rounded-2xl border border-border-light overflow-hidden">
                                @include('marketing.components.ui-mockup', ['type' => 'invoice', 'label' => 'Lectura automatica de factura'])
                            </div>
                        </div>

                        <div x-show="active === 3" x-transition.opacity.duration.350ms>
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-primary mb-3">Caso 04</p>
                            <h3 class="text-2xl lg:text-3xl font-black tracking-tight text-text-primary mb-3">Vision completa de toda tu cartera</h3>
                            <p class="text-text-secondary font-medium mb-5">Concentra documentos, comunicaciones y metricas en un solo panel para decidir mas rapido.</p>
                            <div class="rounded-2xl border border-border-light overflow-hidden">
                                @include('marketing.components.ui-mockup', ['type' => 'dashboard', 'label' => 'Panel central de administracion'])
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-5 border-t border-border-light flex flex-col sm:flex-row gap-4 sm:items-center sm:justify-between">
                        <p class="text-sm font-semibold text-text-secondary">Cuando el problema se repite todos los meses, la solucion tiene que ser sistemica.</p>
                        <a href="#product-showcase" class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-primary text-white text-sm font-black uppercase tracking-wide hover:bg-primary-dark transition-all duration-300">
                            Ver como funciona
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

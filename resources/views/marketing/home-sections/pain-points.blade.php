{{-- Pain Points — Conversion-focused Diagnostic Section --}}
<section class="py-20 lg:py-28 bg-slate-50 relative overflow-hidden" id="pain-points"
         x-data="{ active: 0, shown: false }"
         x-intersect.once="shown = true">
    <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-primary/10 to-transparent pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        {{-- Section Header --}}
        <div class="text-center max-w-4xl mx-auto mb-12 lg:mb-16">
            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-[11px] font-black uppercase tracking-[0.18em] bg-danger/10 text-danger mb-5">
                Diagnostico real de administracion
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary leading-[1.05] tracking-tight">
                Si tu dia arranca apagando incendios, no es falta de esfuerzo: es falta de sistema.
            </h2>
            <p class="mt-5 text-lg text-text-secondary font-medium leading-relaxed">
                Estas fricciones operativas se repiten todos los meses y terminan impactando en tu tiempo, en tu equipo y en la percepcion de los propietarios.
            </p>
        </div>

        {{-- Interactive Diagnostic Layout --}}
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-10">
            {{-- Left: Tension and urgency --}}
            <aside class="lg:col-span-4">
                <div class="rounded-3xl border border-danger/20 bg-white p-7 lg:p-8 shadow-sm"
                     :class="shown ? 'animate-section-reveal' : 'opacity-0'">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-danger/40"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-danger"></span>
                        </span>
                        <p class="text-xs font-black uppercase tracking-[0.16em] text-danger">Alerta de desgaste</p>
                    </div>

                    <p class="text-2xl lg:text-3xl font-black text-text-primary tracking-tight leading-tight mb-5">
                        No es un "mes complicado".<br>
                        Es un patron que te quita rentabilidad.
                    </p>

                    <p class="text-text-secondary font-medium leading-relaxed mb-6">
                        Cuanto mas se normaliza el caos, mas dificil es crecer sin perder calidad de atencion.
                    </p>

                    <div class="space-y-3 text-sm">
                        <div class="flex items-center justify-between rounded-xl bg-slate-50 border border-border-light px-4 py-3">
                            <span class="font-bold text-text-primary">Tiempo perdido</span>
                            <span class="font-black text-danger">3-5 hs/dia</span>
                        </div>
                        <div class="flex items-center justify-between rounded-xl bg-slate-50 border border-border-light px-4 py-3">
                            <span class="font-bold text-text-primary">Consultas repetidas</span>
                            <span class="font-black text-warning">Todos los dias</span>
                        </div>
                        <div class="flex items-center justify-between rounded-xl bg-slate-50 border border-border-light px-4 py-3">
                            <span class="font-bold text-text-primary">Errores evitables</span>
                            <span class="font-black text-primary">Cada cierre</span>
                        </div>
                    </div>
                </div>
            </aside>

            {{-- Right: Problem selector + detail panel --}}
            <div class="lg:col-span-8">
                <div class="rounded-3xl bg-white border border-border-light shadow-sm overflow-hidden"
                     :class="shown ? 'animate-section-reveal' : 'opacity-0'">
                    <div class="p-4 sm:p-5 border-b border-border-light bg-gradient-to-r from-slate-50 to-white">
                        <p class="text-xs font-black uppercase tracking-[0.15em] text-slate-500">Selecciona el escenario que mas te representa</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-3 p-4 sm:p-5">
                        <button type="button"
                                @click="active = 0"
                                class="group text-left rounded-2xl border p-4 transition-all duration-300"
                                :class="active === 0 ? 'border-primary/30 bg-primary/5 shadow-sm ring-2 ring-primary/10' : 'border-border-light hover:border-primary/25 hover:-translate-y-0.5'">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-xs font-black uppercase tracking-[0.14em] text-danger">Cierre de expensas</span>
                                <span class="text-xs font-bold text-slate-500">Mes a mes</span>
                            </div>
                            <p class="text-base font-black text-text-primary leading-tight">El cierre te bloquea varios dias y siempre aparece un ajuste de ultimo minuto.</p>
                        </button>

                        <button type="button"
                                @click="active = 1"
                                class="group text-left rounded-2xl border p-4 transition-all duration-300"
                                :class="active === 1 ? 'border-primary/30 bg-primary/5 shadow-sm ring-2 ring-primary/10' : 'border-border-light hover:border-primary/25 hover:-translate-y-0.5'">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-xs font-black uppercase tracking-[0.14em] text-warning">Consultas repetidas</span>
                                <span class="text-xs font-bold text-slate-500">Todos los dias</span>
                            </div>
                            <p class="text-base font-black text-text-primary leading-tight">Tu equipo responde lo mismo por WhatsApp, telefono y correo una y otra vez.</p>
                        </button>

                        <button type="button"
                                @click="active = 2"
                                class="group text-left rounded-2xl border p-4 transition-all duration-300"
                                :class="active === 2 ? 'border-primary/30 bg-primary/5 shadow-sm ring-2 ring-primary/10' : 'border-border-light hover:border-primary/25 hover:-translate-y-0.5'">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-xs font-black uppercase tracking-[0.14em] text-primary">Carga manual</span>
                                <span class="text-xs font-bold text-slate-500">Diario</span>
                            </div>
                            <p class="text-base font-black text-text-primary leading-tight">Facturas y comprobantes se acumulan, y cada carga manual agrega riesgo de error.</p>
                        </button>

                        <button type="button"
                                @click="active = 3"
                                class="group text-left rounded-2xl border p-4 transition-all duration-300"
                                :class="active === 3 ? 'border-primary/30 bg-primary/5 shadow-sm ring-2 ring-primary/10' : 'border-border-light hover:border-primary/25 hover:-translate-y-0.5'">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-xs font-black uppercase tracking-[0.14em] text-slate-700">Info dispersa</span>
                                <span class="text-xs font-bold text-slate-500">Siempre</span>
                            </div>
                            <p class="text-base font-black text-text-primary leading-tight">Planillas, chats y carpetas: encontrar un dato simple te corta el ritmo de trabajo.</p>
                        </button>
                    </div>

                    <div class="border-t border-border-light p-6 sm:p-8">
                        <div x-show="active === 0" x-transition.opacity.duration.300ms>
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-danger mb-3">Escenario 1</p>
                            <h3 class="text-2xl font-black text-text-primary tracking-tight mb-4">Cierre bajo presion: todo depende de vos.</h3>
                            <p class="text-text-secondary font-medium leading-relaxed mb-5">Cuando el cierre depende de cruces manuales, cualquier diferencia se convierte en reclamo. Y el reclamo siempre llega en el peor momento.</p>
                            <div class="rounded-2xl border border-success/20 bg-success/5 p-4">
                                <p class="text-sm font-bold text-success">Con CEOnline: proceso guiado de liquidacion + calculo automatico por coeficientes + comprobantes listos para enviar.</p>
                            </div>
                        </div>

                        <div x-show="active === 1" x-transition.opacity.duration.300ms>
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-warning mb-3">Escenario 2</p>
                            <h3 class="text-2xl font-black text-text-primary tracking-tight mb-4">Atencion reactiva: tu equipo corre detras de mensajes.</h3>
                            <p class="text-text-secondary font-medium leading-relaxed mb-5">No es que falte atencion: falta un canal donde cada propietario vea su estado sin depender de una respuesta humana.</p>
                            <div class="rounded-2xl border border-success/20 bg-success/5 p-4">
                                <p class="text-sm font-bold text-success">Con CEOnline: portal de propietarios 24/7 con deuda, vencimientos, documentos y novedades en tiempo real.</p>
                            </div>
                        </div>

                        <div x-show="active === 2" x-transition.opacity.duration.300ms>
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-primary mb-3">Escenario 3</p>
                            <h3 class="text-2xl font-black text-text-primary tracking-tight mb-4">Carga administrativa infinita: tareas que no agregan valor.</h3>
                            <p class="text-text-secondary font-medium leading-relaxed mb-5">Cada factura cargada a mano es tiempo que no usas para mejorar gestion, prevenir conflictos o captar nuevos consorcios.</p>
                            <div class="rounded-2xl border border-success/20 bg-success/5 p-4">
                                <p class="text-sm font-bold text-success">Con CEOnline: lectura automatica de comprobantes y centralizacion de gastos sin repetir datos.</p>
                            </div>
                        </div>

                        <div x-show="active === 3" x-transition.opacity.duration.300ms>
                            <p class="text-xs font-black uppercase tracking-[0.14em] text-slate-700 mb-3">Escenario 4</p>
                            <h3 class="text-2xl font-black text-text-primary tracking-tight mb-4">Operacion fragmentada: demasiados lugares para buscar lo mismo.</h3>
                            <p class="text-text-secondary font-medium leading-relaxed mb-5">Cuando la informacion vive en sistemas distintos, la respuesta tarda, la confianza baja y la toma de decisiones se vuelve lenta.</p>
                            <div class="rounded-2xl border border-success/20 bg-success/5 p-4">
                                <p class="text-sm font-bold text-success">Con CEOnline: panel unico de cartera, documentos, comunicaciones y metricas para decidir rapido.</p>
                            </div>
                        </div>

                        <div class="mt-7 pt-6 border-t border-border-light flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <p class="text-sm text-text-secondary font-semibold">Si te identificaste con 2 o mas escenarios, ya tenes margen claro de mejora.</p>
                            <a href="#product-showcase" class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-primary text-white text-sm font-black uppercase tracking-wide hover:bg-primary-dark hover:scale-[1.02] transition-all duration-300">
                                Ver como lo resolvemos
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

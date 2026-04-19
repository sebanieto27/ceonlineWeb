{{-- Pain Points — Emotional Identification Section --}}
<section class="py-20 lg:py-28 bg-white" id="pain-points">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-14 lg:mb-20">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary leading-[1.08] tracking-tight animate-fade-in-up">
                ¿Esto te resulta familiar?
            </h2>
        </div>

        {{-- Pain Cards Grid --}}
        <div class="grid sm:grid-cols-2 gap-6 lg:gap-8 mb-14 lg:mb-20"
             x-data="{ shown: false, expanded: null }"
             x-intersect.once="shown = true">

            {{-- Card 1: Cierre de mes --}}
            <div class="group relative rounded-2xl border border-border-light bg-white transition-all duration-500 cursor-pointer overflow-hidden"
                 :class="[shown ? 'animate-card-reveal' : 'opacity-0', expanded === 0 ? 'shadow-xl border-primary/30 ring-2 ring-primary/10' : 'hover:shadow-lg hover:border-slate-200']"
                 @click="expanded = expanded === 0 ? null : 0"
                 style="animation-delay: 0.1s">
                <div class="p-8">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-danger/10 flex items-center justify-center">
                            <svg class="w-6 h-6 text-danger" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <div class="w-8 h-8 rounded-full flex items-center justify-center transition-all duration-300" :class="expanded === 0 ? 'bg-primary text-white rotate-45' : 'bg-slate-100 text-slate-400 group-hover:bg-primary/10 group-hover:text-primary'">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-black text-text-primary mb-3 tracking-tight">El cierre de mes te consume días enteros</h3>
                    <p class="text-text-secondary font-medium leading-relaxed">Calcular expensas, distribuir gastos, generar PDFs… y si hay un error, empezar de nuevo.</p>
                </div>
                {{-- Expandable Solution --}}
                <div class="overflow-hidden transition-all duration-500 ease-out" :class="expanded === 0 ? 'max-h-[500px] opacity-100' : 'max-h-0 opacity-0'">
                    <div class="px-8 pb-8 border-t border-border-light">
                        <div class="pt-5 flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-success/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <div>
                                <p class="font-bold text-text-primary text-sm mb-1">Con CEOnline:</p>
                                <p class="text-text-secondary text-sm leading-relaxed">Liquidación automática con cálculo por coeficiente. De 3 días a 2 horas. Generación masiva de PDFs con un clic.</p>
                            </div>
                        </div>
                        <div class="mt-4 rounded-xl overflow-hidden border border-border-light">
                            @include('marketing.components.ui-mockup', ['type' => 'table', 'label' => 'Liquidaciones — Cierre Abril 2026'])
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 2: Propietarios --}}
            <div class="group relative rounded-2xl border border-border-light bg-white transition-all duration-500 cursor-pointer overflow-hidden"
                 :class="[shown ? 'animate-card-reveal' : 'opacity-0', expanded === 1 ? 'shadow-xl border-primary/30 ring-2 ring-primary/10' : 'hover:shadow-lg hover:border-slate-200']"
                 @click="expanded = expanded === 1 ? null : 1"
                 style="animation-delay: 0.2s">
                <div class="p-8">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-warning/10 flex items-center justify-center">
                            <svg class="w-6 h-6 text-warning" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                        </div>
                        <div class="w-8 h-8 rounded-full flex items-center justify-center transition-all duration-300" :class="expanded === 1 ? 'bg-primary text-white rotate-45' : 'bg-slate-100 text-slate-400 group-hover:bg-primary/10 group-hover:text-primary'">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-black text-text-primary mb-3 tracking-tight">Los propietarios llaman sin parar pidiendo información</h3>
                    <p class="text-text-secondary font-medium leading-relaxed">Cuánto deben, cuándo vence, qué se arregló… las mismas preguntas una y otra vez.</p>
                </div>
                <div class="overflow-hidden transition-all duration-500 ease-out" :class="expanded === 1 ? 'max-h-[500px] opacity-100' : 'max-h-0 opacity-0'">
                    <div class="px-8 pb-8 border-t border-border-light">
                        <div class="pt-5 flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-success/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <div>
                                <p class="font-bold text-text-primary text-sm mb-1">Con CEOnline:</p>
                                <p class="text-text-secondary text-sm leading-relaxed">Portal 24/7 donde cada propietario consulta expensas, pagos y novedades desde su celular. Menos llamadas, más autonomía.</p>
                            </div>
                        </div>
                        <div class="mt-4 rounded-xl overflow-hidden border border-border-light">
                            @include('marketing.components.ui-mockup', ['type' => 'mobile', 'label' => 'Portal Propietario'])
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 3: Facturas --}}
            <div class="group relative rounded-2xl border border-border-light bg-white transition-all duration-500 cursor-pointer overflow-hidden"
                 :class="[shown ? 'animate-card-reveal' : 'opacity-0', expanded === 2 ? 'shadow-xl border-primary/30 ring-2 ring-primary/10' : 'hover:shadow-lg hover:border-slate-200']"
                 @click="expanded = expanded === 2 ? null : 2"
                 style="animation-delay: 0.3s">
                <div class="p-8">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </div>
                        <div class="w-8 h-8 rounded-full flex items-center justify-center transition-all duration-300" :class="expanded === 2 ? 'bg-primary text-white rotate-45' : 'bg-slate-100 text-slate-400 group-hover:bg-primary/10 group-hover:text-primary'">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-black text-text-primary mb-3 tracking-tight">Las facturas de proveedores se apilan sin cargar</h3>
                    <p class="text-text-secondary font-medium leading-relaxed">Montos, CUIT, fechas de vencimiento… todo se carga a mano y siempre hay algo que se pierde.</p>
                </div>
                <div class="overflow-hidden transition-all duration-500 ease-out" :class="expanded === 2 ? 'max-h-[500px] opacity-100' : 'max-h-0 opacity-0'">
                    <div class="px-8 pb-8 border-t border-border-light">
                        <div class="pt-5 flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-success/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <div>
                                <p class="font-bold text-text-primary text-sm mb-1">Con CEOnline:</p>
                                <p class="text-text-secondary text-sm leading-relaxed">Sacale una foto a la factura y la IA extrae proveedor, monto, CUIT y fecha. Sin carga manual.</p>
                            </div>
                        </div>
                        <div class="mt-4 rounded-xl overflow-hidden border border-border-light">
                            @include('marketing.components.ui-mockup', ['type' => 'invoice', 'label' => 'IA — Factura Edenor S.A.'])
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 4: Información dispersa --}}
            <div class="group relative rounded-2xl border border-border-light bg-white transition-all duration-500 cursor-pointer overflow-hidden"
                 :class="[shown ? 'animate-card-reveal' : 'opacity-0', expanded === 3 ? 'shadow-xl border-primary/30 ring-2 ring-primary/10' : 'hover:shadow-lg hover:border-slate-200']"
                 @click="expanded = expanded === 3 ? null : 3"
                 style="animation-delay: 0.4s">
                <div class="p-8">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25a2.25 2.25 0 0 1-2.25-2.25v-2.25Z" />
                            </svg>
                        </div>
                        <div class="w-8 h-8 rounded-full flex items-center justify-center transition-all duration-300" :class="expanded === 3 ? 'bg-primary text-white rotate-45' : 'bg-slate-100 text-slate-400 group-hover:bg-primary/10 group-hover:text-primary'">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-black text-text-primary mb-3 tracking-tight">Tu información está dispersa entre planillas, WhatsApp y papeles</h3>
                    <p class="text-text-secondary font-medium leading-relaxed">No hay un solo lugar donde esté todo. Cada dato requiere buscar en tres sitios distintos.</p>
                </div>
                <div class="overflow-hidden transition-all duration-500 ease-out" :class="expanded === 3 ? 'max-h-[500px] opacity-100' : 'max-h-0 opacity-0'">
                    <div class="px-8 pb-8 border-t border-border-light">
                        <div class="pt-5 flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-success/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <div>
                                <p class="font-bold text-text-primary text-sm mb-1">Con CEOnline:</p>
                                <p class="text-text-secondary text-sm leading-relaxed">Un dashboard unificado con toda tu cartera, comunicaciones, documentos y métricas. Todo en un solo lugar.</p>
                            </div>
                        </div>
                        <div class="mt-4 rounded-xl overflow-hidden border border-border-light">
                            @include('marketing.components.ui-mockup', ['type' => 'dashboard', 'label' => 'CEO Online — Panel Central'])
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Transition Copy + Scroll hint --}}
        <div class="text-center">
            <p class="text-xl lg:text-2xl font-bold text-text-primary tracking-tight animate-fade-in-up">
                CEOnline centraliza todo en un solo sistema.
            </p>
            <p class="text-text-secondary font-medium mt-3 text-lg">
                Y lo hace de forma simple, rápida y sin curva de aprendizaje.
            </p>
            <div class="mt-8 animate-fade-in-up delay-300">
                <a href="#product-showcase" class="inline-flex items-center gap-2 text-primary font-bold text-sm uppercase tracking-wider hover:gap-3 transition-all">
                    Descubrí cómo funciona
                    <svg class="w-4 h-4 animate-bounce" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

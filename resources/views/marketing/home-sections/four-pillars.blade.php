{{-- Four Pillars — Unified White Background, Alternating Blocks --}}
<section class="relative overflow-hidden" id="pillars">

    {{-- PILAR 1: LIQUIDACIONES --}}
    <div class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- Text --}}
                <div>
                    <span class="inline-block px-4 py-1.5 bg-primary/10 text-primary font-black text-xs uppercase tracking-[0.2em] rounded-full mb-6">Liquidaciones</span>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary leading-[1.08] tracking-tight mb-6">
                        Cierre de mes sin estrés
                    </h3>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">Cálculo automático de expensas ordinarias y extraordinarias</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">Distribución precisa por coeficiente — sin errores manuales</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">Generación masiva de PDFs listos para enviar por email</span>
                        </li>
                    </ul>
                    <div class="flex items-baseline gap-3">
                        <span class="text-4xl lg:text-5xl font-black text-primary tracking-tighter">80h</span>
                        <span class="text-text-tertiary font-bold text-sm uppercase tracking-wider">mensuales recuperadas</span>
                    </div>
                </div>
                {{-- #PH-07 — Reemplazar con screenshot del listado de expensas generadas --}}
                <div class="relative">
                    @include('marketing.components.ui-mockup', ['type' => 'table', 'label' => 'CEO Online — Liquidaciones'])
                </div>
            </div>
        </div>
    </div>

    {{-- PILAR 2: PROPIETARIOS --}}
    <div class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- #PH-08 — Reemplazar con screenshot del portal propietario mobile --}}
                <div class="relative lg:order-1">
                    @include('marketing.components.ui-mockup', ['type' => 'mobile', 'label' => 'Portal Propietario'])
                </div>
                {{-- Text --}}
                <div class="lg:order-2">
                    <span class="inline-block px-4 py-1.5 bg-primary-light/10 text-primary-light font-black text-xs uppercase tracking-[0.2em] rounded-full mb-6">Propietarios</span>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary leading-[1.08] tracking-tight mb-6">
                        Propietarios informados, menos conflictos
                    </h3>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-light mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">Portal 24/7: expensas, pagos y novedades desde el celular</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-light mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">Comunicaciones y documentos compartidos en un solo lugar</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-light mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">Menos llamadas, menos conflictos, más transparencia</span>
                        </li>
                    </ul>
                    <div class="flex items-baseline gap-3">
                        <span class="text-4xl lg:text-5xl font-black text-primary-light tracking-tighter">42.000+</span>
                        <span class="text-text-tertiary font-bold text-sm uppercase tracking-wider">propietarios activos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- PILAR 3: AUTOMATIZACIÓN --}}
    <div class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- Text --}}
                <div>
                    <span class="inline-block px-4 py-1.5 bg-purple-100 text-purple-600 font-black text-xs uppercase tracking-[0.2em] rounded-full mb-6">Automatización</span>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary leading-[1.08] tracking-tight mb-6">
                        Sacale una foto a la factura y listo
                    </h3>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">La IA lee, interpreta y extrae datos de facturas automáticamente</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">Extracción automática de montos, fechas y CUIT</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">Impulsado por OpenAI — precisión de nivel empresarial</span>
                        </li>
                    </ul>
                    <div class="flex items-baseline gap-3">
                        <span class="text-4xl lg:text-5xl font-black text-purple-600 tracking-tighter">20h</span>
                        <span class="text-text-tertiary font-bold text-sm uppercase tracking-wider">semanales ahorradas</span>
                    </div>
                </div>
                {{-- #PH-09 — Reemplazar con screenshot de IA extrayendo datos de factura --}}
                <div class="relative">
                    @include('marketing.components.ui-mockup', ['type' => 'invoice', 'label' => 'CEO Online — IA Facturas'])
                </div>
            </div>
        </div>
    </div>

    {{-- PILAR 4: GESTIÓN MULTI-CONSORCIO --}}
    <div class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- #PH-10 — Reemplazar con screenshot de vista multi-consorcio --}}
                <div class="relative lg:order-1">
                    @include('marketing.components.ui-mockup', ['type' => 'dashboard', 'label' => 'CEO Online — Multi-Consorcio'])
                </div>
                {{-- Text --}}
                <div class="lg:order-2">
                    <span class="inline-block px-4 py-1.5 bg-success/10 text-success font-black text-xs uppercase tracking-[0.2em] rounded-full mb-6">Gestión</span>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary leading-[1.08] tracking-tight mb-6">
                        Toda tu cartera en una sola pantalla
                    </h3>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-success mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">Gestioná todos tus consorcios desde una sola cuenta</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-success mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">Roles y permisos diferenciados para tu equipo</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-success mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-text-secondary font-medium text-lg">Dashboard centralizado con métricas clave en tiempo real</span>
                        </li>
                    </ul>
                    <div class="flex items-baseline gap-3">
                        <span class="text-4xl lg:text-5xl font-black text-success tracking-tighter">200+</span>
                        <span class="text-text-tertiary font-bold text-sm uppercase tracking-wider">consorcios gestionados</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom CTA Strip --}}
    <div class="py-10 bg-slate-100 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('demo') }}" class="px-8 py-4 bg-primary text-white font-black rounded-lg text-sm uppercase tracking-widest hover:bg-primary-dark hover:scale-105 transition-all duration-300 shadow-lg shadow-primary/30 animate-cta-pulse">
                Solicitar demo
            </a>
            <a href="{{ route('contact') }}" class="px-8 py-4 border-2 border-gray-200 text-text-primary font-black rounded-lg text-sm uppercase tracking-widest hover:border-primary hover:bg-primary/5 transition-all">
                Contactanos
            </a>
        </div>
    </div>
</section>

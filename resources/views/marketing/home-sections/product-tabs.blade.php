{{-- Product Tabs — Slack-style Interactive Showcase --}}
<section class="py-20 lg:py-32 bg-slate-900 relative overflow-hidden" id="product-showcase"
    x-data="{
        active: 0,
        tabs: [
            { label: 'Liquidaciones', desc: 'Cálculo automático de expensas, distribución por coeficiente y generación masiva de PDFs.' },
            { label: 'Portal Propietario', desc: 'Tus propietarios consultan expensas, balances y comunicaciones 24/7 desde su celular.' },
            { label: 'IA Facturas', desc: 'Sacale una foto a la factura del proveedor y la IA extrae los datos automáticamente.' },
            { label: 'Dashboard', desc: 'Visualizá toda tu cartera en tiempo real: cobranza, vencimientos, métricas clave.' },
            { label: 'Comunicaciones', desc: 'Chat directo con propietarios y equipo. Notificaciones automáticas por email y WhatsApp.' }
        ]
    }">
    <div class="absolute inset-0 bg-texture-dots opacity-[0.03] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Header --}}
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-6xl font-black text-white leading-[1.05] tracking-tight mb-6">
                Todo lo que necesitás para gestionar tu cartera
            </h2>
            <p class="text-lg lg:text-xl text-slate-300 leading-relaxed max-w-3xl mx-auto font-medium">
                Liquidaciones, portal de propietarios, inteligencia artificial y más — <span class="text-white font-bold">todo integrado en una sola plataforma</span>.
            </p>
        </div>

        {{-- Tab Navigation --}}
        <div class="flex flex-wrap justify-center gap-2 lg:gap-3 mb-10 lg:mb-14">
            <template x-for="(tab, index) in tabs" :key="index">
                <button @click="active = index"
                        class="px-5 py-3 rounded-full text-sm font-bold transition-all duration-300 whitespace-nowrap"
                        :class="active === index 
                            ? 'bg-primary text-white shadow-lg shadow-primary/25' 
                            : 'bg-slate-800 text-slate-300 border border-slate-700 hover:border-primary/50 hover:text-white'"
                        x-text="tab.label">
                </button>
            </template>
        </div>

        {{-- Tab Content --}}
        <div class="relative">
            {{-- Description --}}
            <p class="text-center text-lg text-slate-300 font-medium mb-8 max-w-2xl mx-auto min-h-[56px]"
               x-text="tabs[active].desc"
               x-transition></p>

            {{-- UI Mockup Area --}}
            {{-- #PH-02 to #PH-06 — Reemplazar con screenshots reales de cada módulo --}}
            <div class="max-w-5xl mx-auto">
                {{-- Tab 0: Liquidaciones --}}
                <div x-show="active === 0" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-[0.98]" x-transition:enter-end="opacity-100 scale-100">
                    @include('marketing.components.ui-mockup', ['type' => 'table', 'label' => 'CEO Online — Liquidaciones', 'dark' => true])
                </div>
                {{-- Tab 1: Portal Propietario --}}
                <div x-show="active === 1" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-[0.98]" x-transition:enter-end="opacity-100 scale-100" style="display:none">
                    @include('marketing.components.ui-mockup', ['type' => 'mobile', 'label' => 'Portal Propietario', 'dark' => true])
                </div>
                {{-- Tab 2: IA Facturas --}}
                <div x-show="active === 2" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-[0.98]" x-transition:enter-end="opacity-100 scale-100" style="display:none">
                    @include('marketing.components.ui-mockup', ['type' => 'invoice', 'label' => 'CEO Online — IA Facturas', 'dark' => true])
                </div>
                {{-- Tab 3: Dashboard --}}
                <div x-show="active === 3" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-[0.98]" x-transition:enter-end="opacity-100 scale-100" style="display:none">
                    @include('marketing.components.ui-mockup', ['type' => 'dashboard', 'label' => 'CEO Online — Dashboard', 'dark' => true])
                </div>
                {{-- Tab 4: Comunicaciones --}}
                <div x-show="active === 4" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-[0.98]" x-transition:enter-end="opacity-100 scale-100" style="display:none">
                    @include('marketing.components.ui-mockup', ['type' => 'chat', 'label' => 'CEO Online — Comunicaciones', 'dark' => true])
                </div>
            </div>
        </div>
    </div>
</section>

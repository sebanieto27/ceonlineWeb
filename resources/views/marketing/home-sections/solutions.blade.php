{{-- Solutions by Pain Points --}}
<section class="py-16 lg:py-24 bg-surface relative overflow-hidden" id="solutions">
    <div class="absolute inset-0 bg-texture-dots opacity-50 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary-dark-dark rounded-full text-sm font-medium mb-6 animate-fade-in">
                Soluciones
            </span>
            <h2 class="text-4xl lg:text-5xl font-extrabold text-text-primary leading-tight mb-6">
                Resolvemos los problemas reales del administrador
            </h2>
            <p class="text-xl text-text-secondary leading-relaxed max-w-3xl mx-auto font-medium">
                Cada módulo fue diseñado para eliminar los dolores operativos más comunes de la administración de consorcios en Argentina.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- Pain Point 1 --}}
            <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-lg transition-all duration-500">
                <div class="text-3xl mb-4">&#128200;</div>
                <h3 class="text-xl font-black text-text-primary mb-2">Cierre de mes sin estrés</h3>
                <p class="text-text-secondary font-medium leading-relaxed mb-4">Las liquidaciones manuales consumen días y generan errores. Con CEOnline, el cálculo es automático, la distribución por coeficiente exacta y el PDF listo para imprimir o enviar.</p>
                <p class="text-xs font-bold text-text-tertiary uppercase tracking-wide">Liquidaciones + Auditoría + Reportes</p>
            </div>

            {{-- Pain Point 2 --}}
            <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-lg transition-all duration-500">
                <div class="text-3xl mb-4">&#128101;</div>
                <h3 class="text-xl font-black text-text-primary mb-2">Propietarios informados, menos conflictos</h3>
                <p class="text-text-secondary font-medium leading-relaxed mb-4">Los propietarios llaman a cualquier hora pidiendo información. Con el Portal del Propietario, consultan expensas, pagos y novedades 24/7 desde su celular.</p>
                <p class="text-xs font-bold text-text-tertiary uppercase tracking-wide">Portal Propietario + Comunicaciones + Documentos</p>
            </div>

            {{-- Pain Point 3 --}}
            <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-lg transition-all duration-500">
                <div class="text-3xl mb-4">&#128451;</div>
                <h3 class="text-xl font-black text-text-primary mb-2">Proveedores y facturas bajo control</h3>
                <p class="text-text-secondary font-medium leading-relaxed mb-4">Gestioná proveedores, sus facturas e historial en un solo lugar. La IA extrae los datos de cada factura automáticamente — adiós a la carga manual.</p>
                <p class="text-xs font-bold text-text-tertiary uppercase tracking-wide">Gestión Proveedores + IA Facturas + Gastos</p>
            </div>

            {{-- Pain Point 4 --}}
            <div class="bg-bg rounded-2xl border border-border-light p-8 hover:shadow-lg transition-all duration-500">
                <div class="text-3xl mb-4">&#127970;</div>
                <h3 class="text-xl font-black text-text-primary mb-2">Toda tu cartera en una sola pantalla</h3>
                <p class="text-text-secondary font-medium leading-relaxed mb-4">Ya no necesitás saltar entre planillas, carpetas y sistemas distintos. Gestioná todos tus consorcios desde una cuenta con roles diferenciados para tu equipo.</p>
                <p class="text-xs font-bold text-text-tertiary uppercase tracking-wide">Multi-consorcio + Roles y Permisos + Dashboard</p>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('solutions') }}" class="text-primary font-bold text-lg hover:text-primary-dark hover:underline inline-flex items-center gap-2 transition-colors">
                Ver todas las soluciones <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</section>

{{-- IA & Automation Section --}}
<section class="py-16 lg:py-24 bg-bg relative overflow-hidden gradient-mesh" id="ia">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="lg:order-2 lg:pl-12 relative z-10">
                <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary-dark rounded-full text-xs font-black uppercase tracking-widest mb-6 animate-fade-in">
                    Inteligencia Artificial
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-7xl font-black text-text-primary leading-[1.05] tracking-tight mb-8 animate-fade-in-up">
                    Sacale una foto a la factura y listo
                </h2>
                <p class="text-xl text-text-secondary leading-relaxed mb-6 font-medium">
                    El módulo de IA lee, interpreta y extrae los datos de las facturas de proveedores automáticamente. Cargá una foto desde el celular y el sistema hace el resto. Es la funcionalidad que los administradores no esperan encontrar — y la que más impacto genera.
                </p>
                <ul class="space-y-3 text-text-primary font-bold mb-8">
                    <li class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-primary rounded-full"></span> Extracción automática de montos, fechas y CUIT</li>
                    <li class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-primary rounded-full"></span> Más de 20 horas semanales recuperadas</li>
                    <li class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-primary rounded-full"></span> Impulsado por OpenAI — precisión de nivel empresarial</li>
                </ul>
                <a href="{{ route('features') }}" class="text-primary font-bold text-lg hover:text-primary-dark hover:underline flex items-center gap-2 transition-colors">
                    Conocé todas las funcionalidades <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="lg:order-1 relative w-full flex items-center justify-center">
                <div class="relative w-full max-w-lg mx-auto overflow-hidden rounded-2xl shadow-2xl shadow-primary/10 border border-border-light relative z-10 transition-transform duration-500 hover:scale-[1.02]">
                    <video loop muted playsinline preload="none" class="w-full h-auto scale-[1.05]" x-data x-intersect.once="$el.src = $el.dataset.src; $el.play()" data-src="{{ asset('videos/placeholders/feature2.webm') }}"></video>
                </div>
                <div class="absolute -top-12 -left-12 w-48 h-48 bg-purple-200/40 rounded-full blur-3xl -z-10"></div>
                <div class="absolute -bottom-12 -right-12 w-48 h-48 bg-primary/10 rounded-full blur-3xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

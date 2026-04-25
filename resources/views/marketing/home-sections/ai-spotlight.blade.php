{{-- AI Spotlight — Dark Impact Section --}}
<section class="py-24 lg:py-32 bg-gradient-to-br from-slate-900 via-primary-dark to-slate-900 relative overflow-hidden" id="ai-spotlight">
    {{-- Radial gradient accent --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-primary/10 rounded-full blur-[120px]"></div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        {{-- Badge --}}
        <div class="text-center mb-8">
            <span class="inline-block px-5 py-2 bg-primary/20 text-secondary font-black text-xs uppercase tracking-[0.25em] rounded-full border border-primary/30">
                Inteligencia Artificial
            </span>
        </div>

        {{-- Main Copy --}}
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-6xl font-black text-white leading-[1.05] tracking-tight mb-6 animate-fade-in-up">
                Sacale una foto a la factura.
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-secondary to-primary-light">La IA hace el resto.</span>
            </h2>
            <p class="text-lg lg:text-xl text-slate-300 font-medium leading-relaxed max-w-3xl mx-auto animate-fade-in-up delay-200">
                CEOnline es la plataforma de gestión de consorcios más avanzada de Argentina, con Inteligencia Artificial integrada. Cargá facturas de proveedores en segundos, no en minutos.
            </p>
        </div>

        {{-- Feature bullets --}}
        <div class="grid sm:grid-cols-3 gap-6 lg:gap-8 mb-14 lg:mb-16 max-w-4xl mx-auto"
             x-data="{ shown: false }"
             x-intersect.once="shown = true">
            <div class="text-center" :class="shown ? 'animate-card-reveal' : 'opacity-0'" style="animation-delay: 0.1s">
                <div class="w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                    </svg>
                </div>
                <h3 class="text-white font-bold mb-2">Sacá la foto</h3>
                <p class="text-slate-400 text-sm font-medium">Subí la imagen de la factura del proveedor desde tu celular o computadora.</p>
            </div>
            <div class="text-center" :class="shown ? 'animate-card-reveal' : 'opacity-0'" style="animation-delay: 0.25s">
                <div class="w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                    </svg>
                </div>
                <h3 class="text-white font-bold mb-2">La IA interpreta</h3>
                <p class="text-slate-400 text-sm font-medium">Extrae montos, fechas, CUIT y concepto automáticamente con OpenAI.</p>
            </div>
            <div class="text-center" :class="shown ? 'animate-card-reveal' : 'opacity-0'" style="animation-delay: 0.4s">
                <div class="w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <h3 class="text-white font-bold mb-2">Listo para liquidar</h3>
                <p class="text-slate-400 text-sm font-medium">Los datos quedan cargados y listos para incluir en la próxima liquidación.</p>
            </div>
        </div>

        {{-- Invoice AI Mockup --}}
        <div class="relative max-w-4xl mx-auto animate-fade-in-up delay-300">
            @include('marketing.components.ui-mockup', ['type' => 'invoice', 'label' => 'CEO Online — IA Facturas', 'dark' => true])
        </div>

        {{-- Powered by + CTA --}}
        <div class="text-center mt-12 lg:mt-16">
            <div class="flex items-center justify-center gap-3 mb-8">
                <span class="text-slate-400 font-bold text-sm uppercase tracking-wider">Powered by</span>
                <span class="text-white font-black text-lg tracking-tight">OpenAI</span>
            </div>
            <a href="{{ route('demo') }}" class="inline-block px-8 py-4 bg-white text-primary font-black rounded-lg text-base uppercase tracking-widest hover:bg-gray-100 hover:scale-105 transition-all duration-300 shadow-lg shadow-black/20 animate-cta-pulse-white">
                Probalo vos mismo
            </a>
        </div>
    </div>
</section>

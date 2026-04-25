{{-- Final CTA — Branded Close Section --}}
<section class="bg-brand-celeste relative pt-24 pb-20" id="cta-final">
    {{-- Concave Top Divider --}}
    <div class="absolute top-0 left-0 w-full overflow-hidden leading-none">
        <svg class="block w-full h-[30px] md:h-[40px]" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path d="M0,0 C480,100 960,100 1440,0 L1440,0 L0,0 Z" fill="#ffffff"></path>
        </svg>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">

        {{-- Stats (reinforcement) --}}
        <div class="grid grid-cols-2 gap-8 lg:gap-16 mb-14 max-w-2xl mx-auto"
             x-data="{ 
                counters: [
                    { target: 4, current: 0, suffix: 'h', label: 'Tiempo promedio de cierre mensual' },
                    { target: 30, current: 0, suffix: ' días', label: 'De prueba gratuita sin tarjeta' }
                ],
                started: false,
                start() {
                    if (this.started) return;
                    this.started = true;
                    this.counters.forEach((c, i) => {
                        let steps = 40;
                        let increment = c.target / steps;
                        let count = 0;
                        let interval = setInterval(() => {
                            count++;
                            c.current = Math.min(Math.round(increment * count), c.target);
                            if (count >= steps) clearInterval(interval);
                        }, 30);
                    });
                }
             }"
             x-intersect.once="start()">
            <template x-for="(counter, index) in counters" :key="index">
                <div class="text-center">
                    <div class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-2 tracking-tighter">
                        <span x-text="counter.current">0</span><span x-text="counter.suffix"></span>
                    </div>
                    <p class="text-white/70 font-bold text-xs lg:text-sm uppercase tracking-[0.2em]" x-text="counter.label"></p>
                </div>
            </template>
        </div>

        {{-- CTA Copy --}}
        <div class="pt-10 border-t border-white/20">
            <h2 class="text-2xl sm:text-3xl lg:text-5xl font-black text-white leading-[1.08] tracking-tight mb-6 animate-fade-in-up uppercase">
                ¿Listo para transformar tu administración?
            </h2>
            <p class="text-white/90 text-base lg:text-xl mb-10 max-w-2xl mx-auto font-medium leading-relaxed animate-fade-in-up delay-200">
                Unite a las administraciones que ya gestionan con CEOnline. Solicitá una demo y descubrí cómo simplificar tu operación.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center px-4 animate-fade-in-up delay-300">
                <a href="{{ route('demo') }}" class="w-full sm:w-auto px-10 py-5 bg-white text-primary font-black rounded-lg text-lg lg:text-xl hover:bg-gray-100 transition-all hover:scale-105 shadow-2xl shadow-black/10 tracking-wide uppercase animate-cta-pulse-white">
                    Solicitar Demo
                </a>
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-10 py-5 bg-transparent border-2 border-white text-white font-black rounded-lg text-lg lg:text-xl hover:bg-white/10 transition-all tracking-wide uppercase">
                    Contactanos
                </a>
            </div>

            {{-- Trust Indicators --}}
            <div class="mt-8 flex flex-wrap gap-x-6 gap-y-2 items-center justify-center text-sm font-medium text-white/90">
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Sin tarjeta de crédito
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Migración sin cargo
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Soporte VIP incluido
                </span>
            </div>
        </div>
    </div>
</section>

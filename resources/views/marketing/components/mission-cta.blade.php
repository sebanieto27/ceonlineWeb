{{-- Unified Mission & CTA Section --}}
<section class="bg-brand-celeste relative mission-cta-section pt-24 pb-16">
    {{-- Corrected Concave Top Divider (Pushing down into blue) --}}
    <div class="absolute top-0 left-0 w-full overflow-hidden leading-none">
        <svg class="block w-full h-[30px] md:h-[40px]" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path d="M0,0 C480,100 960,100 1440,0 L1440,0 L0,0 Z" fill="white"></path>
        </svg>
    </div>

    {{-- Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">

        {{-- Mission Title --}}
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-white leading-[1.1] tracking-tight mb-12 max-w-3xl mx-auto animate-fade-in-up uppercase">
            Nuestro objetivo es impulsar el crecimiento de las administraciones.
        </h2>

        {{-- Stats Grid — 4 items --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 mb-16"
             x-data="{ 
                stats: [
                    { target: 200, current: 0, suffix: '+', label: 'Consorcios gestionados' },
                    { target: 42000, current: 0, suffix: '+', label: 'Propietarios activos' },
                    { target: 15, current: 0, suffix: '', label: 'Módulos activos' },
                    { target: 80, current: 0, suffix: 'h', label: 'Recuperadas por mes' }
                ],
                started: false,
                start() {
                    if (this.started) return;
                    this.started = true;
                    this.stats.forEach(s => {
                        let steps = 40;
                        let increment = s.target / steps;
                        let count = 0;
                        let interval = setInterval(() => {
                            count++;
                            s.current = Math.min(Math.round(increment * count), s.target);
                            if (count >= steps) clearInterval(interval);
                        }, 30);
                    });
                }
             }"
             x-intersect.once="start()">
            <template x-for="(stat, index) in stats" :key="index">
                <div class="text-center group">
                    <div class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tighter mb-2 transition-transform group-hover:scale-105 duration-500">
                        <span x-text="stat.target === 42000 ? stat.current.toLocaleString('es-AR') : stat.current">0</span><span x-text="stat.suffix"></span>
                    </div>
                    <p class="text-white font-bold text-xs lg:text-sm uppercase tracking-[0.3em]" x-text="stat.label"></p>
                </div>
            </template>
        </div>

        {{-- CTA Wrapper --}}
        <div class="pt-12 border-t border-white/20 max-w-5xl mx-auto animate-fade-in-up delay-300">
            <h3 class="text-2xl sm:text-3xl lg:text-4xl font-black text-white mb-6 tracking-tight uppercase">
                ¿Listo para transformar tu gestión?
            </h3>
            <p class="text-white text-base lg:text-xl mb-8 max-w-2xl mx-auto font-medium leading-relaxed">
                Unite a las administraciones que ya lideran el mercado con CEO Online. La solución líder en Mar del Plata y Buenos Aires.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center px-4">
                <a href="{{ route('demo') }}" class="w-full sm:w-auto px-10 py-5 bg-white text-primary font-black rounded-lg text-lg lg:text-xl hover:bg-gray-100 transition-all hover:scale-105 shadow-2xl shadow-black/10 tracking-wide uppercase">
                    Comenzar gratis
                </a>
                <a href="{{ route('demo') }}" class="w-full sm:w-auto px-10 py-5 bg-transparent border-2 border-white text-white font-black rounded-lg text-lg lg:text-xl hover:bg-white/10 transition-all tracking-wide uppercase">
                    Solicitar Demo
                </a>
            </div>
        </div>
    </div>
</section>



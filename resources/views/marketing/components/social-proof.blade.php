{{-- Stats at Scale — Mission + Metrics Section --}}
<section class="py-20 lg:py-28 bg-gradient-to-br from-primary to-primary-dark relative overflow-hidden" id="stats">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        {{-- Mission Title --}}
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-white leading-[1.1] tracking-tight mb-14 lg:mb-20 max-w-3xl mx-auto animate-fade-in-up">
            Nuestro objetivo es impulsar el crecimiento de las administraciones.
        </h2>

        {{-- Stats Grid --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12"
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
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tighter mb-2 transition-transform group-hover:scale-105 duration-500">
                        <span x-text="stat.target === 42000 ? stat.current.toLocaleString('es-AR') : stat.current">0</span><span x-text="stat.suffix"></span>
                    </div>
                    <p class="text-xs lg:text-sm font-bold text-white/70 uppercase tracking-wider" x-text="stat.label"></p>
                </div>
            </template>
        </div>
    </div>
</section>

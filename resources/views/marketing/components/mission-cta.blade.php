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

        {{-- Stats Grid (Reduced to 2 key items) --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-16 mb-16 max-w-3xl mx-auto">
            {{-- Stat 1 --}}
            <div x-data="counter" x-intersect.once="start" data-target="200" data-suffix="+" class="text-center group">
                <div class="text-5xl sm:text-6xl lg:text-7xl font-black text-white mb-2 lg:mb-3 tracking-tighter transition-transform group-hover:scale-105 duration-500">
                    <span x-text="current">0</span><span x-text="suffix"></span>
                </div>
                <p class="text-white font-bold text-xs lg:text-sm uppercase tracking-[0.3em]">Consorcios gestionados</p>
            </div>
            {{-- Stat 2 --}}
            <div x-data="counter" x-intersect.once="start" data-target="42000" data-suffix="+" class="text-center group">
                <div class="text-5xl sm:text-6xl lg:text-7xl font-black text-white mb-2 lg:mb-3 tracking-tighter transition-transform group-hover:scale-105 duration-500">
                    <span x-text="current.toLocaleString('es-AR')">0</span><span x-text="suffix"></span>
                </div>
                <p class="text-white font-bold text-xs lg:text-sm uppercase tracking-[0.3em]">Propietarios</p>
            </div>
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
                <a href="{{ route('demo') }}" class="w-full sm:w-auto px-10 py-5 bg-white text-primary font-black rounded-lg text-lg lg:text-xl hover:bg-gray-100 transition-all hover:scale-105 shadow-2xl shadow-black/10 tracking-wide">
                    COMENZAR GRATIS
                </a>
                <a href="{{ route('demo') }}" class="w-full sm:w-auto px-10 py-5 bg-transparent border-2 border-white text-white font-black rounded-lg text-lg lg:text-xl hover:bg-white/10 transition-all tracking-wide">
                    SOLICITAR DEMO
                </a>
            </div>
        </div>
    </div>
    </div>
</section>

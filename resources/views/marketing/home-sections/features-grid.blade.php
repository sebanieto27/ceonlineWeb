{{-- Features Grid --}}
<section class="py-16 lg:py-24 bg-surface relative" id="features">
    <div class="absolute inset-0 bg-texture-dots pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="lg:pr-12">
                <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-6 animate-fade-in">
                    Características
                </span>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-text-primary leading-tight mb-6">
                    Mové el trabajo hacia adelante con el poder de la integración
                </h2>
                <p class="text-xl text-text-secondary leading-relaxed mb-6 font-medium">
                    Somos el único sistema que combina <span class="text-text-primary font-bold underline decoration-primary decoration-4">Software de Gestión con Imprenta Propia</span>, eliminando la fricción entre la liquidación y la entrega al residente.
                </p>
                <ul class="space-y-4 text-lg text-text-primary font-bold mb-8 list-none">
                    <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full"></span>Liquidaciones inteligentes automáticas</li>
                    <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full"></span>Software + Imprenta en un mismo lugar</li>
                    <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full"></span>Comunicación instantánea con residentes</li>
                </ul>
                <a href="#" class="text-primary font-bold text-lg hover:text-primary-dark hover:underline flex items-center gap-2 transition-colors">
                    Conoce más sobre las funciones <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="relative w-full flex items-center justify-center">
                <div class="relative w-full max-w-lg mx-auto overflow-hidden rounded-2xl shadow-2xl shadow-primary/10 border border-border-light relative z-10 transition-transform duration-500 hover:scale-[1.02]">
                    <video autoplay loop muted playsinline class="w-full h-auto scale-[1.05]" src="{{ asset('videos/placeholders/feature1.webm') }}"></video>
                </div>
                <div class="absolute inset-0 bg-gradient-to-tr from-primary/5 to-secondary/5 rounded-full blur-3xl transform scale-150 -z-10"></div>
            </div>
        </div>
    </div>
</section>

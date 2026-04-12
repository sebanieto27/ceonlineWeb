{{-- Hero Section Component --}}
<section class="gradient-hero gradient-mesh relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            {{-- Left: Text & CTA --}}
            <div class="text-center lg:text-left z-10">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary rounded-full text-xs font-black uppercase tracking-widest mb-6 animate-fade-in">
                    Plataforma #1 en gestión de consorcios
                </div>

                <h1 class="text-[2.75rem] sm:text-6xl lg:text-8xl font-black text-text-primary leading-[1.05] tracking-tight mb-8 animate-fade-in-up">
                    Cerrá el mes en 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">horas, no en días</span>
                </h1>
                
                <p class="text-xl sm:text-2xl text-text-secondary leading-relaxed max-w-2xl mx-auto lg:mx-0 mb-8 font-medium animate-fade-in-up delay-200">
                    El sistema de gestión de consorcios más completo de Argentina. Automatizá liquidaciones, dale transparencia a tus propietarios y gestioná toda tu cartera desde un solo lugar.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto lg:mx-0 animate-fade-in-up delay-300">
                    <a href="{{ route('demo') }}" class="btn-primary !py-4 !px-8 !text-lg !rounded-lg flex-shrink-0 shadow-lg shadow-primary/30 text-center">
                        PROBALO 30 DÍAS GRATIS
                    </a>
                    <a href="{{ route('features') }}" class="px-8 py-4 border-2 border-border text-text-primary font-black rounded-lg text-lg hover:bg-primary/5 transition-all text-center">
                        VER CARACTERÍSTICAS
                    </a>
                </div>

                <div class="mt-6 text-[15px] font-medium text-text-secondary flex flex-col sm:flex-row gap-4 items-center justify-center lg:justify-start animate-fade-in-up delay-400">
                    <span class="flex items-center gap-1.5"><svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Sin tarjeta de crédito</span>
                    <span class="flex items-center gap-1.5"><svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Migración sin cargo</span>
                    <span class="flex items-center gap-1.5"><svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Soporte VIP incluido</span>
                </div>
            </div>

            {{-- Right: Video Player (Slack Style) --}}
            <div class="relative w-full flex items-center justify-center animate-slide-in-right delay-200">
                <div class="relative w-full max-w-lg mx-auto overflow-hidden rounded-2xl shadow-2xl shadow-primary/10 border border-border-light bg-surface relative z-10 transition-transform duration-500 hover:scale-[1.02]">
                    <video 
                        loop 
                        muted 
                        playsinline 
                        preload="none"
                        class="w-full h-auto scale-[1.05]"
                        x-data x-intersect.once="$el.src = $el.dataset.src; $el.play()"
                        data-src="{{ asset('videos/placeholders/hero.webm') }}">
                    </video>
                </div>
                {{-- Decorative blobs --}}
                <div class="absolute -top-8 -right-8 w-32 h-32 bg-primary/10 rounded-full blur-2xl -z-10"></div>
                <div class="absolute -bottom-8 -left-8 w-40 h-40 bg-secondary/10 rounded-full blur-2xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

{{-- Hero Section — Slack-style Centered --}}
<section class="gradient-hero gradient-mesh relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 lg:pt-44 pb-16 lg:pb-24">
        {{-- Centered Text Block --}}
        <div class="text-center relative z-10">
            <h1 class="text-[2.5rem] sm:text-6xl lg:text-[5.5rem] font-black text-text-primary leading-[1.05] tracking-tight mb-6 animate-fade-in-up">
                El sistema de gestión que tu administración
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">necesita.</span>
            </h1>
            
            <p class="text-lg sm:text-xl lg:text-2xl text-text-secondary leading-relaxed max-w-3xl mx-auto mb-10 font-medium animate-fade-in-up delay-200">
                Cerrá el mes en horas, dale transparencia a tus propietarios y gestioná toda tu cartera desde un solo lugar.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up delay-300">
                <a href="{{ route('demo') }}" class="px-8 py-4 bg-primary text-white font-black rounded-lg text-base uppercase tracking-widest hover:bg-primary-dark hover:scale-105 transition-all duration-300 shadow-lg shadow-primary/30 animate-cta-pulse">
                    Solicitar demo
                </a>
                <a href="{{ route('features') }}" class="px-8 py-4 border-2 border-gray-200 text-text-primary font-black rounded-lg text-base uppercase tracking-widest hover:border-primary hover:bg-primary/5 transition-all">
                    Ver funciones
                </a>
            </div>

            {{-- Trust indicators --}}
            <div class="mt-8 flex flex-wrap gap-x-6 gap-y-2 items-center justify-center text-sm font-medium text-text-tertiary animate-fade-in-up delay-400">
                <span class="flex items-center gap-1.5"><svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Sin tarjeta de crédito</span>
                <span class="flex items-center gap-1.5"><svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Migración sin cargo</span>
                <span class="flex items-center gap-1.5"><svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Soporte VIP incluido</span>
            </div>
        </div>

        {{-- #PH-01 — Product Screenshot (reemplazar con screenshot real del dashboard) --}}
        <div class="mt-16 lg:mt-20 relative animate-fade-in-up delay-500">
            <div class="relative max-w-5xl mx-auto">
                @include('marketing.components.ui-mockup', ['type' => 'dashboard', 'label' => 'CEO Online — Panel Principal'])
            </div>
            {{-- Decorative gradient behind --}}
            <div class="absolute -top-12 left-1/2 -translate-x-1/2 w-[80%] h-[60%] bg-gradient-to-b from-primary/5 to-transparent rounded-full blur-3xl -z-10"></div>
        </div>
    </div>
</section>

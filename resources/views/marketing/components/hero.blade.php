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
                    El cerebro colectivo de tu 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">consorcio</span>
                </h1>
                
                <p class="text-xl sm:text-2xl text-text-secondary leading-relaxed max-w-2xl mx-auto lg:mx-0 mb-8 font-medium animate-fade-in-up delay-200">
                    Reimagina los límites de lo posible con la IA, automatiza flujos financieros y conecta a tus residentes en una sola plataforma segura.
                </p>

                <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto lg:mx-0 animate-fade-in-up delay-300">
                    <input type="email" placeholder="Dirección de correo electrónico" class="w-full px-5 py-4 border border-border rounded-lg text-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-text-primary placeholder-text-tertiary">
                    <button type="submit" class="btn-primary !py-4 !px-8 !text-lg !rounded-lg flex-shrink-0 shadow-lg shadow-primary/30">
                        REGISTRARSE
                    </button>
                </form>

                <div class="mt-4 text-[15px] font-medium text-text-secondary flex flex-col sm:flex-row gap-4 items-center justify-center lg:justify-start animate-fade-in-up delay-400">
                    <span>Gratis de por vida</span>
                    <span>Sin tarjeta de crédito</span>
                </div>
            </div>

            {{-- Right: Video Player (Slack Style) --}}
            <div class="relative w-full flex items-center justify-center animate-slide-in-right delay-200">
                <div class="relative w-full max-w-lg mx-auto overflow-hidden rounded-2xl shadow-2xl shadow-primary/10 border border-border-light bg-surface relative z-10 transition-transform duration-500 hover:scale-[1.02]">
                    <video 
                        autoplay 
                        loop 
                        muted 
                        playsinline 
                        class="w-full h-auto scale-[1.05]"
                        src="{{ asset('videos/placeholders/hero.webm') }}">
                    </video>
                </div>
                {{-- Decorative blobs --}}
                <div class="absolute -top-8 -right-8 w-32 h-32 bg-primary/10 rounded-full blur-2xl -z-10"></div>
                <div class="absolute -bottom-8 -left-8 w-40 h-40 bg-secondary/10 rounded-full blur-2xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

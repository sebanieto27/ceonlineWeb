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

{{-- Resources Section — Latest Blog Posts --}}
@php
    $latestPosts = \App\Models\Post::where('is_published', true)->latest('published_at')->take(3)->get();
@endphp
@if($latestPosts->count() > 0)
<section class="py-20 lg:py-28 bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-[1.08] tracking-tight mb-4">
                Recursos para tu administración
            </h2>
            <p class="text-lg text-text-secondary font-medium">Novedades, guías y todo lo que necesitás saber sobre gestión de consorcios.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($latestPosts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="group bg-white rounded-2xl border border-border-light overflow-hidden hover:shadow-lg transition-all duration-300">
                @if($post->image)
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                @endif
                <div class="p-6">
                    @if($post->category)
                    <span class="text-xs font-bold text-primary uppercase tracking-wider">{{ $post->category->name }}</span>
                    @endif
                    <h3 class="text-lg font-black text-text-primary mt-2 mb-3 group-hover:text-primary transition-colors leading-snug">{{ $post->title }}</h3>
                    <p class="text-sm text-text-secondary font-medium line-clamp-2">{{ $post->excerpt }}</p>
                </div>
            </a>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('blog.index') }}" class="text-primary font-bold text-lg hover:text-primary-dark hover:underline inline-flex items-center gap-2 transition-colors">
                Ver todos los artículos <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</section>
@endif

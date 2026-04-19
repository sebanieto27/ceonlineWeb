{{-- Blog / Resources Section --}}
@php
    $latestPosts = \App\Models\Post::where('is_published', true)->latest('published_at')->take(3)->get();
@endphp
@if($latestPosts->count() > 0)
<section class="py-20 lg:py-28 bg-white" id="resources">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-[1.08] tracking-tight mb-4">
                Recursos para administradores
            </h2>
            <p class="text-lg text-text-secondary font-medium">Novedades, guías y todo lo que necesitás saber sobre gestión de consorcios.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8"
             x-data="{ shown: false }"
             x-intersect.once="shown = true">
            @foreach($latestPosts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="group bg-white rounded-2xl border border-border-light overflow-hidden hover:shadow-lg transition-all duration-300"
               :class="shown ? 'animate-card-reveal' : 'opacity-0'" style="animation-delay: {{ $loop->iteration * 0.15 }}s">
                @if($post->image)
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
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

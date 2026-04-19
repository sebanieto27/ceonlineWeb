{{-- Blog / Resources Section --}}
@php
    $latestPosts = \App\Models\Post::where('is_published', true)->latest('published_at')->take(3)->get();
@endphp
@if($latestPosts->count() > 0)
<section class="py-20 lg:py-28 bg-white" id="resources">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 lg:mb-16">
            <span class="inline-block px-4 py-1.5 bg-primary/10 text-primary font-black text-xs uppercase tracking-[0.2em] rounded-full mb-5">Blog</span>
            <h2 class="text-3xl lg:text-5xl font-black text-text-primary leading-[1.08] tracking-tight mb-4">
                Recursos para administradores
            </h2>
            <p class="text-lg text-text-secondary font-medium max-w-2xl mx-auto">Novedades, guías y todo lo que necesitás saber sobre gestión de consorcios.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8"
             x-data="{ shown: false }"
             x-intersect.once="shown = true">
            @foreach($latestPosts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="group bg-white rounded-2xl border border-border-light overflow-hidden hover:shadow-xl hover:border-primary/20 hover:-translate-y-1 transition-all duration-300"
               :class="shown ? 'animate-card-reveal' : 'opacity-0'" style="animation-delay: {{ $loop->iteration * 0.15 }}s">
                {{-- Image or Gradient Fallback --}}
                <div class="aspect-[16/9] overflow-hidden relative">
                    @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    @else
                    @php
                        $gradients = [
                            'from-primary/80 to-primary-dark/90',
                            'from-purple-600/80 to-primary/90',
                            'from-primary-light/80 to-primary/90',
                        ];
                        $icons = [
                            '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>',
                            '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z"/>',
                            '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z"/>',
                        ];
                    @endphp
                    <div class="w-full h-full bg-gradient-to-br {{ $gradients[$loop->index % 3] }} flex items-center justify-center group-hover:scale-105 transition-transform duration-500">
                        <svg class="w-16 h-16 text-white/30" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">{!! $icons[$loop->index % 3] !!}</svg>
                    </div>
                    @endif
                    {{-- Category overlay --}}
                    @if($post->category)
                    <div class="absolute top-3 left-3">
                        <span class="px-3 py-1 bg-white/90 backdrop-blur-sm text-primary font-bold text-xs uppercase tracking-wider rounded-full shadow-sm">{{ $post->category->name }}</span>
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-black text-text-primary mb-3 group-hover:text-primary transition-colors leading-snug">{{ $post->title }}</h3>
                    <p class="text-sm text-text-secondary font-medium line-clamp-2 mb-4">{{ $post->excerpt }}</p>
                    <div class="flex items-center justify-between text-xs text-text-tertiary font-medium">
                        <span>{{ $post->published_at->translatedFormat('d M Y') }}</span>
                        <span class="flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                            {{ $post->reading_time }} min
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-slate-200 text-text-primary font-bold rounded-lg hover:border-primary hover:text-primary hover:gap-3 transition-all duration-300">
                Ver todos los artículos 
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>
@endif

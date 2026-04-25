@extends('marketing.layouts.master')

@section('title', 'Blog & Recursos - CEO Online')
@section('description', 'Consejos, novedades y mejores prácticas para administradores de consorcios y edificios.')
@section('robots'){{ $posts->isEmpty() ? 'noindex, nofollow' : 'index, follow' }}@endsection
@section('keywords', 'blog administraci\u00f3n consorcios, tips gestión edificios, normativa propiedad horizontal Argentina, expensas consorcios')

@section('content')

{{-- Header --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-32 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary-dark rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
            Conocimiento Compartido
        </span>
        <h1 class="text-4xl lg:text-7xl font-black text-text-primary mt-8 leading-[1.05] tracking-tight max-w-4xl mx-auto">
            Blog para Administradores de Consorcios
        </h1>
        <p class="text-text-secondary text-xl lg:text-2xl mt-8 max-w-2xl mx-auto font-medium leading-relaxed">
            Aprendé sobre normativas, gestión eficiente, proptech y cómo mejorar la rentabilidad de tu administración.
        </p>
    </div>
</section>

{{-- Blog Grid — bg-white --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
         x-data="{ shown: false }" x-intersect.once="shown = true"
         :class="shown ? 'animate-section-reveal' : 'opacity-0'">
        
        {{-- Category Filters --}}
        @if(isset($categories) && $categories->count())
        <div class="flex flex-wrap gap-3 mb-14">
            <a href="{{ route('blog.index') }}" class="inline-block px-4 py-2 rounded-full text-sm font-black transition-all {{ !request('category') ? 'bg-primary text-white' : 'bg-slate-100 text-text-secondary hover:bg-primary/10 hover:text-primary' }}">
                Todos
            </a>
            @foreach($categories as $category)
            <a href="{{ route('blog.index', ['category' => $category->slug]) }}" class="inline-block px-4 py-2 rounded-full text-sm font-black transition-all {{ request('category') == $category->slug ? 'bg-primary text-white' : 'bg-slate-100 text-text-secondary hover:bg-primary/10 hover:text-primary' }}">
                {{ $category->name }}
            </a>
            @endforeach
        </div>
        @endif
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($posts as $post)
            <article class="group flex flex-col bg-bg rounded-2xl border border-border-light overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-500">
                @if($post->image)
                <a href="{{ route('blog.show', $post->slug) }}" class="block aspect-video bg-gray-100 overflow-hidden">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </a>
                @else
                <div class="aspect-video bg-gradient-to-br from-primary/5 to-secondary/5 flex items-center justify-center">
                    <span class="text-primary font-black text-2xl uppercase tracking-widest opacity-20">CEOnline</span>
                </div>
                @endif
                
                <div class="flex-1 flex flex-col p-8">
                    <div class="flex items-center gap-3 mb-4">
                        @if($post->category)
                        <span class="inline-block px-3 py-1 bg-primary/10 text-primary font-black text-[10px] uppercase tracking-[0.2em] rounded-full">{{ $post->category->name }}</span>
                        @endif
                        <span class="text-text-tertiary text-xs font-medium">{{ ($post->published_at ?? $post->created_at)->format('d M, Y') }}</span>
                    </div>
                    
                    <a href="{{ route('blog.show', $post->slug) }}" class="block mb-4">
                        <h2 class="text-xl font-black text-text-primary group-hover:text-primary transition-colors leading-[1.2] tracking-tight">
                            {{ $post->title }}
                        </h2>
                    </a>
                    
                    <p class="text-text-secondary font-medium text-sm line-clamp-3 mb-6 flex-1 leading-relaxed">
                        {{ $post->excerpt }}
                    </p>
                    
                    <div class="mt-auto flex items-center justify-between">
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-primary font-black text-sm uppercase tracking-widest hover:text-primary-dark transition-colors flex items-center gap-2">
                            LEER
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        @if($post->reading_time)
                        <span class="text-text-tertiary text-xs font-medium">{{ $post->reading_time }} min lectura</span>
                        @endif
                    </div>
                </div>
            </article>
            @empty
            <div class="col-span-full text-center py-20 bg-slate-50 rounded-3xl border border-border-light">
                <h3 class="text-2xl font-black text-text-primary mb-4 uppercase tracking-widest">Próximamente</h3>
                <p class="text-text-secondary font-medium">Estamos preparando contenido de valor para vos. Volvé muy pronto.</p>
            </div>
            @endforelse
        </div>

        @if($posts->hasPages())
        <div class="mt-16 flex justify-center">
            {{ $posts->links() }}
        </div>
        @endif

    </div>
</section>

{{-- CTA intermedio — bg-slate-50 --}}
<section class="py-16 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h3 class="text-2xl lg:text-3xl font-black text-text-primary mb-4 tracking-tight">¿Querés ver CEOnline en acción?</h3>
        <p class="text-text-secondary font-medium text-lg mb-8 max-w-2xl mx-auto">Probá el sistema 30 días gratis. Sin tarjeta, sin compromiso.</p>
        <a href="{{ route('trial') }}" class="btn-primary !py-4 !px-10 !text-base animate-cta-pulse">Probar Gratis 30 Días</a>
    </div>
</section>

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

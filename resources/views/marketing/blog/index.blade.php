@extends('marketing.layouts.master')

@section('title', 'Blog & Recursos - CEO Online')
@section('description', 'Consejos, novedades y mejores prácticas para administradores de consorcios y edificios.')

@section('content')

{{-- Header --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-32 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
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

{{-- Blog Grid --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
            @forelse($posts as $post)
            <article class="group flex flex-col hover:transform hover:-translate-y-2 transition-all duration-500">
                @if($post->image)
                <a href="{{ route('blog.show', $post->slug) }}" class="block aspect-video bg-gray-100 overflow-hidden rounded-2xl mb-8 shadow-sm">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </a>
                @else
                <div class="aspect-video bg-primary/5 rounded-2xl mb-8 flex items-center justify-center">
                    <span class="text-primary font-black text-2xl uppercase tracking-widest opacity-20">CEOnline</span>
                </div>
                @endif
                
                <div class="flex-1 flex flex-col">
                    <div class="flex items-center gap-4 mb-4 text-[10px] font-black uppercase tracking-widest text-primary">
                        <time datetime="{{ ($post->published_at ?? $post->created_at)->toDateString() }}">{{ ($post->published_at ?? $post->created_at)->format('d M, Y') }}</time>
                        <span class="w-1 h-1 bg-primary rounded-full"></span>
                        <span>{{ $post->category?->name ?? 'Blog' }}</span>
                        <span class="w-1 h-1 bg-primary rounded-full"></span>
                        <span>{{ $post->reading_time }} min</span>
                    </div>
                    
                    <a href="{{ route('blog.show', $post->slug) }}" class="block mb-4">
                        <h2 class="text-2xl font-black text-text-primary group-hover:text-primary transition-colors leading-[1.2] tracking-tight">
                            {{ $post->title }}
                        </h2>
                    </a>
                    
                    <p class="text-text-secondary font-medium line-clamp-3 mb-8 flex-1 leading-relaxed">
                        {{ $post->excerpt }}
                    </p>
                    
                    <div class="mt-auto">
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-primary font-black text-sm uppercase tracking-widest hover:text-text-primary transition-colors underline decoration-2 underline-offset-8">
                            LEER ARTÍCULO
                        </a>
                    </div>
                </div>
            </article>
            @empty
            <div class="col-span-full text-center py-20 bg-bg rounded-3xl border border-border-light">
                <h3 class="text-2xl font-black text-text-primary mb-4 uppercase tracking-widest">Próximamente</h3>
                <p class="text-text-secondary font-medium">Estamos preparando contenido de valor para vos. Volvé muy pronto.</p>
            </div>
            @endforelse
        </div>

        @if($posts->hasPages())
        <div class="mt-20 flex justify-center">
            {{ $posts->links() }}
        </div>
        @endif

    </div>
</section>

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

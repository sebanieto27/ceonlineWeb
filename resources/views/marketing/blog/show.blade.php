@extends('marketing.layouts.master')

@section('title', $post->seo_title ?? $post->title . ' - CEO Online')
@section('description', $post->seo_description ?? Str::limit(strip_tags($post->excerpt), 150))
@if($post->image)
@section('og_image', $post->image)
@endif

@section('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BlogPosting",
    "mainEntityOfPage": {
        "@@type": "WebPage",
        "@@id": "{{ url()->current() }}"
    },
    "headline": "{{ $post->title }}",
    @if($post->image)"image": ["{{ $post->image }}"],@endif
    "datePublished": "{{ ($post->published_at ?? $post->created_at)->toIso8601String() }}",
    "dateModified": "{{ $post->updated_at->toIso8601String() }}",
    "author": {
        "@@type": "Organization",
        "name": "CEO Online",
        "url": "https://ceonline.com.ar"
    },
    "publisher": {
        "@@type": "Organization",
        "name": "CEO Online",
        "logo": {
            "@@type": "ImageObject",
            "url": "{{ asset('logo/logo-ceonline.png') }}"
        }
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Inicio", "item": "{{ route('home') }}" },
        { "@@type": "ListItem", "position": 2, "name": "Blog", "item": "{{ route('blog.index') }}" },
        { "@@type": "ListItem", "position": 3, "name": "{{ $post->title }}" }
    ]
}
</script>
@endsection

@section('content')

{{-- Blog Article Header --}}
<section class="gradient-hero gradient-mesh pt-24 lg:pt-32 pb-16 overflow-hidden relative">
    <div class="absolute inset-0 bg-texture-dots opacity-20 pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        {{-- Breadcrumbs --}}
        <nav class="flex items-center justify-center gap-2 text-sm text-text-secondary font-medium mb-8">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Inicio</a>
            <span class="text-border-light">/</span>
            <a href="{{ route('blog.index') }}" class="hover:text-primary transition-colors">Blog</a>
            @if($post->category)
            <span class="text-border-light">/</span>
            <span class="text-primary">{{ $post->category->name }}</span>
            @endif
        </nav>
        <h1 class="text-4xl lg:text-[5rem] font-black text-text-primary leading-[1.05] tracking-tight mb-12">
            {{ $post->title }}
        </h1>
        <div class="flex items-center justify-center gap-6 text-[10px] font-black uppercase tracking-widest text-text-secondary">
            <time datetime="{{ ($post->published_at ?? $post->created_at)->toDateString() }}">{{ ($post->published_at ?? $post->created_at)->format('d \d\e F, Y') }}</time>
            <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
            <span>Lectura de {{ $post->reading_time }} min</span>
        </div>
    </div>
</section>

@if($post->image)
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-24">
    <div class="aspect-[21/9] rounded-[2rem] overflow-hidden shadow-2xl shadow-primary/5 border border-border-light relative">
        <img src="{{ $post->image }}" alt="{{ $post->title }}" loading="eager" decoding="async" fetchpriority="high" class="w-full h-full object-cover">
    </div>
</div>
@endif

{{-- Blog Content --}}
<section class="pb-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-12 gap-24">
        
        {{-- Progress Sidebar (Desktop) --}}
        <div class="hidden lg:block lg:col-span-2">
            <div class="sticky top-32">
                <div class="mb-10">
                    <span class="text-[9px] font-black text-text-tertiary uppercase tracking-[0.4em] block mb-6">Compartir</span>
                    <div class="flex flex-col gap-4">
                        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ urlencode($post->title) }}" target="_blank" class="w-12 h-12 rounded-xl bg-bg border border-border-light flex items-center justify-center text-text-primary hover:bg-primary hover:text-white hover:border-primary transition-all duration-300">
                           <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ urlencode($post->title) }}" target="_blank" class="w-12 h-12 rounded-xl bg-bg border border-border-light flex items-center justify-center text-text-primary hover:bg-[#0A66C2] hover:text-white hover:border-[#0A66C2] transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($post->title . ' — ' . url()->current()) }}" target="_blank" class="w-12 h-12 rounded-xl bg-bg border border-border-light flex items-center justify-center text-text-primary hover:bg-[#25D366] hover:text-white hover:border-[#25D366] transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main Article Content --}}
        <div class="lg:col-span-10 lg:pl-12">
            <div class="max-w-3xl">
                <article class="prose prose-2xl prose-slate max-w-none 
                    prose-headings:font-black prose-headings:tracking-tighter prose-headings:text-text-primary
                    prose-p:font-medium prose-p:text-text-secondary prose-p:leading-relaxed
                    prose-a:text-primary prose-a:no-underline hover:prose-a:underline
                    prose-strong:text-text-primary prose-strong:font-black
                    prose-img:rounded-3xl prose-img:border prose-img:border-border-light prose-img:shadow-xl">
                    {!! $post->content !!}
                </article>
                
                {{-- Author/Bio Mini --}}
                <div class="mt-24 pt-12 border-t border-border-light flex items-center gap-6">
                    <div class="w-16 h-16 bg-primary/5 rounded-full flex items-center justify-center font-black text-primary text-xl">CEO</div>
                    <div>
                        <h4 class="font-black text-text-primary text-lg mb-1">Equipo CEO Online</h4>
                        <p class="text-text-secondary font-medium">Digitalizando la administración de consorcios en Argentina.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Related Posts — bg-slate-50 --}}
@if(isset($relatedPosts) && $relatedPosts->count())
<section class="py-20 lg:py-28 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
         x-data="{ shown: false }" x-intersect.once="shown = true"
         :class="shown ? 'animate-section-reveal' : 'opacity-0'">
        <div class="text-center mb-12">
            <span class="inline-block px-3 py-1 bg-primary/10 text-primary font-black text-xs uppercase tracking-[0.2em] rounded-full mb-4">Seguí leyendo</span>
            <h2 class="text-3xl lg:text-4xl font-black text-text-primary tracking-tight">Artículos relacionados</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($relatedPosts as $related)
            <article class="group bg-white rounded-2xl border border-border-light overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-500">
                @if($related->image)
                <a href="{{ route('blog.show', $related->slug) }}" class="block aspect-video overflow-hidden">
                    <img src="{{ $related->image }}" alt="{{ $related->title }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </a>
                @else
                <div class="aspect-video bg-gradient-to-br from-primary/5 to-secondary/5 flex items-center justify-center">
                    <span class="text-primary font-black text-xl uppercase tracking-widest opacity-20">CEOnline</span>
                </div>
                @endif
                <div class="p-6">
                    @if($related->category)
                    <span class="inline-block px-3 py-1 bg-primary/10 text-primary font-black text-[10px] uppercase tracking-[0.2em] rounded-full mb-3">{{ $related->category->name }}</span>
                    @endif
                    <a href="{{ route('blog.show', $related->slug) }}">
                        <h3 class="text-lg font-black text-text-primary group-hover:text-primary transition-colors leading-tight tracking-tight">{{ $related->title }}</h3>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

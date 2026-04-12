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
<section class="pt-24 lg:pt-32 pb-16 bg-white overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
        <div class="absolute inset-0 bg-texture-dots opacity-20 pointer-events-none"></div>
        <div class="relative z-10">
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
    </div>
</section>

@if($post->image)
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-24">
    <div class="aspect-[21/9] rounded-[2rem] overflow-hidden shadow-2xl shadow-primary/5 border border-border-light relative">
        <img src="{{ $post->image }}" alt="{{ $post->title }}" loading="lazy" class="w-full h-full object-cover">
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

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

@php
    $routeName = \Illuminate\Support\Facades\Route::currentRouteName();
    $banners = \App\Models\Banner::active()->forPage($routeName)->orderBy('sort_order')->get();
@endphp

{{-- Top Bar Banners --}}
@foreach($banners->where('type', 'top_bar') as $banner)
<div x-data="{ dismissed: localStorage.getItem('banner_{{ $banner->id }}') }"
     x-show="!dismissed"
     x-transition
     class="relative z-40 text-center py-2.5 px-4 text-sm font-medium"
     style="background-color: {{ $banner->bg_color }}; color: {{ $banner->text_color }}">
    <span>{{ $banner->title }}</span>
    @if($banner->body)
        <span class="hidden sm:inline"> — {{ $banner->body }}</span>
    @endif
    @if($banner->cta_text && $banner->cta_url)
        <a href="{{ $banner->cta_url }}" class="ml-2 underline font-bold hover:opacity-80" style="color: {{ $banner->text_color }}">{{ $banner->cta_text }} →</a>
    @endif
    @if($banner->is_dismissible)
        <button @click="dismissed = true; localStorage.setItem('banner_{{ $banner->id }}', '1')"
                class="absolute right-3 top-1/2 -translate-y-1/2 opacity-70 hover:opacity-100 text-lg" style="color: {{ $banner->text_color }}">&times;</button>
    @endif
</div>
@endforeach

{{-- Popup Banners --}}
@foreach($banners->where('type', 'popup') as $banner)
<div x-data="{ open: !localStorage.getItem('banner_{{ $banner->id }}') }"
     x-show="open"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     x-cloak
     class="fixed inset-0 z-[90] flex items-center justify-center bg-black/50 backdrop-blur-sm p-4">
    <div class="rounded-2xl shadow-2xl max-w-md w-full p-8 relative"
         style="background-color: {{ $banner->bg_color }}; color: {{ $banner->text_color }}">
        @if($banner->is_dismissible)
            <button @click="open = false; localStorage.setItem('banner_{{ $banner->id }}', '1')"
                    class="absolute top-3 right-3 text-2xl leading-none opacity-70 hover:opacity-100" style="color: {{ $banner->text_color }}">&times;</button>
        @endif
        <h3 class="text-xl font-bold mb-2">{{ $banner->title }}</h3>
        @if($banner->body)
            <p class="opacity-90 mb-4">{{ $banner->body }}</p>
        @endif
        @if($banner->cta_text && $banner->cta_url)
            <a href="{{ $banner->cta_url }}"
               class="inline-block px-6 py-2.5 rounded-lg font-semibold transition-opacity hover:opacity-90"
               style="background-color: {{ $banner->text_color }}; color: {{ $banner->bg_color }}">
                {{ $banner->cta_text }}
            </a>
        @endif
    </div>
</div>
@endforeach

{{-- Bottom Bar Banners --}}
@foreach($banners->where('type', 'bottom_bar') as $banner)
<div x-data="{ dismissed: localStorage.getItem('banner_{{ $banner->id }}') }"
     x-show="!dismissed"
     x-transition
     class="fixed bottom-0 left-0 right-0 z-40 text-center py-3 px-4 text-sm font-medium shadow-lg"
     style="background-color: {{ $banner->bg_color }}; color: {{ $banner->text_color }}">
    <span>{{ $banner->title }}</span>
    @if($banner->body)
        <span class="hidden sm:inline"> — {{ $banner->body }}</span>
    @endif
    @if($banner->cta_text && $banner->cta_url)
        <a href="{{ $banner->cta_url }}" class="ml-2 underline font-bold hover:opacity-80" style="color: {{ $banner->text_color }}">{{ $banner->cta_text }} →</a>
    @endif
    @if($banner->is_dismissible)
        <button @click="dismissed = true; localStorage.setItem('banner_{{ $banner->id }}', '1')"
                class="absolute right-3 top-1/2 -translate-y-1/2 opacity-70 hover:opacity-100 text-lg" style="color: {{ $banner->text_color }}">&times;</button>
    @endif
</div>
@endforeach

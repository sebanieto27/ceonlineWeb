{{-- Feature Card Component --}}
@props(['icon' => '⚡', 'title' => '', 'description' => '', 'delay' => '0'])

<div class="group bg-surface rounded-2xl p-8 border border-border-light hover:border-primary/30 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300 hover:-translate-y-1"
     style="animation-delay: {{ $delay }}ms">
    <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-2xl mb-5 group-hover:bg-primary/20 group-hover:scale-110 transition-all duration-300">
        {{ $icon }}
    </div>
    <h3 class="text-xl font-bold text-text-primary mb-3">{{ $title }}</h3>
    <p class="text-text-secondary leading-relaxed">{{ $description }}</p>
</div>

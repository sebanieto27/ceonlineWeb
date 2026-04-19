{{-- Testimonial Section Component (Light Background, Card-based Carousel) --}}
@php
    $items = isset($testimonials) && $testimonials->count()
        ? $testimonials->map(fn($t) => ['quote' => $t->quote, 'author' => $t->author, 'role' => $t->role, 'initials' => $t->initials, 'photo' => $t->photo ? asset('storage/' . $t->photo) : null])->values()->toArray()
        : [];
@endphp
<section class="bg-slate-50 py-24 lg:py-32 relative overflow-hidden" x-data="{ 
    active: 0, 
    testimonials: {{ Js::from($items) }},
    next() { this.testimonials.length && (this.active = (this.active + 1) % this.testimonials.length) },
    prev() { this.testimonials.length && (this.active = (this.active - 1 + this.testimonials.length) % this.testimonials.length) }
}" x-show="testimonials.length > 0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="text-center mb-16 lg:mb-24">
            <h2 class="text-3xl lg:text-6xl font-black text-text-primary leading-[1.05] tracking-tight">
                Lo que dicen nuestros clientes
            </h2>
        </div>

        <div class="max-w-5xl mx-auto relative group">
            {{-- Carousel Track --}}
            <div class="relative min-h-[400px] lg:min-h-[350px] flex items-center">
                <template x-for="(t, index) in testimonials" :key="index">
                    <div x-show="active === index" 
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 translate-y-8"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-300 absolute"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-8"
                         class="w-full">
                        
                        {{-- Card wrapper --}}
                        <div class="bg-white rounded-3xl p-10 lg:p-14 border border-border-light shadow-sm">
                            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-14">
                                {{-- Avatar/Photo --}}
                                <div class="shrink-0">
                                    <div class="w-28 h-28 lg:w-40 lg:h-40 bg-white border-4 border-primary/20 shadow-lg rounded-[2rem] flex items-center justify-center text-3xl lg:text-5xl font-black text-primary relative overflow-hidden">
                                        <template x-if="t.photo">
                                            <img :src="t.photo" :alt="t.author" class="w-full h-full object-cover">
                                        </template>
                                        <template x-if="!t.photo">
                                            <span x-text="t.initials"></span>
                                        </template>
                                        <div class="absolute -bottom-3 -right-3 w-10 h-10 bg-success rounded-full flex items-center justify-center text-white border-4 border-white">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                {{-- Quote Text --}}
                                <div class="flex-1 text-center lg:text-left">
                                    <blockquote class="text-xl lg:text-3xl font-bold text-text-primary leading-[1.3] tracking-tight italic mb-8">
                                        <span x-text="'&quot;' + t.quote + '&quot;'"></span>
                                    </blockquote>
                                    <div>
                                        <p class="text-lg lg:text-xl font-black text-primary tracking-tight" x-text="t.author"></p>
                                        <p class="text-text-tertiary font-bold text-xs lg:text-sm uppercase tracking-[0.2em] mt-2" x-text="t.role"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            {{-- Controls --}}
            <div class="mt-10 lg:mt-14 flex justify-center gap-4 relative z-20">
                <button @click="prev()" aria-label="Testimonio anterior" class="p-4 bg-white border border-border-light text-text-primary rounded-2xl hover:bg-primary hover:text-white hover:border-primary transition-all duration-300 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button @click="next()" aria-label="Siguiente testimonio" class="p-4 bg-white border border-border-light text-text-primary rounded-2xl hover:bg-primary hover:text-white hover:border-primary transition-all duration-300 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
            
            {{-- Dots Indicator --}}
            <div class="flex justify-center gap-2 mt-6" role="tablist" aria-label="Testimonios">
                <template x-for="(t, index) in testimonials" :key="index">
                    <button @click="active = index" 
                            :aria-label="'Ir al testimonio ' + (index + 1)"
                            role="tab"
                            :aria-selected="active === index"
                            class="h-1.5 transition-all duration-500 rounded-full"
                            :class="active === index ? 'w-12 bg-primary' : 'w-3 bg-gray-300 hover:bg-primary/30'"></button>
                </template>
            </div>
        </div>
    </div>
</section>

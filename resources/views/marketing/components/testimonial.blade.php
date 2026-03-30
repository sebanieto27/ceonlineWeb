{{-- Testimonial Section Component (Slack-inspired Carousel) --}}
<section class="bg-white py-24 lg:py-32 relative overflow-hidden" x-data="{ 
    active: 0, 
    testimonials: [
        {
            quote: 'La integración de software e imprenta propia es lo que nos hizo elegir a CEO Online. Resolvemos todo en un solo lugar y ahorramos días de logística cada mes.',
            author: 'Administración VITALE',
            initials: 'AV'
        },
        {
            quote: 'La transparencia hacia el propietario es total. Tener un panel interactivo y el chat centralizado redujo considerablemente las consultas en oficina.',
            author: 'Administración GULFI',
            initials: 'AG'
        },
        {
            quote: 'El cerebro colectivo del sistema nos permite gestionar más de 50 edificios con el mismo personal. La eficiencia operativa es nuestra mayor ventaja.',
            author: 'Administración MASOLA',
            initials: 'AM'
        },
        {
            quote: 'Elegimos CEO Online por ser la solución líder en Mar del Plata. Es tecnología PropTech real que entiende las necesidades locales del administrador.',
            author: 'Administración GUILLONE',
            initials: 'AG'
        },
        {
            quote: 'La automatización con IA para procesar comprobantes es un antes y un después. Recuperamos más de 20 horas semanales de carga manual de datos.',
            author: 'Administración SIANO Y ASOCIADOS',
            initials: 'AS'
        }
    ],
    next() { this.active = (this.active + 1) % this.testimonials.length },
    prev() { this.active = (this.active - 1 + this.testimonials.length) % this.testimonials.length }
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 lg:mb-24">
            <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
                Casos de Éxito
            </span>
            <h2 class="text-3xl lg:text-7xl font-black text-text-primary mt-8 leading-[1.05] tracking-tight">
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
                        
                        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                            {{-- Avatar/Initials --}}
                            <div class="shrink-0">
                                <div class="w-32 h-32 lg:w-48 lg:h-48 bg-bg border-4 border-white shadow-2xl rounded-[2.5rem] flex items-center justify-center text-4xl lg:text-6xl font-black text-primary relative">
                                    <span x-text="t.initials"></span>
                                    <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-success rounded-full flex items-center justify-center text-white border-4 border-white">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            {{-- Quote Text --}}
                            <div class="flex-1 text-center lg:text-left">
                                <blockquote class="text-2xl lg:text-4xl font-bold text-text-primary leading-[1.25] tracking-tight italic mb-8">
                                    <span x-text="'&quot;' + t.quote + '&quot;'"></span>
                                </blockquote>
                                <div>
                                    <p class="text-xl lg:text-2xl font-black text-primary tracking-tight" x-text="t.author"></p>
                                    <p class="text-text-secondary font-bold text-xs lg:text-sm uppercase tracking-[0.2em] mt-2">Usuario verificado de CEO Online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            {{-- Controls --}}
            <div class="mt-12 lg:mt-16 flex justify-center lg:justify-start lg:ml-[250px] gap-4 relative z-20">
                <button @click="prev()" class="p-4 bg-bg border border-border-light rounded-2xl hover:bg-primary hover:text-white transition-all duration-300 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button @click="next()" class="p-4 bg-bg border border-border-light rounded-2xl hover:bg-primary hover:text-white transition-all duration-300 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
            
            {{-- Dots Indicator --}}
            <div class="absolute bottom-[-60px] lg:bottom-4 right-0 flex gap-2">
                <template x-for="(t, index) in testimonials" :key="index">
                    <button @click="active = index" 
                            class="h-1.5 transition-all duration-500 rounded-full"
                            :class="active === index ? 'w-12 bg-primary' : 'w-3 bg-border-light hover:bg-primary/30'"></button>
                </template>
            </div>
        </div>
    </div>
</section>

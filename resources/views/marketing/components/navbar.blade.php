{{-- Navbar Component - Slack-inspired Pill --}}
<header x-data="{ ...mobileMenu(), scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 30)"
        class="fixed top-0 inset-x-0 z-50 flex justify-center pointer-events-none transition-all duration-500 ease-in-out"
        :class="scrolled ? 'pt-4 px-4 sm:px-6' : 'pt-0 px-0'"
        id="main-navbar">
    
    <nav class="pointer-events-auto w-full max-w-full bg-white flex items-center justify-between relative transition-all duration-500 ease-in-out"
         :class="scrolled 
            ? 'max-w-7xl rounded-full shadow-[0_8px_30px_rgb(0,0,0,0.12)] border border-gray-100 px-5 md:px-8 py-3' 
            : 'max-w-none rounded-none shadow-none border-b border-gray-200 px-5 md:px-8 py-4'">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center shrink-0 mr-4 lg:mr-8 xl:mr-12">
            <picture>
                <source srcset="{{ asset('logo/logo-ceonline.webp') }}" type="image/webp">
                <img src="{{ asset('logo/logo-ceonline.png') }}" alt="CEO Online Logo" class="h-8 md:h-9 w-auto" width="197" height="80" fetchpriority="high">
            </picture>
        </a>

        {{-- Desktop Menu --}}
        <div class="hidden lg:flex items-center gap-1 xl:gap-3 flex-1">
            
            {{-- Funciones Megamenu --}}
            <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                <a href="{{ route('features') }}" class="flex items-center gap-1 px-3 py-2 text-[15px] font-bold text-gray-800 hover:text-primary rounded-full transition-colors" :class="{ 'text-primary bg-gray-50': open }">
                    Funciones
                    <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </a>
                
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 translate-y-3" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="absolute top-full left-0 mt-5 w-[680px] bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(0,0,0,0.15)] border border-gray-100 p-7 before:absolute before:-top-5 before:left-0 before:right-0 before:h-5 cursor-default">
                    <div class="grid grid-cols-3 gap-x-8 gap-y-2">

                        {{-- Col 1: Finanzas --}}
                        <div>
                            <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-3">Finanzas</p>
                            <a href="{{ route('features') }}#liquidaciones" class="flex items-start gap-3 py-2.5 group">
                                <div class="w-7 h-7 mt-0.5 shrink-0 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm leading-snug">Liquidaciones & Expensas</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-snug">Cerrá el mes en horas, no en días.</p>
                                </div>
                            </a>
                            <a href="{{ route('features') }}#operaciones" class="flex items-start gap-3 py-2.5 group">
                                <div class="w-7 h-7 mt-0.5 shrink-0 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm leading-snug">Multi-consorcio</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-snug">Toda tu cartera en un solo panel.</p>
                                </div>
                            </a>
                        </div>

                        {{-- Col 2: Propietarios --}}
                        <div>
                            <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-3">Propietarios</p>
                            <a href="{{ route('features') }}#propietarios" class="flex items-start gap-3 py-2.5 group">
                                <div class="w-7 h-7 mt-0.5 shrink-0 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm leading-snug">Portal del Propietario</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-snug">Acceso 24/7 a expensas y comunicaciones.</p>
                                </div>
                            </a>
                            <a href="{{ route('features') }}#soporte" class="flex items-start gap-3 py-2.5 group">
                                <div class="w-7 h-7 mt-0.5 shrink-0 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm leading-snug">Soporte en Tiempo Real</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-snug">Chat directo, sin tickets ni esperas.</p>
                                </div>
                            </a>
                        </div>

                        {{-- Col 3: Inteligencia Artificial --}}
                        <div>
                            <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-3">Inteligencia Artificial</p>
                            <a href="{{ route('features') }}#ia-facturas" class="flex items-start gap-3 py-2.5 group">
                                <div class="w-7 h-7 mt-0.5 shrink-0 bg-purple-100 rounded-lg flex items-center justify-center group-hover:bg-purple-200 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm leading-snug flex items-center gap-2">IA para Facturas <span class="text-[10px] font-black text-purple-600 bg-purple-100 px-1.5 py-0.5 rounded-full uppercase tracking-wide">IA</span></p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-snug">Cargá comprobantes en segundos con OpenAI.</p>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="mt-5 pt-4 border-t border-gray-100 flex items-center justify-between">
                        <a href="{{ route('features') }}" class="text-xs font-bold text-gray-500 hover:text-primary transition-colors">Ver todos los módulos →</a>
                        <a href="{{ route('demo') }}" class="text-xs font-bold text-primary hover:text-primary-dark transition-colors">Solicitar Demo ➔</a>
                    </div>
                </div>
            </div>

            {{-- Soluciones Megamenu --}}
            <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                <a href="{{ route('solutions') }}" class="flex items-center gap-1 px-3 py-2 text-[15px] font-bold text-gray-800 hover:text-primary rounded-full transition-colors" :class="{ 'text-primary bg-gray-50': open }">
                    Soluciones
                    <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </a>
                
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 translate-y-3" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="absolute top-full left-0 mt-5 w-[520px] bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(0,0,0,0.15)] border border-gray-100 p-7 before:absolute before:-top-5 before:left-0 before:right-0 before:h-5 cursor-default">
                    <div class="grid grid-cols-2 gap-x-8 gap-y-2">

                        {{-- Col 1: Operación --}}
                        <div>
                            <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-3">Operación</p>
                            <a href="{{ route('solutions') }}" class="flex items-start gap-3 py-2.5 group">
                                <div class="w-7 h-7 mt-0.5 shrink-0 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm leading-snug">Cierre mensual sin estrés</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-snug">Cerrá el mes en horas, no en días.</p>
                                </div>
                            </a>
                            <a href="{{ route('solutions') }}" class="flex items-start gap-3 py-2.5 group">
                                <div class="w-7 h-7 mt-0.5 shrink-0 bg-purple-100 rounded-lg flex items-center justify-center group-hover:bg-purple-200 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm leading-snug">Facturas con IA</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-snug">Cargá comprobantes en segundos.</p>
                                </div>
                            </a>
                        </div>

                        {{-- Col 2: Crecimiento --}}
                        <div>
                            <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-3">Crecimiento</p>
                            <a href="{{ route('solutions') }}" class="flex items-start gap-3 py-2.5 group">
                                <div class="w-7 h-7 mt-0.5 shrink-0 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm leading-snug">Propietarios informados</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-snug">Portal 24/7, sin llamadas al administrador.</p>
                                </div>
                            </a>
                            <a href="{{ route('solutions') }}" class="flex items-start gap-3 py-2.5 group">
                                <div class="w-7 h-7 mt-0.5 shrink-0 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm leading-snug">Gestión multi-consorcio</p>
                                    <p class="text-xs text-gray-500 mt-0.5 leading-snug">Toda tu cartera en un solo panel.</p>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="mt-5 pt-4 border-t border-gray-100 flex items-center justify-between">
                        <a href="{{ route('solutions') }}" class="text-xs font-bold text-gray-500 hover:text-primary transition-colors">Ver todas las soluciones →</a>
                        <a href="{{ route('demo') }}" class="text-xs font-bold text-primary hover:text-primary-dark transition-colors">Solicitar Demo ➔</a>
                    </div>
                </div>
            </div>

            <a href="{{ route('about') }}" class="px-3 py-2 text-[15px] font-semibold text-gray-800 hover:text-primary rounded-full transition-colors">Empresa</a>

            {{-- Recursos Dropdown --}}
            <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                <a href="{{ route('blog.index') }}" class="flex items-center gap-1 px-3 py-2 text-[15px] font-bold text-gray-800 hover:text-primary rounded-full transition-colors" :class="{ 'text-primary bg-gray-50': open }">
                    Recursos
                    <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 translate-y-3" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="absolute top-full left-0 mt-5 w-[300px] bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(0,0,0,0.15)] border border-gray-100 p-5 before:absolute before:-top-5 before:left-0 before:right-0 before:h-5 cursor-default">
                    <a href="{{ route('blog.index') }}" class="flex items-start gap-3 py-2.5 group rounded-xl hover:bg-gray-50 px-2 transition-colors">
                        <div class="w-7 h-7 mt-0.5 shrink-0 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                            <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm leading-snug">Blog y Novedades</p>
                            <p class="text-xs text-gray-500 mt-0.5 leading-snug">Tips, normativas y gestión de consorcios.</p>
                        </div>
                    </a>
                    <a href="{{ route('contact') }}" class="flex items-start gap-3 py-2.5 group rounded-xl hover:bg-gray-50 px-2 transition-colors">
                        <div class="w-7 h-7 mt-0.5 shrink-0 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                            <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm leading-snug">Contacto</p>
                            <p class="text-xs text-gray-500 mt-0.5 leading-snug">Hablá con nuestro equipo.</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        {{-- Spacer to push right elements --}}
        <div class="hidden lg:block flex-1"></div>

        {{-- Desktop CTAs --}}
        <div class="hidden lg:flex items-center gap-3 xl:gap-4 shrink-0 relative z-50">
            <a href="{{ route('demo') }}" class="px-5 py-2.5 text-[13px] font-bold text-primary border border-gray-200 rounded-full hover:border-primary hover:bg-primary/5 transition-all uppercase tracking-widest whitespace-nowrap hidden xl:block">Solicitar Demo</a>
            <a href="{{ route('trial') }}" class="px-6 py-2.5 text-[13px] font-bold text-white bg-primary rounded-full hover:bg-primary-dark hover:scale-105 transition-all duration-300 uppercase tracking-widest whitespace-nowrap shadow-[0_4px_14px_rgba(23,157,217,0.39)]">Comenzar</a>
        </div>

        {{-- Mobile Hamburger --}}
        <button @click="toggle" class="lg:hidden p-2.5 rounded-full hover:bg-gray-50 text-gray-800 transition-colors relative z-50" aria-label="Menú">
            <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </nav>

    {{-- Mobile Menu Drawer --}}
    <div x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="absolute top-[88px] left-4 right-4 bg-white rounded-3xl shadow-2xl border border-gray-100 lg:hidden pointer-events-auto overflow-hidden z-40">

        {{-- Panel principal --}}
        <div x-show="mobileSection === 'main'" class="p-6">
            <nav>
                <button @click="mobileSection = 'funciones'" class="w-full flex items-center justify-between py-3.5 border-b border-gray-100 group">
                    <span class="text-base font-bold text-gray-900 group-hover:text-primary transition-colors">Funciones</span>
                    <svg class="w-4 h-4 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>
                <button @click="mobileSection = 'soluciones'" class="w-full flex items-center justify-between py-3.5 border-b border-gray-100 group">
                    <span class="text-base font-bold text-gray-900 group-hover:text-primary transition-colors">Soluciones</span>
                    <svg class="w-4 h-4 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>
                <a href="{{ route('about') }}" @click="close" class="flex items-center justify-between py-3.5 border-b border-gray-100 group">
                    <span class="text-base font-bold text-gray-900 group-hover:text-primary transition-colors">Empresa</span>
                    <svg class="w-4 h-4 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </a>
                <button @click="mobileSection = 'recursos'" class="w-full flex items-center justify-between py-3.5 border-b border-gray-100 group">
                    <span class="text-base font-bold text-gray-900 group-hover:text-primary transition-colors">Recursos</span>
                    <svg class="w-4 h-4 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>
            </nav>
            <div class="mt-6 space-y-3 flex flex-col">
                <a href="{{ route('trial') }}" @click="close" class="px-5 py-3.5 text-sm font-bold text-white bg-primary rounded-xl text-center uppercase tracking-wide shadow-sm hover:bg-primary-dark transition-colors">Comenzar</a>
                <a href="{{ route('demo') }}" @click="close" class="px-5 py-3.5 text-sm font-bold text-primary border-2 border-primary/20 rounded-xl text-center uppercase tracking-wide hover:border-primary hover:bg-primary/5 transition-colors">Solicitar Demo</a>
            </div>
        </div>

        {{-- Sub-panel: Funciones --}}
        <div x-show="mobileSection === 'funciones'" class="overflow-y-auto max-h-[80vh]">
            <div class="sticky top-0 bg-white px-6 pt-5 pb-3 border-b border-gray-100">
                <button @click="mobileSection = 'main'" class="flex items-center gap-1.5 text-sm font-bold text-primary mb-3">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                    Atrás
                </button>
                <h2 class="text-xl font-black text-gray-900">Funciones</h2>
            </div>
            <div class="px-6 py-4 space-y-6">
                <div>
                    <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-2">Finanzas</p>
                    <a href="{{ route('features') }}#liquidaciones" @click="close" class="block py-3 group">
                        <p class="font-bold text-gray-900 group-hover:text-primary transition-colors">Liquidaciones & Expensas</p>
                        <p class="text-sm text-gray-500 mt-0.5">Cerrá el mes en horas, no en días.</p>
                    </a>
                    <a href="{{ route('features') }}#operaciones" @click="close" class="block py-3 group border-t border-gray-50">
                        <p class="font-bold text-gray-900 group-hover:text-primary transition-colors">Multi-consorcio</p>
                        <p class="text-sm text-gray-500 mt-0.5">Toda tu cartera en un solo panel.</p>
                    </a>
                </div>
                <div>
                    <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-2">Propietarios</p>
                    <a href="{{ route('features') }}#propietarios" @click="close" class="block py-3 group">
                        <p class="font-bold text-gray-900 group-hover:text-primary transition-colors">Portal del Propietario</p>
                        <p class="text-sm text-gray-500 mt-0.5">Acceso 24/7 a expensas y comunicaciones.</p>
                    </a>
                    <a href="{{ route('features') }}#soporte" @click="close" class="block py-3 group border-t border-gray-50">
                        <p class="font-bold text-gray-900 group-hover:text-primary transition-colors">Soporte en Tiempo Real</p>
                        <p class="text-sm text-gray-500 mt-0.5">Chat directo, sin tickets ni esperas.</p>
                    </a>
                </div>
                <div>
                    <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-2">Inteligencia Artificial</p>
                    <a href="{{ route('features') }}#ia-facturas" @click="close" class="block py-3 group">
                        <p class="font-bold text-gray-900 group-hover:text-primary transition-colors flex items-center gap-2">IA para Facturas <span class="text-[10px] font-black text-purple-600 bg-purple-100 px-1.5 py-0.5 rounded-full uppercase tracking-wide">IA</span></p>
                        <p class="text-sm text-gray-500 mt-0.5">Cargá comprobantes en segundos con OpenAI.</p>
                    </a>
                </div>
            </div>
            <div class="px-6 pb-6">
                <a href="{{ route('features') }}" @click="close" class="block text-center py-3.5 text-sm font-bold text-primary border-2 border-primary/20 rounded-xl hover:border-primary hover:bg-primary/5 transition-colors">Ver todos los módulos →</a>
            </div>
        </div>

        {{-- Sub-panel: Soluciones --}}
        <div x-show="mobileSection === 'soluciones'" class="overflow-y-auto max-h-[80vh]">
            <div class="sticky top-0 bg-white px-6 pt-5 pb-3 border-b border-gray-100">
                <button @click="mobileSection = 'main'" class="flex items-center gap-1.5 text-sm font-bold text-primary mb-3">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                    Atrás
                </button>
                <h2 class="text-xl font-black text-gray-900">Soluciones</h2>
            </div>
            <div class="px-6 py-4 space-y-6">
                <div>
                    <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-2">Operación</p>
                    <a href="{{ route('solutions') }}" @click="close" class="block py-3 group">
                        <p class="font-bold text-gray-900 group-hover:text-primary transition-colors">Cierre mensual sin estrés</p>
                        <p class="text-sm text-gray-500 mt-0.5">Cerrá el mes en horas, no en días.</p>
                    </a>
                    <a href="{{ route('solutions') }}" @click="close" class="block py-3 group border-t border-gray-50">
                        <p class="font-bold text-gray-900 group-hover:text-primary transition-colors">Facturas con IA</p>
                        <p class="text-sm text-gray-500 mt-0.5">Cargá comprobantes en segundos.</p>
                    </a>
                </div>
                <div>
                    <p class="text-[11px] font-black text-gray-400 uppercase tracking-widest mb-2">Crecimiento</p>
                    <a href="{{ route('solutions') }}" @click="close" class="block py-3 group">
                        <p class="font-bold text-gray-900 group-hover:text-primary transition-colors">Propietarios informados</p>
                        <p class="text-sm text-gray-500 mt-0.5">Portal 24/7, sin llamadas al administrador.</p>
                    </a>
                    <a href="{{ route('solutions') }}" @click="close" class="block py-3 group border-t border-gray-50">
                        <p class="font-bold text-gray-900 group-hover:text-primary transition-colors">Gestión multi-consorcio</p>
                        <p class="text-sm text-gray-500 mt-0.5">Toda tu cartera en un solo panel.</p>
                    </a>
                </div>
            </div>
            <div class="px-6 pb-6">
                <a href="{{ route('solutions') }}" @click="close" class="block text-center py-3.5 text-sm font-bold text-primary border-2 border-primary/20 rounded-xl hover:border-primary hover:bg-primary/5 transition-colors">Ver todas las soluciones →</a>
            </div>
        </div>

        {{-- Sub-panel: Recursos --}}
        <div x-show="mobileSection === 'recursos'" class="overflow-y-auto max-h-[80vh]">
            <div class="sticky top-0 bg-white px-6 pt-5 pb-3 border-b border-gray-100">
                <button @click="mobileSection = 'main'" class="flex items-center gap-1.5 text-sm font-bold text-primary mb-3">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                    Atrás
                </button>
                <h2 class="text-xl font-black text-gray-900">Recursos</h2>
            </div>
            <div class="px-6 py-4">
                <a href="{{ route('blog.index') }}" @click="close" class="block py-3 group">
                    <p class="font-bold text-gray-900 group-hover:text-primary transition-colors">Blog y Novedades</p>
                    <p class="text-sm text-gray-500 mt-0.5">Tips, normativas y gestión de consorcios.</p>
                </a>
                <a href="{{ route('contact') }}" @click="close" class="block py-3 group border-t border-gray-50">
                    <p class="font-bold text-gray-900 group-hover:text-primary transition-colors">Contacto</p>
                    <p class="text-sm text-gray-500 mt-0.5">Hablá con nuestro equipo.</p>
                </a>
            </div>
        </div>

    </div>
</header>

{{-- Spacer for floating navbar so content doesn't hide underneath initially --}}
<div class="h-[104px] w-full bg-white hidden"></div>

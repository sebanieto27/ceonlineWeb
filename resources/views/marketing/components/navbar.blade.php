{{-- Navbar Component - Slack-inspired Pill --}}
<header x-data="{ ...mobileMenu(), scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 30)"
        class="fixed top-0 inset-x-0 z-50 flex justify-center pointer-events-none transition-all duration-500 ease-in-out"
        :class="scrolled ? 'pt-4 px-4 sm:px-6' : 'pt-0 px-0'"
        id="main-navbar">
    
    <nav class="pointer-events-auto w-full max-w-full bg-white flex items-center justify-between relative transition-all duration-500 ease-in-out overflow-hidden"
         :class="scrolled 
            ? 'max-w-7xl rounded-full shadow-[0_8px_30px_rgb(0,0,0,0.12)] border border-gray-100 px-5 md:px-8 py-3' 
            : 'max-w-none rounded-none shadow-none border-b border-gray-200 px-5 md:px-8 py-4'">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center shrink-0 mr-4 lg:mr-8 xl:mr-12">
            <img src="{{ asset('logo/logo-ceonline.png') }}" alt="CEO Online Logo" class="h-8 md:h-9 w-auto">
        </a>

        {{-- Desktop Menu --}}
        <div class="hidden lg:flex items-center gap-1 xl:gap-3 flex-1">
            
            {{-- Funciones Megamenu --}}
            <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                <button class="flex items-center gap-1 px-3 py-2 text-[15px] font-bold text-gray-800 hover:text-primary rounded-full transition-colors" :class="{ 'text-primary bg-gray-50': open }">
                    Funciones
                </button>
                
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 translate-y-3" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="absolute top-full left-0 mt-5 w-[450px] bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 p-6 before:absolute before:-top-5 before:left-0 before:right-0 before:h-5 cursor-default">
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4 px-2">Explora las características</p>
                    <div class="grid gap-2">
                        <a href="{{ route('features') }}" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 group transition-all">
                            <div class="w-2 h-10 flex items-center justify-center shrink-0"></div>
                            <div>
                                <h4 class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm">Liquidaciones de Expensas</h4>
                                <p class="text-xs text-gray-500 mt-0.5">Cálculos automáticos y precisos.</p>
                            </div>
                        </a>
                        <a href="{{ route('features') }}" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 group transition-all">
                            <div class="w-2 h-10 flex items-center justify-center shrink-0"></div>
                            <div>
                                <h4 class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm">Comunicación directa</h4>
                                <p class="text-xs text-gray-500 mt-0.5">Chat integrado e historial transparente.</p>
                            </div>
                        </a>
                        <a href="{{ route('features') }}" class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 group transition-all">
                            <div class="w-2 h-10 flex items-center justify-center shrink-0"></div>
                            <div>
                                <h4 class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm">Reportes Financieros</h4>
                                <p class="text-xs text-gray-500 mt-0.5">Métricas al instante sobre tu consorcio.</p>
                            </div>
                        </a>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <a href="{{ route('demo') }}" class="block w-full text-center text-sm font-bold text-primary hover:text-primary-dark transition-colors">Ver demostración interactiva ➔</a>
                    </div>
                </div>
            </div>

            {{-- Soluciones Megamenu --}}
            <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                <button class="flex items-center gap-1 px-3 py-2 text-[15px] font-bold text-gray-800 hover:text-primary rounded-full transition-colors" :class="{ 'text-primary bg-gray-50': open }">
                    Soluciones
                </button>
                
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 translate-y-3" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="absolute top-full left-0 mt-5 w-[650px] bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 p-6 before:absolute before:-top-5 before:left-0 before:right-0 before:h-5 cursor-default">
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4 px-2">Soluciones por sector</p>
                    <div class="grid grid-cols-2 gap-x-6 gap-y-2">
                        <a href="{{ route('solutions') }}" class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-50 group transition-all">
                            <div class="w-2 h-10 flex items-center justify-center shrink-0"></div>
                            <div>
                                <h4 class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm">Residenciales</h4>
                                <p class="text-xs text-gray-500">Torres y departamentos</p>
                            </div>
                        </a>
                        <a href="{{ route('solutions') }}" class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-50 group transition-all">
                            <div class="w-2 h-10 flex items-center justify-center shrink-0"></div>
                            <div>
                                <h4 class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm">Centros Comerciales</h4>
                                <p class="text-xs text-gray-500">Locales y expensas mixtas</p>
                            </div>
                        </a>
                        <a href="{{ route('solutions') }}" class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-50 group transition-all">
                            <div class="w-2 h-10 flex items-center justify-center shrink-0"></div>
                            <div>
                                <h4 class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm">Corporativos</h4>
                                <p class="text-xs text-gray-500">Oficinas y coworkings</p>
                            </div>
                        </a>
                        <a href="{{ route('solutions') }}" class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-50 group transition-all">
                            <div class="w-2 h-10 flex items-center justify-center shrink-0"></div>
                            <div>
                                <h4 class="font-bold text-gray-900 group-hover:text-primary transition-colors text-sm">Pequeñas Adm.</h4>
                                <p class="text-xs text-gray-500">Hasta 50 unidades</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="px-3 py-2 text-[15px] font-semibold text-gray-800 hover:text-primary rounded-full transition-colors">Empresa</a>

            {{-- Recursos Dropdown --}}
            <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                <button class="flex items-center gap-1 px-3 py-2 text-[15px] font-bold text-gray-800 hover:text-primary rounded-full transition-colors" :class="{ 'text-primary bg-gray-50': open }">
                    Recursos
                </button>
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 translate-y-3" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="absolute top-full left-0 mt-5 w-[300px] bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 p-3 before:absolute before:-top-5 before:left-0 before:right-0 before:h-5 cursor-default">
                    <a href="{{ route('blog.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-xl transition-colors">
                        Blog y Novedades
                    </a>
                    <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-xl transition-colors">
                        Centro de Ayuda
                    </a>
                </div>
            </div>

            <a href="{{ route('pricing') }}" class="px-3 py-2 text-[15px] font-semibold text-gray-800 hover:text-primary rounded-full transition-colors">Precios</a>
        </div>

        {{-- Spacer to push right elements --}}
        <div class="hidden lg:block flex-1"></div>

        {{-- Desktop CTAs --}}
        <div class="hidden lg:flex items-center gap-3 xl:gap-4 shrink-0 relative z-50">
            <a href="{{ route('admin.login') }}" class="text-[14px] font-bold text-gray-800 hover:text-primary transition-colors px-2">Iniciar sesión</a>
            <a href="{{ route('demo') }}" class="px-5 py-2.5 text-[13px] font-bold text-primary border border-gray-200 rounded-full hover:border-primary hover:bg-primary/5 transition-all uppercase tracking-widest whitespace-nowrap hidden xl:block">Solicitar Demo</a>
            <a href="{{ route('demo') }}" class="px-6 py-2.5 text-[13px] font-bold text-white bg-primary rounded-full hover:bg-primary-dark hover:scale-105 transition-all duration-300 uppercase tracking-widest whitespace-nowrap shadow-[0_4px_14px_rgba(23,157,217,0.39)]">Comenzar</a>
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
         x-transition:enter-start="opacity-0 -translate-y-4 pointer-events-none"
         x-transition:enter-end="opacity-100 translate-y-0 pointer-events-auto"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0 pointer-events-auto"
         x-transition:leave-end="opacity-0 -translate-y-4 pointer-events-none"
         class="absolute top-[88px] left-4 right-4 bg-white rounded-3xl shadow-2xl border border-gray-100 p-6 lg:hidden pointer-events-auto overflow-y-auto max-h-[80vh] z-40">
        
        <div class="space-y-6">
            <div class="space-y-3">
                <p class="text-xs font-bold uppercase tracking-wider text-gray-400">Navegación</p>
                <a href="{{ route('features') }}" @click="close" class="flex items-center justify-between py-3 text-lg font-black text-gray-900 border-b border-gray-100 uppercase tracking-tighter">Funciones</a>
                <a href="{{ route('solutions') }}" @click="close" class="flex items-center justify-between py-3 text-lg font-black text-gray-900 border-b border-gray-100 uppercase tracking-tighter">Soluciones</a>
                <a href="{{ route('contact') }}" @click="close" class="flex items-center justify-between py-3 text-lg font-black text-gray-900 border-b border-gray-100 uppercase tracking-tighter">Empresa</a>
                <a href="{{ route('blog.index') }}" @click="close" class="flex items-center justify-between py-3 text-lg font-black text-gray-900 border-b border-gray-100 uppercase tracking-tighter">Recursos</a>
                <a href="{{ route('pricing') }}" @click="close" class="flex items-center justify-between py-3 text-lg font-black text-gray-900 border-b border-gray-100 uppercase tracking-tighter">Precios</a>
            </div>

            <div class="pt-2 space-y-3 flex flex-col">
                <a href="{{ route('demo') }}" class="px-5 py-3.5 text-sm font-bold text-white bg-primary rounded-xl text-center uppercase tracking-wide shadow-sm hover:bg-primary-dark transition-colors">Comenzar</a>
                <a href="{{ route('demo') }}" class="px-5 py-3.5 text-sm font-bold text-primary border-2 border-primary/20 rounded-xl text-center uppercase tracking-wide hover:border-primary hover:bg-primary/5 transition-colors">Solicitar Demo</a>
                <a href="{{ route('admin.login') }}" class="py-3 text-[15px] font-bold text-gray-600 text-center uppercase tracking-widest mt-2 hover:text-primary transition-colors">Iniciar sesión</a>
            </div>
        </div>
    </div>
</header>

{{-- Spacer for floating navbar so content doesn't hide underneath initially --}}
<div class="h-[104px] w-full bg-white hidden"></div>

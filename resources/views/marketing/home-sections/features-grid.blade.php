{{-- Features Grid --}}
<section class="py-16 lg:py-24 bg-surface relative" id="features">
    <div class="absolute inset-0 bg-texture-dots pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary-dark-dark rounded-full text-sm font-medium mb-6 animate-fade-in">
                Características
            </span>
            <h2 class="text-4xl lg:text-5xl font-extrabold text-text-primary leading-tight mb-6">
                Todo lo que necesitás para gestionar tu cartera
            </h2>
            <p class="text-xl text-text-secondary leading-relaxed max-w-3xl mx-auto font-medium">
                Somos el único sistema que combina <span class="text-text-primary font-bold underline decoration-primary decoration-4">Software de Gestión con Imprenta Propia</span>, eliminando la fricción entre la liquidación y la entrega al propietario.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            {{-- Liquidaciones --}}
            <div class="bg-bg rounded-2xl border border-border-light p-8 lg:p-10 hover:shadow-xl transition-all duration-500 group">
                <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
                    <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-2xl font-black text-text-primary mb-3">Liquidaciones Inteligentes</h3>
                <p class="text-text-secondary font-medium leading-relaxed mb-6">Automatizá el cálculo de expensas ordinarias y extraordinarias. Distribución por coeficiente, generación masiva de PDFs y cierre de mes sin errores.</p>
                <p class="text-primary-dark font-bold text-sm">"Cerrá el mes en horas, no en días"</p>
            </div>

            {{-- Portal del Propietario --}}
            <div class="bg-bg rounded-2xl border border-border-light p-8 lg:p-10 hover:shadow-xl transition-all duration-500 group">
                <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-secondary/20 transition-colors">
                    <svg class="w-7 h-7 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-black text-text-primary mb-3">Portal del Propietario</h3>
                <p class="text-text-secondary font-medium leading-relaxed mb-6">Tus propietarios consultan expensas, balances y comunicaciones 24/7 desde su celular. Menos llamadas, más transparencia.</p>
                <p class="text-primary-dark font-bold text-sm">"Dale a tus propietarios transparencia total"</p>
            </div>

            {{-- IA Facturas --}}
            <div class="bg-bg rounded-2xl border border-border-light p-8 lg:p-10 hover:shadow-xl transition-all duration-500 group">
                <div class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-200 transition-colors">
                    <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                </div>
                <h3 class="text-2xl font-black text-text-primary mb-3">IA — Análisis de Facturas</h3>
                <p class="text-text-secondary font-medium leading-relaxed mb-6">Sacale una foto a la factura del proveedor y la IA extrae los datos automáticamente. Ahorrá más de 20 horas semanales de carga manual.</p>
                <p class="text-purple-600 font-bold text-sm">"La IA trabaja, vos controlás"</p>
            </div>

            {{-- Soporte Real-time --}}
            <div class="bg-bg rounded-2xl border border-border-light p-8 lg:p-10 hover:shadow-xl transition-all duration-500 group">
                <div class="w-14 h-14 bg-success/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-success/20 transition-colors">
                    <svg class="w-7 h-7 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </div>
                <h3 class="text-2xl font-black text-text-primary mb-3">Soporte en Tiempo Real</h3>
                <p class="text-text-secondary font-medium leading-relaxed mb-6">Chat directo con nuestro equipo vía WebSockets. Sin tickets, sin esperas. El soporte que responde cuando lo necesitás.</p>
                <p class="text-green-700 font-bold text-sm">"Soporte que responde cuando lo necesitás"</p>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('features') }}" class="text-primary font-bold text-lg hover:text-primary-dark hover:underline inline-flex items-center gap-2 transition-colors">
                Ver los 15 módulos completos <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</section>

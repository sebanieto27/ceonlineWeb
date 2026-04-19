{{-- Pain Points — Emotional Identification Section --}}
<section class="py-20 lg:py-28 bg-white" id="pain-points">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-14 lg:mb-20">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-primary leading-[1.08] tracking-tight animate-fade-in-up">
                ¿Esto te resulta familiar?
            </h2>
        </div>

        {{-- Pain Cards Grid --}}
        <div class="grid sm:grid-cols-2 gap-6 lg:gap-8 mb-14 lg:mb-20"
             x-data="{ shown: false }"
             x-intersect.once="shown = true">

            {{-- Card 1: Cierre de mes --}}
            <div class="group p-8 rounded-2xl border border-border-light bg-white hover:shadow-lg transition-all duration-300"
                 :class="shown ? 'animate-card-reveal' : 'opacity-0'" style="animation-delay: 0.1s">
                <div class="w-12 h-12 rounded-xl bg-danger/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-danger" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-black text-text-primary mb-3 tracking-tight">El cierre de mes te consume días enteros</h3>
                <p class="text-text-secondary font-medium leading-relaxed">Calcular expensas, distribuir gastos, generar PDFs… y si hay un error, empezar de nuevo.</p>
            </div>

            {{-- Card 2: Propietarios --}}
            <div class="group p-8 rounded-2xl border border-border-light bg-white hover:shadow-lg transition-all duration-300"
                 :class="shown ? 'animate-card-reveal' : 'opacity-0'" style="animation-delay: 0.2s">
                <div class="w-12 h-12 rounded-xl bg-warning/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-warning" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-black text-text-primary mb-3 tracking-tight">Los propietarios llaman sin parar pidiendo información</h3>
                <p class="text-text-secondary font-medium leading-relaxed">Cuánto deben, cuándo vence, qué se arregló… las mismas preguntas una y otra vez.</p>
            </div>

            {{-- Card 3: Facturas --}}
            <div class="group p-8 rounded-2xl border border-border-light bg-white hover:shadow-lg transition-all duration-300"
                 :class="shown ? 'animate-card-reveal' : 'opacity-0'" style="animation-delay: 0.3s">
                <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-black text-text-primary mb-3 tracking-tight">Las facturas de proveedores se apilan sin cargar</h3>
                <p class="text-text-secondary font-medium leading-relaxed">Montos, CUIT, fechas de vencimiento… todo se carga a mano y siempre hay algo que se pierde.</p>
            </div>

            {{-- Card 4: Información dispersa --}}
            <div class="group p-8 rounded-2xl border border-border-light bg-white hover:shadow-lg transition-all duration-300"
                 :class="shown ? 'animate-card-reveal' : 'opacity-0'" style="animation-delay: 0.4s">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25a2.25 2.25 0 0 1-2.25-2.25v-2.25Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-black text-text-primary mb-3 tracking-tight">Tu información está dispersa entre planillas, WhatsApp y papeles</h3>
                <p class="text-text-secondary font-medium leading-relaxed">No hay un solo lugar donde esté todo. Cada dato requiere buscar en tres sitios distintos.</p>
            </div>
        </div>

        {{-- Transition Copy --}}
        <div class="text-center">
            <p class="text-xl lg:text-2xl font-bold text-text-primary tracking-tight animate-fade-in-up">
                CEOnline centraliza todo en un solo sistema.
            </p>
            <p class="text-text-secondary font-medium mt-3 text-lg">
                Y lo hace de forma simple, rápida y sin curva de aprendizaje.
            </p>
        </div>
    </div>
</section>

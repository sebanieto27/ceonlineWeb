@extends('marketing.layouts.master')

@section('title', 'Probá CEO Online Gratis 30 Días — Sin Tarjeta de Crédito')
@section('description', 'Empezá a usar CEO Online gratis durante 30 días. Sin tarjeta, sin compromiso. Migración de datos sin cargo y soporte VIP de onboarding incluido.')

@section('content')

{{-- Hero --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-40 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Copy --}}
            <div>
                <span class="inline-flex items-center gap-2 px-4 py-2 bg-success/10 text-success rounded-full text-xs font-black uppercase tracking-widest mb-8">
                    30 Días Gratis — Sin Tarjeta
                </span>
                <h1 class="text-4xl lg:text-6xl font-black text-text-primary leading-[1.05] tracking-tight">
                    Cerrá el mes en horas, <span class="text-primary">no en días</span>
                </h1>
                <p class="text-text-secondary text-xl mt-8 font-medium leading-relaxed max-w-lg">
                    Probá la plataforma que usan +200 consorcios en Argentina. Liquidaciones, portal del propietario, IA para facturas y soporte en tiempo real.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mt-10">
                    <div class="flex items-center gap-3 text-text-secondary font-medium">
                        <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Sin tarjeta de crédito
                    </div>
                    <div class="flex items-center gap-3 text-text-secondary font-medium">
                        <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Migración de datos incluida
                    </div>
                    <div class="flex items-center gap-3 text-text-secondary font-medium">
                        <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Soporte VIP de onboarding
                    </div>
                </div>
            </div>

            {{-- Form --}}
            <div class="bg-white rounded-3xl p-10 shadow-2xl border border-border-light">
                <h2 class="text-2xl font-black text-text-primary mb-2">Empezá tu prueba gratuita</h2>
                <p class="text-text-secondary font-medium mb-8">Completá tus datos y te contactamos en menos de 24hs.</p>

                @if(session('success'))
                    <div class="bg-success/10 border border-success/20 text-success rounded-xl p-4 mb-6 font-medium">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('demo.submit') }}" method="POST" class="space-y-5">
                    @csrf
                    <input type="hidden" name="source" value="trial">
                    <div>
                        <label for="name" class="block text-sm font-bold text-text-primary mb-2">Nombre completo</label>
                        <input type="text" id="name" name="name" required value="{{ old('name') }}"
                               class="w-full px-4 py-3 bg-bg border border-border-light rounded-xl text-text-primary font-medium focus:ring-2 focus:ring-primary focus:border-primary transition-all"
                               placeholder="Tu nombre">
                        @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-bold text-text-primary mb-2">Email</label>
                        <input type="email" id="email" name="email" required value="{{ old('email') }}"
                               class="w-full px-4 py-3 bg-bg border border-border-light rounded-xl text-text-primary font-medium focus:ring-2 focus:ring-primary focus:border-primary transition-all"
                               placeholder="admin@tuadministracion.com">
                        @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-bold text-text-primary mb-2">Teléfono / WhatsApp</label>
                        <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}"
                               class="w-full px-4 py-3 bg-bg border border-border-light rounded-xl text-text-primary font-medium focus:ring-2 focus:ring-primary focus:border-primary transition-all"
                               placeholder="+54 223 555-1234">
                        @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="company" class="block text-sm font-bold text-text-primary mb-2">Nombre de tu Administración</label>
                        <input type="text" id="company" name="company" required value="{{ old('company') }}"
                               class="w-full px-4 py-3 bg-bg border border-border-light rounded-xl text-text-primary font-medium focus:ring-2 focus:ring-primary focus:border-primary transition-all"
                               placeholder="Ej: Administración García">
                        @error('company') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="units" class="block text-sm font-bold text-text-primary mb-2">¿Cuántos consorcios gestionás?</label>
                        <select id="units" name="units" required
                                class="w-full px-4 py-3 bg-bg border border-border-light rounded-xl text-text-primary font-medium focus:ring-2 focus:ring-primary focus:border-primary transition-all">
                            <option value="">Seleccioná una opción</option>
                            <option value="1-50" {{ old('units') == '1-50' ? 'selected' : '' }}>1 a 50 consorcios</option>
                            <option value="51-100" {{ old('units') == '51-100' ? 'selected' : '' }}>51 a 100 consorcios</option>
                            <option value="101-500" {{ old('units') == '101-500' ? 'selected' : '' }}>101 a 500 consorcios</option>
                            <option value="500+" {{ old('units') == '500+' ? 'selected' : '' }}>Más de 500 consorcios</option>
                        </select>
                        @error('units') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <input type="hidden" name="utm_source" value="{{ request('utm_source') }}">
                    <input type="hidden" name="utm_medium" value="{{ request('utm_medium') }}">
                    <input type="hidden" name="utm_campaign" value="{{ request('utm_campaign') }}">
                    <input type="hidden" name="utm_content" value="{{ request('utm_content') }}">
                    <button type="submit" class="w-full btn-primary !py-4 !text-base">
                        EMPEZAR MI PRUEBA GRATIS →
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- What you get — bg-white --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8"
         x-data="{ shown: false }" x-intersect.once="shown = true"
         :class="shown ? 'animate-section-reveal' : 'opacity-0'">
        <div class="text-center mb-14">
            <span class="inline-block px-3 py-1 bg-primary/10 text-primary font-black text-xs uppercase tracking-[0.2em] rounded-full mb-4">Incluido</span>
            <h2 class="text-3xl lg:text-4xl font-black text-text-primary tracking-tight">¿Qué incluye tu prueba gratuita?</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['🧾', 'Liquidaciones automáticas', 'Cerrá el mes en horas con cálculos inteligentes y distribución por coeficientes.'],
                ['🏠', 'Portal del Propietario', 'Tus propietarios consultan expensas, pagos y documentos sin llamarte.'],
                ['🤖', 'IA para Facturas', 'Sacale una foto a la factura y el sistema extrae montos, fechas y CUIT.'],
                ['💬', 'Soporte en Tiempo Real', 'Chat integrado con nuestro equipo técnico mientras usás el sistema.'],
            ] as $item)
            <div class="bg-slate-50 rounded-2xl border border-border-light p-8 text-center hover:shadow-xl hover:border-primary/30 transition-all duration-500">
                <div class="text-4xl mb-4">{{ $item[0] }}</div>
                <h3 class="text-lg font-black text-text-primary mb-2">{{ $item[1] }}</h3>
                <p class="text-text-secondary font-medium text-sm leading-relaxed">{{ $item[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Social proof — DARK --}}
<section class="py-20 lg:py-28 bg-gradient-to-br from-slate-900 via-primary-dark to-slate-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-10 pointer-events-none"></div>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10"
         x-data="{ shown: false }" x-intersect.once="shown = true"
         :class="shown ? 'animate-section-reveal' : 'opacity-0'">
        <h3 class="text-2xl lg:text-3xl font-black text-white text-center mb-14 tracking-tight">Números que hablan solos</h3>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            @foreach([
                ['200+', 'Consorcios activos'],
                ['42.000+', 'Propietarios conectados'],
                ['-50%', 'Carga manual de datos'],
                ['24hs', 'Tiempo de respuesta'],
            ] as $stat)
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 p-8">
                <p class="text-3xl lg:text-4xl font-black text-white">{{ $stat[0] }}</p>
                <p class="text-white/60 font-medium text-sm mt-2">{{ $stat[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Mission CTA --}}
@include('marketing.components.mission-cta')

@endsection

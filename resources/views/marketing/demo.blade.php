@extends('marketing.layouts.master')

@section('title', 'Solicitar Demo - CEO Online')
@section('description', 'Solicitá una demo personalizada de CEO Online o accedé a nuestro Sandbox para probar el sistema.')

@section('content')

{{-- Page Header --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-32 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
            Prueba el Futuro
        </span>
        <h1 class="text-4xl lg:text-7xl font-black text-text-primary mt-8 leading-[1.05] tracking-tight max-w-4xl mx-auto">
            Experimentá CEO Online hoy mismo
        </h1>
        <p class="text-text-secondary text-xl lg:text-2xl mt-8 max-w-2xl mx-auto font-medium leading-relaxed">
            Solicitá una demo personalizada con nuestro equipo o accedé a un entorno de prueba (Sandbox) para explorar todas las funciones a tu ritmo.
        </p>
    </div>
</section>

{{-- Demo Form --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-24 items-start">
            
            {{-- Form Column --}}
            <div class="bg-bg rounded-2xl border border-border-light p-10 lg:p-12 shadow-2xl shadow-primary/5">
                <h2 class="text-3xl font-black text-text-primary mb-2">Completá tus datos</h2>
                <p class="text-text-secondary font-medium mb-10 leading-relaxed">Te contactaremos en menos de 24 horas hábiles para coordinar tu acceso.</p>

                <form action="{{ route('demo.submit') }}" method="POST" class="space-y-6" id="demo-form">
                    @csrf

                    <div class="grid sm:grid-cols-2 gap-6">
                        {{-- Nombre --}}
                        <div>
                            <label for="name" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Nombre completo</label>
                            <input type="text" id="name" name="name" required value="{{ old('name') }}"
                                   class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all @error('name') !border-danger @enderror"
                                   placeholder="Ej: Juan Pérez">
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Email profesional</label>
                            <input type="email" id="email" name="email" required value="{{ old('email') }}"
                                   class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all @error('email') !border-danger @enderror"
                                   placeholder="juan@administracion.com">
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        {{-- Teléfono --}}
                        <div>
                            <label for="phone" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Teléfono</label>
                            <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}"
                                   class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all @error('phone') !border-danger @enderror"
                                   placeholder="+54 223 1234-567">
                        </div>

                        {{-- Administración --}}
                        <div>
                            <label for="company" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Administración</label>
                            <input type="text" id="company" name="company" required value="{{ old('company') }}"
                                   class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all @error('company') !border-danger @enderror"
                                   placeholder="Nombre de la empresa">
                        </div>
                    </div>

                    {{-- Cantidad de unidades --}}
                    <div>
                        <label for="units" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Cantidad de unidades</label>
                        <select id="units" name="units" required
                                class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all @error('units') !border-danger @enderror Appearance-none">
                            <option value="">Seleccioná una opción</option>
                            <option value="1-50" {{ old('units') == '1-50' ? 'selected' : '' }}>1 - 50 unidades</option>
                            <option value="51-100" {{ old('units') == '51-100' ? 'selected' : '' }}>51 - 100 unidades</option>
                            <option value="101-500" {{ old('units') == '101-500' ? 'selected' : '' }}>101 - 500 unidades</option>
                            <option value="500+" {{ old('units') == '500+' ? 'selected' : '' }}>Más de 500 unidades</option>
                        </select>
                    </div>

                    {{-- Mensaje --}}
                    <div>
                        <label for="message" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Mensaje (opcional)</label>
                        <textarea id="message" name="message" rows="4"
                                  class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all resize-none"
                                  placeholder="¿En qué podemos ayudarte?">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="w-full py-5 bg-primary text-white font-black rounded-xl hover:bg-primary-dark transition-all transform hover:scale-[1.01] shadow-xl shadow-primary/20 flex items-center justify-center gap-3">
                        SOLICITAR ACCESO
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                    
                    <p class="text-center text-xs text-text-secondary font-medium">Al solicitar acceso aceptás nuestra política de privacidad.</p>
                </form>
            </div>

            {{-- Info Column --}}
            <div class="lg:sticky lg:top-32 space-y-16">
                <div>
                    <h3 class="text-2xl font-black text-text-primary mb-8 border-b-4 border-primary inline-block pb-2">¿Qué incluye el acceso?</h3>
                    <div class="space-y-10">
                        @foreach([
                            ['Entorno Sandbox Full', 'Accedé a una administración de prueba con datos cargados para ver el sistema en acción.'],
                            ['Demo Personalizada', 'Si preferís, coordinamos una reunión de 30 minutos para desglosar tus necesidades específicas.'],
                            ['Plan de Migración', 'Te mostramos cómo migramos tus consorcios actuales sin fricción y sin cargo.'],
                            ['Soporte Estratégico', 'Nuestro equipo no solo te enseña el software, te ayuda a digitalizar tu operación.'],
                        ] as $item)
                        <div class="flex items-start gap-5">
                            <div class="mt-1.5 w-2 h-2 bg-primary rounded-full shrink-0"></div>
                            <div>
                                <h4 class="font-black text-text-primary mb-2">{{ $item[0] }}</h4>
                                <p class="text-text-secondary font-medium leading-relaxed">{{ $item[1] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Social Proof Mini --}}
                <div class="p-8 bg-surface border border-border-light rounded-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 -mr-16 -mt-16 rounded-full blur-2xl"></div>
                    <div class="flex items-center gap-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-text-primary italic font-bold leading-relaxed mb-4">
                        "El modo Sandbox nos permitió entender el potencial del sistema en segundos sin tener que hablar con un vendedor primero. La transparencia es total."
                    </p>
                    <div class="font-black text-xs uppercase tracking-widest text-text-secondary">
                        — Administrador de Mar del Plata
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

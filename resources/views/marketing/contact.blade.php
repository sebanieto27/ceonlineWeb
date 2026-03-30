@extends('marketing.layouts.master')

@section('title', 'Contacto - CEO Online')
@section('description', 'Ponete en contacto con el equipo de CEO Online. Estamos acá para ayudarte con cualquier consulta.')

@section('content')

{{-- Page Header --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-32 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
            Soporte & Ventas
        </span>
        <h1 class="text-4xl lg:text-7xl font-black text-text-primary mt-8 leading-[1.05] tracking-tight max-w-4xl mx-auto">
            Estamos aquí para ayudarte a crecer
        </h1>
        <p class="text-text-secondary text-xl lg:text-2xl mt-8 max-w-2xl mx-auto font-medium leading-relaxed">
            ¿Tenés dudas sobre el sistema o necesitás soporte técnico? Nuestro equipo está listo para responderte en tiempo real.
        </p>
    </div>
</section>

{{-- Contact Section --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-24 items-start">
            {{-- Contact Form --}}
            <div class="lg:col-span-3 bg-bg rounded-2xl border border-border-light p-10 lg:p-12 shadow-2xl shadow-primary/5">
                <h2 class="text-3xl font-black text-text-primary mb-10 leading-tight">Envianos un mensaje</h2>

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6" id="contact-form">
                    @csrf

                    <div class="grid sm:grid-cols-2 gap-6">
                        {{-- Nombre --}}
                        <div>
                            <label for="contact-name" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Nombre</label>
                            <input type="text" id="contact-name" name="name" required value="{{ old('name') }}"
                                   class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all @error('name') !border-danger @enderror"
                                   placeholder="Tu nombre">
                            @error('name')<p class="text-danger text-sm mt-1">{{ $message }}</p>@enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="contact-email" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Email</label>
                            <input type="email" id="contact-email" name="email" required value="{{ old('email') }}"
                                   class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all @error('email') !border-danger @enderror"
                                   placeholder="tu@email.com">
                            @error('email')<p class="text-danger text-sm mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    {{-- Asunto --}}
                    <div>
                        <label for="subject" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Asunto</label>
                        <select id="subject" name="subject" required
                                class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all Appearnce-none @error('subject') !border-danger @enderror">
                            <option value="">Seleccioná un asunto</option>
                            <option value="ventas" {{ old('subject') == 'ventas' ? 'selected' : '' }}>Información comercial</option>
                            <option value="soporte" {{ old('subject') == 'soporte' ? 'selected' : '' }}>Soporte técnico</option>
                            <option value="partnership" {{ old('subject') == 'partnership' ? 'selected' : '' }}>Partnership / Alianzas</option>
                            <option value="otro" {{ old('subject') == 'otro' ? 'selected' : '' }}>Otro</option>
                        </select>
                        @error('subject')<p class="text-danger text-sm mt-1">{{ $message }}</p>@enderror
                    </div>

                    {{-- Mensaje --}}
                    <div>
                        <label for="contact-message" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Mensaje</label>
                        <textarea id="contact-message" name="message" rows="5" required
                                  class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all resize-none @error('message') !border-danger @enderror"
                                  placeholder="Escribí tu consulta...">{{ old('message') }}</textarea>
                        @error('message')<p class="text-danger text-sm mt-1">{{ $message }}</p>@enderror
                    </div>

                    <button type="submit" class="w-full py-5 bg-text-primary text-white font-black rounded-xl hover:bg-black transition-all transform hover:scale-[1.01] shadow-xl flex items-center justify-center gap-3">
                        ENVIAR MENSAJE
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                    </button>
                </form>
            </div>

            {{-- Contact Info --}}
            <div class="lg:col-span-2 space-y-12">
                <div>
                    <h3 class="text-xl font-black text-text-primary mb-8 border-b-4 border-primary inline-block pb-2">Canales Directos</h3>
                    <div class="space-y-8">
                        <div class="flex items-start gap-5">
                            <div class="mt-1 w-2 h-2 bg-primary rounded-full shrink-0"></div>
                            <div>
                                <h4 class="font-black text-text-primary mb-1">Email General</h4>
                                <a href="mailto:info@ceonline.com.ar" class="text-primary font-bold hover:underline">info@ceonline.com.ar</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="mt-1 w-2 h-2 bg-primary rounded-full shrink-0"></div>
                            <div>
                                <h4 class="font-black text-text-primary mb-1">Soporte Técnico</h4>
                                <a href="mailto:soporte@ceonline.com.ar" class="text-primary font-bold hover:underline">soporte@ceonline.com.ar</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="mt-1 w-2 h-2 bg-primary rounded-full shrink-0"></div>
                            <div>
                                <h4 class="font-black text-text-primary mb-1">Oficina Central</h4>
                                <p class="text-text-secondary font-medium">Mar del Plata, Argentina</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-8 bg-surface border border-border-light rounded-2xl">
                    <h4 class="font-black text-text-primary mb-4">¿Ya sos cliente?</h4>
                    <p class="text-text-secondary font-medium mb-6 leading-relaxed">Accedé directamente al chat de soporte desde tu panel de administración para una respuesta más rápida.</p>
                    <a href="#" class="text-primary font-black hover:underline flex items-center gap-2">
                        Ir al Panel <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

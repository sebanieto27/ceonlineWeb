@extends('marketing.layouts.master')

@section('title', 'Contacto - CEO Online')
@section('description', 'Ponete en contacto con el equipo de CEO Online. Estamos acá para ayudarte con cualquier consulta.')

@section('content')

{{-- Page Header --}}
<section class="gradient-hero gradient-mesh py-24 lg:py-32 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 text-primary-dark rounded-full text-xs font-black uppercase tracking-widest animate-fade-in">
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

{{-- Contact Section — bg-white --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-16 lg:gap-24 items-start"
             x-data="{ shown: false }" x-intersect.once="shown = true"
             :class="shown ? 'animate-section-reveal' : 'opacity-0'">
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

                    {{-- Asunto + Propietarios --}}
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="subject" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Asunto</label>
                            <input type="text" id="subject" name="subject" required value="{{ old('subject') }}"
                                   class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all @error('subject') !border-danger @enderror"
                                   placeholder="Ej: Consulta comercial">
                            @error('subject')<p class="text-danger text-sm mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="owners_count" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Propietarios <span class="normal-case tracking-normal font-medium text-text-tertiary">(opcional)</span></label>
                            <select id="owners_count" name="owners_count"
                                    class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all">
                                <option value="">¿Cuántos administrás?</option>
                                <option value="1-20" {{ old('owners_count') == '1-20' ? 'selected' : '' }}>1 - 20</option>
                                <option value="21-50" {{ old('owners_count') == '21-50' ? 'selected' : '' }}>21 - 50</option>
                                <option value="51-100" {{ old('owners_count') == '51-100' ? 'selected' : '' }}>51 - 100</option>
                                <option value="100+" {{ old('owners_count') == '100+' ? 'selected' : '' }}>Más de 100</option>
                            </select>
                        </div>
                    </div>

                    {{-- Mensaje --}}
                    <div>
                        <label for="contact-message" class="block text-xs font-black text-text-primary uppercase tracking-widest mb-3">Mensaje</label>
                        <textarea id="contact-message" name="message" rows="5" required
                                  class="w-full px-5 py-4 bg-white border border-border-light rounded-xl text-text-primary font-bold focus:ring-2 focus:ring-primary focus:border-primary transition-all resize-none @error('message') !border-danger @enderror"
                                  placeholder="Escribí tu consulta...">{{ old('message') }}</textarea>
                        @error('message')<p class="text-danger text-sm mt-1">{{ $message }}</p>@enderror
                    </div>

                    <button type="submit" class="btn-primary w-full !py-5 !text-base flex items-center justify-center gap-3">
                        ENVIAR MENSAJE
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                    </button>
                </form>
            </div>

            {{-- Contact Info --}}
            <div class="lg:col-span-2 space-y-10">
                <div>
                    <h3 class="text-xl font-black text-text-primary mb-8 border-b-4 border-primary inline-block pb-2">Canales Directos</h3>
                    <div class="space-y-8">
                        <div class="flex items-start gap-5">
                            <div class="w-10 h-10 bg-success/10 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-black text-text-primary mb-1">WhatsApp</h4>
                                <a href="https://wa.me/5492235000000" target="_blank" rel="noopener noreferrer" class="text-success font-bold hover:underline">Escribinos por WhatsApp</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-black text-text-primary mb-1">Instagram</h4>
                                <a href="https://www.instagram.com/ceonline.ar" target="_blank" rel="noopener noreferrer" class="text-primary font-bold hover:underline">@ceonline.ar</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-black text-text-primary mb-1">Facebook</h4>
                                <a href="https://www.facebook.com/ceonline.ar" target="_blank" rel="noopener noreferrer" class="text-primary font-bold hover:underline">/ceonline.ar</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-black text-text-primary mb-1">Oficina Central</h4>
                                <p class="text-text-secondary font-medium">Mar del Plata, Argentina</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-8 bg-slate-50 border border-border-light rounded-2xl">
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

{{-- FAQ Section — bg-slate-50 --}}
<section class="py-20 lg:py-28 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8"
         x-data="{ shown: false, open: null }" x-intersect.once="shown = true"
         :class="shown ? 'animate-section-reveal' : 'opacity-0'">
        <div class="text-center mb-12">
            <span class="inline-block px-3 py-1 bg-primary/10 text-primary font-black text-xs uppercase tracking-[0.2em] rounded-full mb-4">Preguntas Frecuentes</span>
            <h2 class="text-3xl lg:text-4xl font-black text-text-primary tracking-tight">¿Tenés dudas?</h2>
        </div>
        <div class="space-y-4">
            @foreach([
                ['¿Cuánto demora la implementación?', 'El setup inicial toma 48 horas. Nuestro equipo migra tus datos y te deja el sistema listo para operar.'],
                ['¿Necesito conocimientos técnicos?', 'No. CEOnline está diseñado para administradores de consorcios, no para programadores. Si sabés usar un celular, sabés usar CEOnline.'],
                ['¿Puedo migrar desde otro sistema?', 'Sí. Migramos tus datos desde cualquier sistema anterior sin cargo adicional durante el onboarding.'],
                ['¿Tiene soporte en español?', 'Todo el sistema, la documentación y el soporte están 100% en español. Somos un equipo argentino.'],
                ['¿Qué pasa si necesito una feature que no tienen?', 'La agregamos. Nuestro roadmap se construye con el feedback directo de nuestros clientes.'],
            ] as $index => $faq)
            <div class="bg-white rounded-2xl border border-border-light overflow-hidden">
                <button @click="open === {{ $index }} ? open = null : open = {{ $index }}" class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 transition-colors">
                    <span class="font-black text-text-primary pr-4">{{ $faq[0] }}</span>
                    <svg class="w-5 h-5 text-text-tertiary shrink-0 transition-transform duration-300" :class="open === {{ $index }} && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === {{ $index }}" x-collapse>
                    <p class="px-6 pb-6 text-text-secondary font-medium leading-relaxed">{{ $faq[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

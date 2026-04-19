@extends('marketing.layouts.master')

@section('title', 'Página no encontrada — CEO Online')
@section('description', 'La página que buscás no existe o fue movida.')

@section('content')
<section class="pt-40 pb-32 lg:pt-56 lg:pb-48 bg-surface relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-50 pointer-events-none"></div>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        
        <div class="text-8xl lg:text-[12rem] font-black text-primary/10 leading-none mb-4 select-none">404</div>
        
        <h1 class="text-3xl lg:text-4xl font-black text-text-primary mb-4 -mt-8 lg:-mt-16">
            Página no encontrada
        </h1>
        <p class="text-lg text-text-secondary font-medium mb-10 max-w-xl mx-auto">
            La página que estás buscando no existe, fue movida o cambió de dirección. Podés volver al inicio o explorar nuestras secciones principales.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
            <a href="{{ route('home') }}" class="btn-primary !py-4 !px-8 !text-base">
                Volver al inicio
            </a>
            <a href="{{ route('contact') }}" class="btn-secondary !py-4 !px-8 !text-base">
                Contactanos
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 max-w-2xl mx-auto">
            <a href="{{ route('features') }}" class="bg-bg rounded-xl border border-border-light p-4 hover:shadow-md transition-all group text-center">
                <div class="text-2xl mb-2">⚡</div>
                <span class="text-sm font-bold text-text-primary group-hover:text-primary transition-colors">Funciones</span>
            </a>
            <a href="{{ route('pricing') }}" class="bg-bg rounded-xl border border-border-light p-4 hover:shadow-md transition-all group text-center">
                <div class="text-2xl mb-2">💰</div>
                <span class="text-sm font-bold text-text-primary group-hover:text-primary transition-colors">Precios</span>
            </a>
            <a href="{{ route('blog.index') }}" class="bg-bg rounded-xl border border-border-light p-4 hover:shadow-md transition-all group text-center">
                <div class="text-2xl mb-2">📝</div>
                <span class="text-sm font-bold text-text-primary group-hover:text-primary transition-colors">Blog</span>
            </a>
            <a href="{{ route('demo') }}" class="bg-bg rounded-xl border border-border-light p-4 hover:shadow-md transition-all group text-center">
                <div class="text-2xl mb-2">🚀</div>
                <span class="text-sm font-bold text-text-primary group-hover:text-primary transition-colors">Demo</span>
            </a>
        </div>
    </div>
</section>
@endsection

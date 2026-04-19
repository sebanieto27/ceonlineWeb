@extends('marketing.layouts.master')

@section('title', 'CEO Online - Gestión Integral de Consorcios')
@section('description', 'La plataforma más completa para gestionar consorcios. Expensas, pagos, comunicación, reportes y más. Prueba gratis.')

@section('content')

{{-- 1. Hero --}}
@include('marketing.components.hero')

{{-- 2. Pain Points — Emotional identification --}}
@include('marketing.home-sections.pain-points')

{{-- 3. Product Tabs — Interactive showcase --}}
@include('marketing.home-sections.product-tabs')

{{-- 4. Four Pillars — Deep-dive features --}}
@include('marketing.home-sections.four-pillars')

{{-- 5. AI Spotlight — Dark impact section --}}
@include('marketing.home-sections.ai-spotlight')

{{-- 6. Social Proof — Stats with counters --}}
@include('marketing.components.social-proof')

{{-- 7. Testimonials --}}
@include('marketing.components.testimonial')

{{-- 8. Blog Resources --}}
@include('marketing.home-sections.blog-resources')

{{-- 9. Final CTA --}}
@include('marketing.components.final-cta')

@endsection

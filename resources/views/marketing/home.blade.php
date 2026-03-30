@extends('marketing.layouts.master')

@section('title', 'CEO Online - Gestión Integral de Consorcios')
@section('description', 'La plataforma más completa para gestionar consorcios. Expensas, pagos, comunicación, reportes y más. Prueba gratis.')

@section('content')

{{-- Hero --}}
@include('marketing.components.hero')

{{-- Social Proof / Trust Logos --}}
@include('marketing.components.social-proof')

{{-- Features Grid (now zig-zag 1) --}}
@include('marketing.home-sections.features-grid')

{{-- IA & Automation Section --}}
@include('marketing.home-sections.ia-automation')

{{-- Solutions by Sector --}}
@include('marketing.home-sections.solutions')

{{-- Time Savings Section --}}
@include('marketing.home-sections.time-savings')

{{-- Testimonials --}}
@include('marketing.components.testimonial')

{{-- Mission & CTA Unificado (Slack Style) --}}
@include('marketing.components.mission-cta')

@endsection

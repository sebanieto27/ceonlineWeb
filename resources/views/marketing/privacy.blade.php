@extends('marketing.layouts.master')

@section('title', 'Política de Privacidad - CEO Online')
@section('description', 'Política de privacidad de CEO Online. Cómo protegemos y utilizamos tus datos personales.')
@section('robots', 'noindex, nofollow')

@section('content')

{{-- Hero --}}
<section class="gradient-hero gradient-mesh py-20 lg:py-24 border-b border-border-light relative overflow-hidden">
    <div class="absolute inset-0 bg-texture-dots opacity-30 pointer-events-none"></div>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <nav class="flex items-center gap-2 text-sm text-text-secondary font-medium mb-8">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Inicio</a>
            <span class="text-border-light">/</span>
            <span class="text-text-primary">Privacidad</span>
        </nav>
        <h1 class="text-4xl lg:text-5xl font-black text-text-primary tracking-tight">Política de Privacidad</h1>
        <p class="text-text-secondary font-medium mt-4">Última actualización: {{ now()->format('d/m/Y') }}</p>
    </div>
</section>

<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="prose prose-lg prose-slate max-w-none prose-headings:font-black prose-headings:text-text-primary prose-p:text-text-secondary prose-p:font-medium">

            <h2>1. Información que recopilamos</h2>
            <p>CEO Online recopila información que vos nos proporcionás directamente al utilizar nuestros servicios:</p>
            <ul>
                <li><strong>Datos de registro:</strong> nombre, email, teléfono, nombre de la administración.</li>
                <li><strong>Datos de uso:</strong> información de navegación, páginas visitadas, funcionalidades utilizadas.</li>
                <li><strong>Datos de consorcios:</strong> información de gestión cargada por el administrador (expensas, propietarios, proveedores).</li>
            </ul>

            <h2>2. Cómo utilizamos tu información</h2>
            <p>Utilizamos la información recopilada para:</p>
            <ul>
                <li>Proveer, mantener y mejorar nuestros servicios.</li>
                <li>Comunicarnos con vos sobre tu cuenta, actualizaciones y novedades.</li>
                <li>Brindar soporte técnico personalizado.</li>
                <li>Cumplir con obligaciones legales y fiscales aplicables en Argentina.</li>
            </ul>

            <h2>3. Protección de datos</h2>
            <p>Implementamos medidas de seguridad técnicas y organizativas para proteger tu información:</p>
            <ul>
                <li>Cifrado de datos en tránsito (HTTPS/TLS) y en reposo.</li>
                <li>Acceso restringido mediante roles y permisos.</li>
                <li>Backups automáticos y auditoría de accesos.</li>
                <li>Infraestructura alojada en servidores seguros.</li>
            </ul>

            <h2>4. Compartir información</h2>
            <p>No vendemos, alquilamos ni compartimos tu información personal con terceros, excepto:</p>
            <ul>
                <li>Cuando sea necesario para proveer el servicio (ej: procesamiento de pagos).</li>
                <li>Cuando lo requiera la ley o autoridad competente argentina.</li>
                <li>Con tu consentimiento explícito.</li>
            </ul>

            <h2>5. Tus derechos</h2>
            <p>De acuerdo con la Ley 25.326 de Protección de Datos Personales de Argentina, tenés derecho a:</p>
            <ul>
                <li>Acceder a tus datos personales.</li>
                <li>Rectificar datos inexactos o incompletos.</li>
                <li>Solicitar la supresión de tus datos.</li>
                <li>Oponerte al tratamiento de tus datos.</li>
            </ul>

            <h2>6. Cookies</h2>
            <p>Utilizamos cookies esenciales para el funcionamiento del sitio y cookies analíticas para mejorar la experiencia de usuario. Podés gestionar tus preferencias de cookies desde tu navegador.</p>

            <h2>7. Contacto</h2>
            <p>Para consultas sobre privacidad, contactanos en <a href="mailto:privacidad@ceonline.com.ar">privacidad@ceonline.com.ar</a> o a través de nuestro <a href="{{ route('contact') }}">formulario de contacto</a>.</p>

        </div>
    </div>
</section>

@endsection

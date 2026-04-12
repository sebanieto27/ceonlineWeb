@extends('marketing.layouts.master')

@section('title', 'Términos y Condiciones - CEO Online')
@section('description', 'Términos y condiciones de uso de la plataforma CEO Online para gestión de consorcios.')

@section('content')

<section class="pt-24 lg:pt-32 pb-24 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl lg:text-5xl font-black text-text-primary mb-8">Términos y Condiciones</h1>
        <p class="text-text-secondary font-medium mb-4">Última actualización: {{ now()->format('d/m/Y') }}</p>

        <div class="prose prose-lg prose-slate max-w-none prose-headings:font-black prose-headings:text-text-primary prose-p:text-text-secondary prose-p:font-medium">

            <h2>1. Aceptación de los términos</h2>
            <p>Al acceder y utilizar la plataforma CEO Online, aceptás estos Términos y Condiciones en su totalidad. Si no estás de acuerdo, te pedimos que no utilices el servicio.</p>

            <h2>2. Descripción del servicio</h2>
            <p>CEO Online es una plataforma SaaS (Software como Servicio) diseñada para la gestión integral de consorcios de propiedad horizontal en Argentina. El servicio incluye módulos de liquidación de expensas, portal del propietario, gestión de proveedores, comunicación y reportes, entre otros.</p>

            <h2>3. Registro y cuenta</h2>
            <ul>
                <li>Debés proporcionar información veraz y actualizada al registrarte.</li>
                <li>Sos responsable de mantener la confidencialidad de tus credenciales de acceso.</li>
                <li>Debés notificarnos inmediatamente sobre cualquier uso no autorizado de tu cuenta.</li>
            </ul>

            <h2>4. Uso aceptable</h2>
            <p>Te comprometés a utilizar CEO Online exclusivamente para fines de gestión de consorcios y de acuerdo con la legislación vigente en Argentina. Queda prohibido:</p>
            <ul>
                <li>Utilizar el servicio para actividades ilegales o fraudulentas.</li>
                <li>Intentar vulnerar la seguridad de la plataforma.</li>
                <li>Compartir credenciales con personas no autorizadas.</li>
                <li>Reproducir, distribuir o comercializar el software.</li>
            </ul>

            <h2>5. Planes y facturación</h2>
            <ul>
                <li>Los precios se definen según el plan contratado y la cantidad de consorcios gestionados.</li>
                <li>El primer mes es gratuito en todos los planes.</li>
                <li>No hay permanencia mínima. Podés cancelar en cualquier momento.</li>
                <li>Los cambios de plan se aplican en el siguiente período de facturación.</li>
            </ul>

            <h2>6. Propiedad de los datos</h2>
            <p>Los datos cargados en la plataforma son de tu exclusiva propiedad. CEO Online actúa como encargado de tratamiento y no adquiere derechos sobre tu información. En caso de baja del servicio, podés solicitar la exportación completa de tus datos.</p>

            <h2>7. Disponibilidad del servicio</h2>
            <p>Nos comprometemos a mantener la plataforma disponible y funcional. Podemos realizar mantenimientos programados notificando con anticipación. No garantizamos disponibilidad ininterrumpida en casos de fuerza mayor.</p>

            <h2>8. Propiedad intelectual</h2>
            <p>CEO Online, su código, diseño, marca y contenido son propiedad exclusiva de CEO Online. La contratación del servicio no otorga derechos de propiedad intelectual sobre la plataforma.</p>

            <h2>9. Limitación de responsabilidad</h2>
            <p>CEO Online no será responsable por daños indirectos, incidentales o consecuentes derivados del uso de la plataforma. Nuestra responsabilidad máxima se limita al monto abonado por el servicio en los últimos 12 meses.</p>

            <h2>10. Modificaciones</h2>
            <p>Nos reservamos el derecho de modificar estos términos. Notificaremos los cambios relevantes por email con al menos 30 días de anticipación.</p>

            <h2>11. Ley aplicable</h2>
            <p>Estos términos se rigen por las leyes de la República Argentina. Cualquier controversia será resuelta por los tribunales ordinarios de la Ciudad de Mar del Plata, Provincia de Buenos Aires.</p>

            <h2>12. Contacto</h2>
            <p>Para consultas sobre estos términos, contactanos en <a href="mailto:legal@ceonline.com.ar">legal@ceonline.com.ar</a> o a través de nuestro <a href="{{ route('contact') }}">formulario de contacto</a>.</p>

        </div>
    </div>
</section>

@endsection

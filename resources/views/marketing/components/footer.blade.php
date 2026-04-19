{{-- Footer Component --}}
<footer class="bg-gray-900 text-white">
    {{-- Newsletter Bar --}}
    <div class="border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="text-lg font-semibold">Suscribite a nuestro newsletter</h3>
                    <p class="text-gray-400 text-sm mt-1">Recibí novedades y tips sobre gestión de consorcios</p>
                </div>
                <form action="{{ route('newsletter') }}" method="POST" class="flex w-full md:w-auto gap-2">
                    @csrf
                    <input type="email" name="email" required placeholder="tu@email.com"
                           class="flex-1 md:w-72 px-4 py-2.5 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:ring-2 focus:ring-primary focus:border-primary text-sm">
                    <button type="submit" class="btn-primary !py-2.5 !px-6 !text-sm whitespace-nowrap">Suscribirme</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Main Footer --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
            {{-- Brand --}}
            <div class="col-span-2 md:col-span-4 lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <img src="{{ asset('logo/logo-ceonline.png') }}" alt="CEO Online" loading="lazy" class="h-8 w-auto brightness-0 invert">
                </a>
                <p class="text-gray-400 text-sm mt-3 leading-relaxed">
                    La plataforma integral para gestionar consorcios de forma inteligente.
                </p>
                {{-- Social Icons --}}
                <div class="flex items-center gap-3 mt-5">
                    <a href="https://www.linkedin.com/company/ceonline" target="_blank" rel="noopener" class="w-9 h-9 bg-gray-800 hover:bg-primary rounded-lg flex items-center justify-center transition-colors" aria-label="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/ceonline.ar" target="_blank" rel="noopener" class="w-9 h-9 bg-gray-800 hover:bg-primary rounded-lg flex items-center justify-center transition-colors" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Producto --}}
            <div>
                <h4 class="font-semibold text-sm uppercase tracking-wider text-gray-300 mb-4">Producto</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('features') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Funciones</a></li>
                    <li><a href="{{ route('solutions') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Soluciones</a></li>
                    <li><a href="{{ route('pricing') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Precios</a></li>
                    <li><a href="{{ route('trial') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Prueba Gratis</a></li>
                </ul>
            </div>

            {{-- Empresa --}}
            <div>
                <h4 class="font-semibold text-sm uppercase tracking-wider text-gray-300 mb-4">Empresa</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Contacto</a></li>
                    <li><a href="{{ route('demo') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Solicitar Demo</a></li>
                </ul>
            </div>

            {{-- Recursos --}}
            <div>
                <h4 class="font-semibold text-sm uppercase tracking-wider text-gray-300 mb-4">Recursos</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Blog y Novedades</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Centro de Ayuda</a></li>
                    <li><a href="/login" class="text-gray-400 hover:text-white text-sm transition-colors">Acceso Administrador</a></li>
                </ul>
            </div>

            {{-- Legal --}}
            <div>
                <h4 class="font-semibold text-sm uppercase tracking-wider text-gray-300 mb-4">Legal</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('privacy') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Privacidad</a></li>
                    <li><a href="{{ route('terms') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Términos</a></li>
                </ul>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-gray-400 text-sm">© {{ date('Y') }} CEO Online. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

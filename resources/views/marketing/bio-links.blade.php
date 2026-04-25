<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEO Online — Links</title>
    <meta name="description" content="Todos los links de CEO Online: demo, contacto, blog, redes sociales y más.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/png" href="{{ asset('logo/logo-ceonline.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @include('marketing.components.tracking-scripts')
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 50%, #0f172a 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem 1rem;
        }
        .logo { width: 80px; height: 80px; border-radius: 50%; background: white; padding: 12px; margin-bottom: 1rem; box-shadow: 0 4px 24px rgba(0,0,0,0.3); }
        .logo img { width: 100%; height: 100%; object-fit: contain; }
        h1 { color: white; font-size: 1.5rem; margin-bottom: 0.25rem; }
        .subtitle { color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-bottom: 2rem; }
        .links { width: 100%; max-width: 420px; display: flex; flex-direction: column; gap: 0.75rem; }
        .link-btn {
            display: flex; align-items: center; gap: 0.75rem;
            padding: 1rem 1.25rem; border-radius: 1rem;
            text-decoration: none; font-weight: 600; font-size: 0.95rem;
            transition: transform 0.15s, box-shadow 0.15s;
            box-shadow: 0 2px 12px rgba(0,0,0,0.15);
        }
        .link-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,0.25); }
        .link-icon { font-size: 1.3rem; flex-shrink: 0; }
        .footer { margin-top: auto; padding-top: 2rem; color: rgba(255,255,255,0.4); font-size: 0.75rem; }
        .footer a { color: rgba(255,255,255,0.6); text-decoration: none; }
    </style>
</head>
<body>
    <div class="logo">
        <picture>
            <source srcset="{{ asset('logo/logo-ceonline.webp') }}" type="image/webp">
            <img src="{{ asset('logo/logo-ceonline.png') }}" alt="CEO Online">
        </picture>
    </div>
    <h1>CEO Online</h1>
    <p class="subtitle">Gestión integral de consorcios</p>

    <div class="links">
        @forelse($links as $link)
            <a href="{{ $link->url }}" target="_blank" rel="noopener" class="link-btn"
               style="background-color: {{ $link->bg_color }}; color: {{ $link->text_color }}">
                @if($link->icon)
                    <span class="link-icon">{{ $link->icon }}</span>
                @endif
                {{ $link->title }}
            </a>
        @empty
            <p style="color: rgba(255,255,255,0.5); text-align: center;">Próximamente</p>
        @endforelse
    </div>

    <div class="footer">
        <a href="{{ route('home') }}">ceonline.com.ar</a>
    </div>

    @include('marketing.components.tracking-body')
</body>
</html>

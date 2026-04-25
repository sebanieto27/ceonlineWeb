<?php

namespace App\Filament\Widgets;

use App\Models\PageMeta;
use Filament\Widgets\Widget;

class SeoHealthWidget extends Widget
{
    protected static ?int $sort = 7;

    protected static string $view = 'filament.widgets.seo-health';

    protected int | string | array $columnSpan = 'full';

    private const PAGES = [
        'home'       => 'Home (/)',
        'features'   => 'Características (/caracteristicas)',
        'solutions'  => 'Soluciones (/soluciones)',
        'pricing'    => 'Precios (/precios)',
        'demo'       => 'Demo (/demo)',
        'contact'    => 'Contacto (/contacto)',
        'trial'      => 'Prueba Gratis (/prueba-gratis)',
        'about'      => 'Empresa (/empresa)',
        'blog.index' => 'Blog (/blog)',
        'privacy'    => 'Privacidad (/privacidad)',
        'terms'      => 'Términos (/terminos)',
    ];

    public function getViewData(): array
    {
        $existing = PageMeta::all()->keyBy('route_name');

        $rows = collect(self::PAGES)->map(function (string $label, string $routeName) use ($existing) {
            $meta = $existing->get($routeName);

            $hasTitle = $meta && filled($meta->meta_title);
            $hasDesc  = $meta && filled($meta->meta_description);
            $hasOg    = $meta && filled($meta->og_image);
            $score    = ($hasTitle ? 1 : 0) + ($hasDesc ? 1 : 0) + ($hasOg ? 1 : 0);

            return [
                'route'      => $routeName,
                'label'      => $label,
                'status'     => match (true) { $score === 3 => 'ok', $score >= 1 => 'partial', default => 'missing' },
                'has_title'  => $hasTitle,
                'title_len'  => $hasTitle ? mb_strlen($meta->meta_title) : 0,
                'has_desc'   => $hasDesc,
                'desc_len'   => $hasDesc ? mb_strlen($meta->meta_description) : 0,
                'has_og'     => $hasOg,
                'meta_id'    => $meta?->id,
            ];
        });

        return ['rows' => $rows];
    }
}

